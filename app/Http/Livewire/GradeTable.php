<?php

namespace App\Http\Livewire;

use Illuminate\Support\Str;
use App\Models\Grade;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Redirect;
use Livewire\Redirector;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class GradeTable extends PowerGridComponent
{
    use ActionButton;

    public $name;
    public $notes;

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Header::make()->showSearchInput()
                ->showToggleColumns(),
            // Footer::make()
            //     ->showPerPage()
            //     ->showRecordCount(),
        ];
    }

    /**
     * PowerGrid datasource.
     *
     * @return Builder<\App\Models\Grade>
     */
    public function datasource(): Builder
    {
        return Grade::query();
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function addColumns(): PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('id')
            ->addColumn('name')
            ->addColumn('name_lower', function (Grade $model) {
                return strtolower(e($model->name));
            })
            ->addColumn('notes', fn(Grade $model) => Str::words(e($model->notes)))
            ->addColumn('created_at_formatted', fn(Grade $model) => Carbon::parse($model->created_at)->format('d-m-Y'))
            ->addColumn('updated_at_formatted', fn(Grade $model) => Carbon::parse($model->updated_at)->diffForHumans());
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')->withCount("Num"),
            Column::make('NAME', 'name')
                ->sortable()
                ->searchable()
                ->editOnClick(),
            Column::make('NOTES', 'notes')
                ->sortable()
                ->searchable()
                ->editOnClick(),
            Column::make('CREATED AT', 'created_at_formatted', 'created_at')
                ->searchable()
                ->sortable(),
            Column::make('UPDATED AT', 'updated_at_formatted', 'updated_at')
                ->searchable()
                ->sortable(),
        ];
    }

    public function header(): array
    {
        return [
            Button::add('bulk-sold-out')
                ->class('btn btn-dark my-1 inline-block fa-regular fa-trash-can')
                ->emit('bulkDeleteAllEvent', [])
        ];
    }

    protected function getListeners()
    {
        return array_merge(
            parent::getListeners(),
            ['bulkDeleteAllEvent']
        );
    }

    public function bulkDeleteAllEvent(): Redirector
    {
        $selectedIds = $this->checkboxValues;

        if (count($selectedIds) == 0) {
            return Redirect::route('grade')->with("error", trans('alert.errorselect'));
        }

        $idsToDelete = [];
        $namesOfGradesWithClassrooms = '';

        foreach ($selectedIds as $id) {
            $grade = Grade::find($id);

            if (!$grade->classrooms()->exists()) {
                $idsToDelete[] = $id;
            } else {
                $namesOfGradesWithClassrooms .= $grade->name . ', ';
            }
        }

        if (count($idsToDelete) > 0) {
            Grade::destroy($idsToDelete);

            if (!empty($namesOfGradesWithClassrooms)) {
                $errorMsg = trans('alert.cantdeletedgrades') . ': ' . $namesOfGradesWithClassrooms;
                return Redirect::route('grade')->with('success', trans('alert.deletedselected'))->with('error', $errorMsg);
            }
            return Redirect::route('grade')->with('success', trans('alert.deletedselected'));
        }

        if (!empty($namesOfGradesWithClassrooms)) {
            $namesOfGradesWithClassrooms = substr($namesOfGradesWithClassrooms, 0, -2);
            $errorMsg = trans('alert.cantdeletedgrades') . ': ' . $namesOfGradesWithClassrooms;
            return Redirect::route('grade')->with('error', $errorMsg);
        }

        return Redirect::route('grade')->with('error', trans('alert.gradehasclassrooms'));
    }

    public function actions(): array
    {
        return [
            Button::make('destroy', 'Delete')
                ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm ')
                ->target('_self')
                ->route('grade.destroy', ['id'])
                ->method('delete')
        ];
    }

    public function onUpdatedEditable(string $id, string $field, string $value): void
    {
        try {
            $updated = Grade::query()->findOrFail($id)->update([
                $field => $value,
            ]);
        } catch (QueryException $exception) {
            $updated = false;
        }

        if ($updated) {
            $this->fillData($updated);
        }
    }
}
