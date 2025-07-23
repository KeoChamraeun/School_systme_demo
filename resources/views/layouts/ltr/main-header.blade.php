   <!-- Navbar -->
   <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
       <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
           <nav>
               <!-- breadcrumb -->
               <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                   <li class="leading-normal text-sm">
                       <a class="opacity-50 text-slate-700" href="javascript:;">{{trans('main-sidebar.' . Route::currentRouteName())}}</a>
                   </li>
                   <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">LTR</li>
               </ol>
               <h6 class="mb-0 font-bold capitalize">{{trans('main-sidebar.' . Route::currentRouteName())}}</h6>
           </nav>



           <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
               {{-- <div class="flex items-center md:ml-auto md:pr-4">
          <div class="hs:hidden lg:flex relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
            <span class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
              <i class="fas fa-search"></i>
            </span>
            <input type="search" class="pl-8.75 px-8 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" autocomplete="off" value="" placeholder="{{trans('header.search-placeholder')}}" />
           </div>
       </div> --}}

       {{-- Collapse Sidebar and Full Screen icon --}}
       <li class="flex items-center pr-4 hs:hidden xl:inline-block" id="sidebaricononlys">
           <a href="javascript:;" class="block p-0 transition-all ease-nav-brand text-sm text-slate-500">
               <div class="w-4.5 overflow-hidden">
                   <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                   <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                   <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
               </div>
           </a>
       </li>

       <a class="flex items-center pr-4  " href="javascript:;">
           <div id="fullscreenbtn" aria-label="Close"><i id="fullscreenicon" class="fas fa-expand"></i></div>
       </a>
       </div>
       {{-- ---------------------------------------------- --}}

       <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
           <!-- online builder btn  -->
           {{-- <li class="flex items-end m">
            <a class="btn btn-primary" target="_blank">Search</a>
          </li> --}}
           <li class="flex items-center">
               <form method="post" action="{{route('logout')}}">
                   @csrf
                   <button class="block px-0 py-2 font-semibold transition-all ease-nav-brand text-sm text-slate-500">
                       <i class="fa fa-user sm:mr-1"></i>
                       <span class="hidden sm:inline">{{trans('header.logout')}}</span>
                   </button>
               </form>
           </li>



           <!-- notifications -->


           <li class="relative flex items-center pl-2 px-4">
               <p class="hidden transform-dropdown-show"></p>
               <a id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification" href="javascript:;"
                   class="block p-0 transition-all text-sm ease-nav-brand text-slate-500"
                   aria-expanded="false">
                   <div class="relative">
                       <i class="cursor-pointer fa fa-bell fa-xl" aria-hidden="true"></i>
                       <div class="absolute inline-flex items-center justify-center w-5 h-5 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full
                    -top-2 -right-2 dark:border-gray-900">
                           <p class="text-xs">{{ auth()->user()->unreadNotifications->count()}}</p>
                       </div>
                   </div>
               </a>
           </li>

           <div>
               <!-- Dropdown menu -->
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

                       <div class="divide-y max-w-sm  divide-gray-100 dark:divide-gray-700">
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
                               <div class="flex flex-col justify-center items-start ">
                                   <div class="text-sm block font-semibold text-gray-900 dark:text-white px-2">{{$notification->data['comment_author_name']}}
                                   </div>
                                   <h6 class="mb-1 font-normal leading-normal text-sm truncate break-words max-w-xs px-2">
                                       {{$notification->data['comment_content']}}
                                   </h6>
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
                   <div class="inline-flex items-center ">
                       <svg class="w-4 h-4 mr-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                           <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                       </svg>
                       {{ trans('header.view-all') }}
                   </div>
               </a>
               @endif
           </div>

           {{------------------------------------------- Language Switcher ------------------------------------------}}

           <div class="flex mx-2 pt-3">

               <button id="states-button" data-dropdown-toggle="dropdown-states" class="btn btn-dark flex-shrink-0 z-10 inline-flex items-center py-1 px-1 text-sm font-medium text-center  border border-gray-300 rounded-l-lg text-black dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">
                   @if( LaravelLocalization::getCurrentLocale() == "ar" )
                   <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 30 30.000001" preserveAspectRatio="xMidYMid meet" version="1.0">
                       <defs>
                           <clipPath id="id1">
                               <path d="M 2.429688 4.792969 L 27.105469 4.792969 L 27.105469 22.9375 L 2.429688 22.9375 Z" clip-rule="nonzero" />
                           </clipPath>
                           <clipPath id="id2">
                               <path d="M 2.429688 10 L 27.105469 10 L 27.105469 18 L 2.429688 18 Z" clip-rule="nonzero" />
                           </clipPath>
                           <clipPath id="id3">
                               <path d="M 2.429688 4.792969 L 27.105469 4.792969 L 27.105469 11 L 2.429688 11 Z" clip-rule="nonzero" />
                           </clipPath>
                       </defs>
                       <!-- Bottom blue stripe -->
                       <g clip-path="url(#id1)">
                           <path fill="#032EA1" d="M 27.101562 20.144531 C 27.101562 21.6875 25.875 22.9375 24.359375 22.9375 L 5.175781 22.9375 C 3.664062 22.9375 2.4375 21.6875 2.4375 20.144531 L 2.4375 7.582031 C 2.4375 6.042969 3.664062 4.792969 5.175781 4.792969 L 24.359375 4.792969 C 25.875 4.792969 27.101562 6.042969 27.101562 7.582031 Z" fill-opacity="1" fill-rule="nonzero" />
                       </g>
                       <!-- Middle red stripe -->
                       <g clip-path="url(#id2)">
                           <path fill="#E00025" d="M 2.4375 10.375 L 27.101562 10.375 L 27.101562 17.355469 L 2.4375 17.355469 Z" fill-opacity="1" fill-rule="nonzero" />
                       </g>
                       <!-- Top blue stripe -->
                       <g clip-path="url(#id3)">
                           <path fill="#032EA1" d="M 24.359375 4.792969 L 5.175781 4.792969 C 3.664062 4.792969 2.4375 6.042969 2.4375 7.582031 L 2.4375 10.375 L 27.101562 10.375 L 27.101562 7.582031 C 27.101562 6.042969 25.875 4.792969 24.359375 4.792969 Z" fill-opacity="1" fill-rule="nonzero" />
                       </g>
                       <!-- Simplified Angkor Wat silhouette (white) -->
                       <path fill="#FFFFFF" d="M 11 12 L 11 18 L 13 18 L 13 16 L 15 16 L 15 18 L 17 18 L 17 16 L 19 16 L 19 18 L 21 18 L 21 12 L 19 14 L 17 12 L 15 14 L 13 12 L 11 14 Z" fill-opacity="1" fill-rule="nonzero" />
                   </svg>
                   @else
                   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" zoomAndPan="magnify" viewBox="0 0 30 30.000001" height="40" preserveAspectRatio="xMidYMid meet" version="1.0">
                       <defs>
                           <clipPath id="id1">
                               <path d="M 2.511719 6.402344 L 27.191406 6.402344 L 27.191406 24.546875 L 2.511719 24.546875 Z M 2.511719 6.402344 " clip-rule="nonzero" />
                           </clipPath>
                       </defs>
                       <g clip-path="url(#id1)">
                           <path fill="rgb(0%, 14.118958%, 49.01886%)" d="M 2.519531 9.234375 L 2.519531 11.984375 L 6.375 11.984375 Z M 5.714844 24.546875 L 11.425781 24.546875 L 11.425781 20.472656 Z M 18.277344 20.472656 L 18.277344 24.546875 L 23.984375 24.546875 Z M 2.519531 18.964844 L 2.519531 21.714844 L 6.378906 18.964844 Z M 23.988281 6.402344 L 18.277344 6.402344 L 18.277344 10.472656 Z M 27.183594 21.714844 L 27.183594 18.964844 L 23.324219 18.964844 Z M 27.183594 11.984375 L 27.183594 9.234375 L 23.324219 11.984375 Z M 11.425781 6.402344 L 5.714844 6.402344 L 11.425781 10.472656 Z M 11.425781 6.402344 " fill-opacity="1" fill-rule="nonzero" />
                           <path fill="rgb(81.17981%, 10.5896%, 16.859436%)" d="M 19.742188 18.964844 L 26.394531 23.710938 C 26.71875 23.375 26.949219 22.953125 27.074219 22.488281 L 22.132812 18.964844 Z M 11.425781 18.964844 L 9.960938 18.964844 L 3.304688 23.707031 C 3.664062 24.078125 4.121094 24.34375 4.632812 24.464844 L 11.425781 19.621094 Z M 18.277344 11.984375 L 19.742188 11.984375 L 26.394531 7.238281 C 26.039062 6.867188 25.582031 6.605469 25.070312 6.480469 L 18.277344 11.324219 Z M 9.960938 11.984375 L 3.304688 7.238281 C 2.984375 7.574219 2.753906 7.992188 2.628906 8.460938 L 7.570312 11.984375 Z M 9.960938 11.984375 " fill-opacity="1" fill-rule="nonzero" />
                           <path fill="rgb(93.328857%, 93.328857%, 93.328857%)" d="M 27.183594 17.566406 L 16.90625 17.566406 L 16.90625 24.546875 L 18.277344 24.546875 L 18.277344 20.472656 L 23.984375 24.546875 L 24.441406 24.546875 C 25.207031 24.546875 25.898438 24.222656 26.394531 23.710938 L 19.742188 18.964844 L 22.132812 18.964844 L 27.074219 22.488281 C 27.136719 22.253906 27.183594 22.011719 27.183594 21.753906 L 27.183594 21.714844 L 23.324219 18.964844 L 27.183594 18.964844 Z M 2.519531 17.566406 L 2.519531 18.964844 L 6.378906 18.964844 L 2.519531 21.714844 L 2.519531 21.753906 C 2.519531 22.515625 2.820312 23.203125 3.304688 23.707031 L 9.960938 18.964844 L 11.425781 18.964844 L 11.425781 19.621094 L 4.632812 24.464844 C 4.835938 24.515625 5.042969 24.546875 5.261719 24.546875 L 5.714844 24.546875 L 11.425781 20.472656 L 11.425781 24.546875 L 12.796875 24.546875 L 12.796875 17.566406 Z M 27.183594 9.191406 C 27.183594 8.429688 26.882812 7.742188 26.394531 7.238281 L 19.742188 11.984375 L 18.277344 11.984375 L 18.277344 11.324219 L 25.070312 6.480469 C 24.867188 6.433594 24.660156 6.402344 24.441406 6.402344 L 23.988281 6.402344 L 18.277344 10.472656 L 18.277344 6.402344 L 16.90625 6.402344 L 16.90625 13.378906 L 27.183594 13.378906 L 27.183594 11.984375 L 23.324219 11.984375 L 27.183594 9.234375 Z M 11.425781 6.402344 L 11.425781 10.472656 L 5.714844 6.402344 L 5.261719 6.402344 C 4.496094 6.402344 3.804688 6.722656 3.304688 7.238281 L 9.960938 11.984375 L 7.570312 11.984375 L 2.628906 8.460938 C 2.566406 8.695312 2.519531 8.9375 2.519531 9.191406 L 2.519531 9.234375 L 6.375 11.984375 L 2.519531 11.984375 L 2.519531 13.378906 L 12.796875 13.378906 L 12.796875 6.402344 Z M 11.425781 6.402344 " fill-opacity="1" fill-rule="nonzero" />
                           <path fill="rgb(81.17981%, 10.5896%, 16.859436%)" d="M 16.90625 13.378906 L 16.90625 6.402344 L 12.796875 6.402344 L 12.796875 13.378906 L 2.519531 13.378906 L 2.519531 17.566406 L 12.796875 17.566406 L 12.796875 24.546875 L 16.90625 24.546875 L 16.90625 17.566406 L 27.183594 17.566406 L 27.183594 13.378906 Z M 16.90625 13.378906 " fill-opacity="1" fill-rule="nonzero" />
                       </g>
                   </svg>
                   @endif
                   <div class="p-2 text-sm"> {{ LaravelLocalization::getCurrentLocaleNative() }} </div>
                   <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                       <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                   </svg>
               </button>


               @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
               @if($properties['native'] !== LaravelLocalization::getCurrentLocaleNative())
               <div id="dropdown-states" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                   <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="states-button">
                       <li>
                           <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                               <button type="button" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                   <div class="inline-flex items-center">
                                       @switch( LaravelLocalization::getCurrentLocale())
                                       @case('ar')
                                       <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" zoomAndPan="magnify" viewBox="0 0 30 30.000001" height="40" preserveAspectRatio="xMidYMid meet" version="1.0">
                                           <defs>
                                               <clipPath id="id1">
                                                   <path d="M 2.511719 6.402344 L 27.191406 6.402344 L 27.191406 24.546875 L 2.511719 24.546875 Z M 2.511719 6.402344 " clip-rule="nonzero" />
                                               </clipPath>
                                           </defs>
                                           <g clip-path="url(#id1)">
                                               <path fill="rgb(0%, 14.118958%, 49.01886%)" d="M 2.519531 9.234375 L 2.519531 11.984375 L 6.375 11.984375 Z M 5.714844 24.546875 L 11.425781 24.546875 L 11.425781 20.472656 Z M 18.277344 20.472656 L 18.277344 24.546875 L 23.984375 24.546875 Z M 2.519531 18.964844 L 2.519531 21.714844 L 6.378906 18.964844 Z M 23.988281 6.402344 L 18.277344 6.402344 L 18.277344 10.472656 Z M 27.183594 21.714844 L 27.183594 18.964844 L 23.324219 18.964844 Z M 27.183594 11.984375 L 27.183594 9.234375 L 23.324219 11.984375 Z M 11.425781 6.402344 L 5.714844 6.402344 L 11.425781 10.472656 Z M 11.425781 6.402344 " fill-opacity="1" fill-rule="nonzero" />
                                               <path fill="rgb(81.17981%, 10.5896%, 16.859436%)" d="M 19.742188 18.964844 L 26.394531 23.710938 C 26.71875 23.375 26.949219 22.953125 27.074219 22.488281 L 22.132812 18.964844 Z M 11.425781 18.964844 L 9.960938 18.964844 L 3.304688 23.707031 C 3.664062 24.078125 4.121094 24.34375 4.632812 24.464844 L 11.425781 19.621094 Z M 18.277344 11.984375 L 19.742188 11.984375 L 26.394531 7.238281 C 26.039062 6.867188 25.582031 6.605469 25.070312 6.480469 L 18.277344 11.324219 Z M 9.960938 11.984375 L 3.304688 7.238281 C 2.984375 7.574219 2.753906 7.992188 2.628906 8.460938 L 7.570312 11.984375 Z M 9.960938 11.984375 " fill-opacity="1" fill-rule="nonzero" />
                                               <path fill="rgb(93.328857%, 93.328857%, 93.328857%)" d="M 27.183594 17.566406 L 16.90625 17.566406 L 16.90625 24.546875 L 18.277344 24.546875 L 18.277344 20.472656 L 23.984375 24.546875 L 24.441406 24.546875 C 25.207031 24.546875 25.898438 24.222656 26.394531 23.710938 L 19.742188 18.964844 L 22.132812 18.964844 L 27.074219 22.488281 C 27.136719 22.253906 27.183594 22.011719 27.183594 21.753906 L 27.183594 21.714844 L 23.324219 18.964844 L 27.183594 18.964844 Z M 2.519531 17.566406 L 2.519531 18.964844 L 6.378906 18.964844 L 2.519531 21.714844 L 2.519531 21.753906 C 2.519531 22.515625 2.820312 23.203125 3.304688 23.707031 L 9.960938 18.964844 L 11.425781 18.964844 L 11.425781 19.621094 L 4.632812 24.464844 C 4.835938 24.515625 5.042969 24.546875 5.261719 24.546875 L 5.714844 24.546875 L 11.425781 20.472656 L 11.425781 24.546875 L 12.796875 24.546875 L 12.796875 17.566406 Z M 27.183594 9.191406 C 27.183594 8.429688 26.882812 7.742188 26.394531 7.238281 L 19.742188 11.984375 L 18.277344 11.984375 L 18.277344 11.324219 L 25.070312 6.480469 C 24.867188 6.433594 24.660156 6.402344 24.441406 6.402344 L 23.988281 6.402344 L 18.277344 10.472656 L 18.277344 6.402344 L 16.90625 6.402344 L 16.90625 13.378906 L 27.183594 13.378906 L 27.183594 11.984375 L 23.324219 11.984375 L 27.183594 9.234375 Z M 11.425781 6.402344 L 11.425781 10.472656 L 5.714844 6.402344 L 5.261719 6.402344 C 4.496094 6.402344 3.804688 6.722656 3.304688 7.238281 L 9.960938 11.984375 L 7.570312 11.984375 L 2.628906 8.460938 C 2.566406 8.695312 2.519531 8.9375 2.519531 9.191406 L 2.519531 9.234375 L 6.375 11.984375 L 2.519531 11.984375 L 2.519531 13.378906 L 12.796875 13.378906 L 12.796875 6.402344 Z M 11.425781 6.402344 " fill-opacity="1" fill-rule="nonzero" />
                                               <path fill="rgb(81.17981%, 10.5896%, 16.859436%)" d="M 16.90625 13.378906 L 16.90625 6.402344 L 12.796875 6.402344 L 12.796875 13.378906 L 2.519531 13.378906 L 2.519531 17.566406 L 12.796875 17.566406 L 12.796875 24.546875 L 16.90625 24.546875 L 16.90625 17.566406 L 27.183594 17.566406 L 27.183594 13.378906 Z M 16.90625 13.378906 " fill-opacity="1" fill-rule="nonzero" />
                                           </g>
                                       </svg>
                                       @break
                                       @case('en')
                                       <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 30 30.000001" preserveAspectRatio="xMidYMid meet" version="1.0">
                                           <defs>
                                               <clipPath id="id1">
                                                   <path d="M 2.429688 4.792969 L 27.105469 4.792969 L 27.105469 22.9375 L 2.429688 22.9375 Z" clip-rule="nonzero" />
                                               </clipPath>
                                               <clipPath id="id2">
                                                   <path d="M 2.429688 10 L 27.105469 10 L 27.105469 18 L 2.429688 18 Z" clip-rule="nonzero" />
                                               </clipPath>
                                               <clipPath id="id3">
                                                   <path d="M 2.429688 4.792969 L 27.105469 4.792969 L 27.105469 11 L 2.429688 11 Z" clip-rule="nonzero" />
                                               </clipPath>
                                           </defs>
                                           <!-- Bottom blue stripe -->
                                           <g clip-path="url(#id1)">
                                               <path fill="#032EA1" d="M 27.101562 20.144531 C 27.101562 21.6875 25.875 22.9375 24.359375 22.9375 L 5.175781 22.9375 C 3.664062 22.9375 2.4375 21.6875 2.4375 20.144531 L 2.4375 7.582031 C 2.4375 6.042969 3.664062 4.792969 5.175781 4.792969 L 24.359375 4.792969 C 25.875 4.792969 27.101562 6.042969 27.101562 7.582031 Z" fill-opacity="1" fill-rule="nonzero" />
                                           </g>
                                           <!-- Middle red stripe -->
                                           <g clip-path="url(#id2)">
                                               <path fill="#E00025" d="M 2.4375 10.375 L 27.101562 10.375 L 27.101562 17.355469 L 2.4375 17.355469 Z" fill-opacity="1" fill-rule="nonzero" />
                                           </g>
                                           <!-- Top blue stripe -->
                                           <g clip-path="url(#id3)">
                                               <path fill="#032EA1" d="M 24.359375 4.792969 L 5.175781 4.792969 C 3.664062 4.792969 2.4375 6.042969 2.4375 7.582031 L 2.4375 10.375 L 27.101562 10.375 L 27.101562 7.582031 C 27.101562 6.042969 25.875 4.792969 24.359375 4.792969 Z" fill-opacity="1" fill-rule="nonzero" />
                                           </g>
                                           <!-- Simplified Angkor Wat silhouette (white) -->
                                           <path fill="#FFFFFF" d="M 11 12 L 11 18 L 13 18 L 13 16 L 15 16 L 15 18 L 17 18 L 17 16 L 19 16 L 19 18 L 21 18 L 21 12 L 19 14 L 17 12 L 15 14 L 13 12 L 11 14 Z" fill-opacity="1" fill-rule="nonzero" />
                                       </svg>
                                       @break
                                       @default
                                       <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 30 30.000001" preserveAspectRatio="xMidYMid meet" version="1.0">
                                           <defs>
                                               <clipPath id="id1">
                                                   <path d="M 2.429688 4.792969 L 27.105469 4.792969 L 27.105469 22.9375 L 2.429688 22.9375 Z" clip-rule="nonzero" />
                                               </clipPath>
                                               <clipPath id="id2">
                                                   <path d="M 2.429688 10 L 27.105469 10 L 27.105469 18 L 2.429688 18 Z" clip-rule="nonzero" />
                                               </clipPath>
                                               <clipPath id="id3">
                                                   <path d="M 2.429688 4.792969 L 27.105469 4.792969 L 27.105469 11 L 2.429688 11 Z" clip-rule="nonzero" />
                                               </clipPath>
                                           </defs>
                                           <!-- Bottom blue stripe -->
                                           <g clip-path="url(#id1)">
                                               <path fill="#032EA1" d="M 27.101562 20.144531 C 27.101562 21.6875 25.875 22.9375 24.359375 22.9375 L 5.175781 22.9375 C 3.664062 22.9375 2.4375 21.6875 2.4375 20.144531 L 2.4375 7.582031 C 2.4375 6.042969 3.664062 4.792969 5.175781 4.792969 L 24.359375 4.792969 C 25.875 4.792969 27.101562 6.042969 27.101562 7.582031 Z" fill-opacity="1" fill-rule="nonzero" />
                                           </g>
                                           <!-- Middle red stripe -->
                                           <g clip-path="url(#id2)">
                                               <path fill="#E00025" d="M 2.4375 10.375 L 27.101562 10.375 L 27.101562 17.355469 L 2.4375 17.355469 Z" fill-opacity="1" fill-rule="nonzero" />
                                           </g>
                                           <!-- Top blue stripe -->
                                           <g clip-path="url(#id3)">
                                               <path fill="#032EA1" d="M 24.359375 4.792969 L 5.175781 4.792969 C 3.664062 4.792969 2.4375 6.042969 2.4375 7.582031 L 2.4375 10.375 L 27.101562 10.375 L 27.101562 7.582031 C 27.101562 6.042969 25.875 4.792969 24.359375 4.792969 Z" fill-opacity="1" fill-rule="nonzero" />
                                           </g>
                                           <!-- Simplified Angkor Wat silhouette (white) -->
                                           <path fill="#FFFFFF" d="M 11 12 L 11 18 L 13 18 L 13 16 L 15 16 L 15 18 L 17 18 L 17 16 L 19 16 L 19 18 L 21 18 L 21 12 L 19 14 L 17 12 L 15 14 L 13 12 L 11 14 Z" fill-opacity="1" fill-rule="nonzero" />
                                       </svg>
                                       @endswitch
                                       <div class="p-2">
                                           {{ $properties['native']}}
                                       </div>
                                       @endif
                                   </div>
                               </button>
                           </a>
                       </li>
                   </ul>
               </div>
               @endforeach

           </div>

       </ul>
       </div>
   </nav>

   <!-- end Navbar -->