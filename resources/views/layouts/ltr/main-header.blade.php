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

                <li class="relative flex items-center pl-2 px-4">
                    <p class="hidden transform-dropdown-show"></p>
                    <a id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification" href="javascript:;" class="block p-0 transition-all text-sm ease-nav-brand text-slate-500" aria-expanded="false">
                        <div class="relative">
                            <i class="cursor-pointer fa fa-bell fa-xl" aria-hidden="true"></i>
                            <div class="absolute inline-flex items-center justify-center w-5 h-5 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
                                <p class="text-xs">{{ auth()->user()->unreadNotifications->count()}}</p>
                            </div>
                        </div>
                    </a>
                </li>

                <div id="dropdownNotification" class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-800 dark:divide-gray-700" aria-labelledby="dropdownNotificationButton">
                    <div class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 dark:bg-gray-800 dark:text-white">
                        {{ trans('header.notifications') }}
                    </div>
                    @php
                    $notifications = auth()->user()->unreadNotifications;
                    @endphp
                    @forelse ($notifications as $notification )
                    @php
                    $user = App\Models\User::find($notification->data['comment_author_id']);
                    @endphp
                    @if($loop->iteration <= 4)
                        <div class="divide-y max-w-sm divide-gray-100 dark:divide-gray-700">
                        <form method="post" action="{{route('notificationNewComment.remove')}}">
                            @method('delete')
                            @csrf
                            <input type="hidden" value="{{$notification->data['post_id']}}" name="post_id">
                            <input type="hidden" value="{{$notification->id}}" name="notification_id">
                            <button href="{{ route('post.show', $notification->data['post_id']) }}" class="flex w-full px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                <div class="flex-shrink-0">
                                    <img class="rounded-full w-11 h-11" src="{{ $user->profile_photo_url }}" alt="{{$notification->data['comment_author_name']}} image">
                                    <div class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-green-400 border border-white rounded-full dark:border-gray-800">
                                        <svg class="w-3 h-3 text-white" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex flex-col justify-center items-start">
                                    <div class="text-sm block font-semibold text-gray-900 dark:text-white px-2">{{$notification->data['comment_author_name']}}</div>
                                    <h6 class="mb-1 font-normal leading-normal text-sm truncate break-words max-w-xs px-2">{{$notification->data['comment_content']}}</h6>
                                    <div class="text-xs text-blue-600 dark:text-blue-500">{{$notification->created_at->diffForHumans()}}</div>
                                </div>
                            </button>
                        </form>
                </div>
                @endif
                @empty
                <div class="text-sm p-4">
                    {{ trans('header.no-notifications') }}
                </div>
                @endforelse
                @if(auth()->user()->unreadNotifications->count() > 4)
                <a href="#" class="block py-2 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
                    <div class="inline-flex items-center">
                        <svg class="w-4 h-4 mr-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                        </svg>
                        {{ trans('header.view-all') }}
                    </div>
                </a>
                @endif
        </div>
        </ul>
    </div>
    </div>
</nav>