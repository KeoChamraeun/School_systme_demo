<nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
    <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <nav>
            <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                <li class="leading-normal text-sm">
                    <a class="opacity-50 text-slate-700" href="javascript:;">{{trans('main-sidebar.' . Route::currentRouteName())}}</a>
                </li>
                <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">LTR</li>
            </ol>
            <h6 class="mb-0 font-bold capitalize">{{trans('main-sidebar.' . Route::currentRouteName())}}</h6>
        </nav>

        <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
            <li class="flex items-center pr-4 xl:inline-block" id="sidebaricononlys">
                <a href="javascript:;" class="block p-0 transition-all ease-nav-brand text-sm text-slate-500">
                    <i class="fas fa-bars"></i>
                </a>
            </li>

            <a class="flex items-center pr-4" href="javascript:;">
                <div id="fullscreenbtn" aria-label="Close"><i id="fullscreenicon" class="fas fa-expand"></i></div>
            </a>

            <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                <li class="flex items-center">
                    <form method="post" action="{{route('logout')}}">
                        @csrf
                        <button class="block px-0 py-2 font-semibold transition-all ease-nav-brand text-sm text-slate-500">
                            <i class="fa fa-user sm:mr-1"></i>
                            <span class="hidden sm:inline">{{trans('header.logout')}}</span>
                        </button>
                    </form>
                </li>
        </div>
        </ul>
    </div>
    </div>
</nav>