<!-- Mobile sidebar -->
<!-- Backdrop -->
<div
    x-show="isSideMenuOpen"
    x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
></div>
<aside
    class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
    x-show="isSideMenuOpen"
    x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0 transform -translate-x-20"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 transform -translate-x-20"
    @click="closeSideMenu"
    @click.away="closeSideMenu"
    @keydown.escape="closeSideMenu"
>
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="ml-6 text-lg font-bold text-indigo-600 dark:text-gray-200" href="{{route('home')}}">{{__('Imamhujur')}}</a>
        <ul>
            <li class="relative px-6 py-3">
                @if(Route::is('home'))
                    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                @endif
                <a class="{{Route::is('home')?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                   href="{{route('home')}}">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <span class="ml-4">{{__('Home')}}</span>
                </a>
            </li>

            <li class="relative px-6 py-3">
                @if(Route::is('imam'))
                    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                @endif
                <a class="{{Route::is('imam')?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                   href="{{route('imam')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                    </svg>
                    <span class="ml-4">{{__("See all imam")}}</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                @if(Route::is('teacher'))
                    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                @endif
                <a class="{{Route::is('teacher')?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                   href="{{route('teacher')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                    </svg>
                    <span class="ml-4">{{__("See all teacher")}}</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                @if(Route::is('mosque'))
                    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                @endif
                <a class="{{Route::is('mosque')?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                   href="{{route('mosque')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                    </svg>
                    <span class="ml-4">{{__("See all mosque")}}</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                @if(Route::is('madrasa'))
                    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                @endif
                <a class="{{Route::is('madrasa')?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                   href="{{route('madrasa')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                    </svg>
                    <span class="ml-4">{{__("See all madrasa")}}</span>
                </a>
            </li>


            @auth()
                {{--                    <li class="relative px-6 py-3">--}}
                {{--                        @if(Route::is('dashboard'))--}}
                {{--                            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>--}}
                {{--                        @endif--}}
                {{--                        <a class="{{Route::is('dashboard')?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"--}}
                {{--                           href="{{route('dashboard')}}">--}}
                {{--                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
                {{--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />--}}
                {{--                            </svg>--}}
                {{--                            <span class="ml-4">{{__('Dashboard')}}</span>--}}
                {{--                        </a>--}}
                {{--                    </li>--}}
                @if(auth()->user()->type==='admin')
                    <li class="relative px-6 py-3">
                        @if(Route::is('admin.setup'))
                            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                        @endif
                        <a class="{{Route::is('admin.setup')?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                           href="{{route('admin.setup')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                            </svg>
                            <span class="ml-4">{{__('Setup')}}</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        @if(Route::is('admin.user'))
                            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                        @endif
                        <a class="{{Route::is('admin.user')?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                           href="{{route('admin.user')}}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                            </svg>
                            <span class="ml-4">{{__('Users')}}</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        @if(Route::is('admin.show.cv'))
                            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                        @endif
                        <a class="{{Route::is('admin.show.cv')?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                           href="{{route('admin.show.cv')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                            </svg>
                            <span class="ml-4">{{__('Cv list')}}</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        @if(Route::is('admin.show.job'))
                            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                        @endif
                        <a class="{{Route::is('admin.show.job')?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                           href="{{route('admin.show.job')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                            </svg>
                            <span class="ml-4">{{__('Job list')}}</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        @if(Route::is('admin.show.payment'))
                            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                        @endif
                        <a class="{{Route::is('admin.show.payment')?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                           href="{{route('admin.show.payment')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 11V9a2 2 0 00-2-2m2 4v4a2 2 0 104 0v-1m-4-3H9m2 0h4m6 1a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="ml-4">{{__('Payment')}}</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        @if(Route::is('admin.page'))
                            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                        @endif
                        <a data-turbolinks="false" class="{{Route::is('admin.page')?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                           href="{{route('admin.page')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="ml-4">{{__('Page list')}}</span>
                        </a>
                    </li>
                @else

                    <li class="relative px-6 py-3">
                        @if(Route::is('unlocked.profile'))
                            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                        @endif
                        <a class="{{Route::is('unlocked.profile')?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                           href="{{route('unlocked.profile')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                            </svg>
                            <span class="ml-4">{{__('Unlocked Profiles')}}</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        @if(Route::is('contact.request'))
                            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                        @endif
                        <a class="{{Route::is('contact.request')?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                           href="{{route('contact.request')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 11V9a2 2 0 00-2-2m2 4v4a2 2 0 104 0v-1m-4-3H9m2 0h4m6 1a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="ml-4">{{__('Pay')}}</span>
                        </a>
                    </li>
                    @if(auth()->user()->type==='imam' || auth()->user()->type==='teacher')
                        <li class="relative px-6 py-3">
                            @if(Route::is('edit.cv'))
                                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                            @endif
                            <a class="{{Route::is('edit.cv')?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                               href="{{route('edit.cv')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                                <span class="ml-4">{{__('Create Bio')}}</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            @if(Route::is('show.cv', auth()->user()->cv))
                                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                            @endif
                            <a class="{{Route::is('show.cv', auth()->user()->cv)?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                               href="{{route('show.cv', auth()->user()->cv)}}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <span class="ml-4">{{__('View Bio')}}</span>
                            </a>
                        </li>


                    @elseif(auth()->user()->type==='mosque' || auth()->user()->type==='madrasa')
                        <li class="relative px-6 py-3">
                            @if(Route::is('edit.edit.job'))
                                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                            @endif
                            <a class="{{Route::is('edit.job')?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                               href="{{route('edit.job')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                                <span class="ml-4">{{__('Create Circular')}}</span>
                            </a>
                        </li>
                        <li class="relative px-6 py-3">
                            @if(Route::is('show.job', auth()->user()->job))
                                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                            @endif
                            <a class="{{Route::is('show.job', auth()->user()->job)?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                               href="{{route('show.job', auth()->user()->job)}}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <span class="ml-4">{{__('View Circular')}}</span>
                            </a>
                        </li>
                    @endif
                @endif
            @endauth
            @foreach($pages as $page)
                <li class="relative px-6 py-3">
                    @if(Route::is('page', $page->name) && $page->name==request()->segment(count(request()->segments())))
                        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                    @endif
                    <a class="{{Route::is('page', $page->name) && $page->name==request()->segment(count(request()->segments()))?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                       href="{{route('page', $page->name)}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <span class="ml-4 capitalize">{{$page->name}}</span>
                    </a>
                </li>
            @endforeach
            @guest()
                <li class="relative px-6 py-3">

                    @if(Route::is('login'))
                        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                    @endif
                    <a class="{{Route::is('login')?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                       href="{{route('login')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                        </svg>
                        <span class="ml-4">{{__('Login')}}</span>
                    </a>
                </li>
                <li class="relative px-6 py-3">

                    @if(Route::is('register'))
                        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                    @endif
                    <a class="{{Route::is('register')?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                       href="{{route('register')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                        </svg>
                        <span class="ml-4">{{__('Register')}}</span>
                    </a>
                </li>
            @endguest
            @auth()
                <li class="relative px-6 py-3">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            <span class="ml-4 capitalize">{{ __('Logout') }}</span>
                        </a>
                    </form>
                </li>
            @endauth

        </ul>
    </div>
</aside>
