<header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
    <div
        class="contain flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300"
    >
        <!-- Mobile hamburger -->
        <button
            class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
            @click="toggleSideMenu"
            aria-label="Menu"
        >
            <svg
                class="w-6 h-6"
                aria-hidden="true"
                fill="currentColor"
                viewBox="0 0 20 20"
            >
                <path
                    fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"
                ></path>
            </svg>
        </button>
        <!-- Search input -->
        {{--        <div class="container mx-auto px-4 py-1 flex items-center">--}}
        <div class="mr-auto">
            <a class="" href="{{route('home')}}"><img class="w-24 h-12" src="{{\App\Models\Setup::first()->getFirstMediaUrl('logo')}}" onerror="{{asset('frontend/images/logo.svg')}}" alt="logo"></a>
        </div>

{{--        <div class="flex justify-center flex-1 lg:mr-32 hidden lg:flex">--}}
{{--            <div--}}
{{--                class="relative w-full max-w-xl mr-6 focus-within:text-purple-500"--}}
{{--            >--}}
{{--                <div class="absolute inset-y-0 flex items-center pl-2">--}}
{{--                    <svg--}}
{{--                        class="w-4 h-4"--}}
{{--                        aria-hidden="true"--}}
{{--                        fill="currentColor"--}}
{{--                        viewBox="0 0 20 20"--}}
{{--                    >--}}
{{--                        <path--}}
{{--                            fill-rule="evenodd"--}}
{{--                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"--}}
{{--                            clip-rule="evenodd"--}}
{{--                        ></path>--}}
{{--                    </svg>--}}
{{--                </div>--}}
{{--                <input--}}
{{--                    class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"--}}
{{--                    type="text"--}}
{{--                    placeholder="Search for projects"--}}
{{--                    aria-label="Search"--}}
{{--                />--}}
{{--            </div>--}}
{{--        </div>--}}
        <ul class="flex items-center flex-shrink-0 space-x-6">
            <!-- Theme toggler -->
            <li class="flex">
                <button  wire:click.prevent="ChangeLang">
{{--                    {{session()->get('locale')=='en'?'BN':'EN'}}--}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                    </svg>
                </button>
            </li>
                <li class="flex">
                <button
                    class="rounded-md focus:outline-none focus:shadow-outline-purple"
                    @click="toggleTheme"
                    aria-label="Toggle color mode"
                >
                    <template x-if="!dark">
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                    </template>
                    <template x-if="dark">
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                        </svg>
                    </template>
                </button>
            </li>
            <!-- Notifications menu -->
            @auth()
                <li class="flex">
                    <a href="{{route('message')}}">
                        10
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                    </a>
                </li>

                <!-- Profile menu -->
                <li class="relative" x-data="{profileMenu:false}">
                    <button
                        class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
                        @click="profileMenu=!profileMenu"
                        @keydown.escape="closeProfileMenu"
                        aria-label="Account"
                        aria-haspopup="true"
                    >
                        <img
                            class="object-cover w-8 h-8 rounded-full"
                            src="https://www.gravatar.com/avatar/{{md5(auth()->user()->email)}}?d=mp"
                            alt=""
                            aria-hidden="true"
                        />
                    </button>
                    <div x-show="profileMenu" x-if="isProfileMenuOpen">
                        <ul
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            @click.away="profileMenu=false"
                            @keydown.escape="profileMenu=false"
                            class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700"
                            aria-label="submenu"
                        >
                            @auth()
                                <li class="relative px-2 py-0">
                                    @if(Route::is('dashboard'))
                                        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                                    @endif
                                    <a class="{{Route::is('dashboard')?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                                       href="{{route('dashboard')}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span class="ml-2">{{__('Dashboard')}}</span>
                                    </a>
                                </li>
                                @if(auth()->user()->type==='admin')
                                    <li class="relative px-2 py-0">
                                        @if(Route::is('admin.setup'))
                                            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                                        @endif
                                        <a class="{{Route::is('admin.setup')?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                                           href="{{route('admin.setup')}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                            </svg>
                                            <span class="ml-2">{{__('Setup')}}</span>
                                        </a>
                                    </li>
                                    <li class="relative px-2 py-0">
                                        @if(Route::is('admin.show.cv'))
                                            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                                        @endif
                                        <a class="{{Route::is('admin.show.cv')?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                                           href="{{route('admin.show.cv')}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                            </svg>
                                            <span class="ml-2">{{__('Cv list')}}</span>
                                        </a>
                                    </li>
                                    <li class="relative px-2 py-0">
                                        @if(Route::is('admin.show.cv'))
                                            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                                        @endif
                                        <a class="{{Route::is('admin.show.cv')?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                                           href="{{route('admin.show.cv')}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                            </svg>
                                            <span class="ml-2">{{__('Job list')}}</span>
                                        </a>
                                    </li>
                                    <li class="relative px-2 py-0">
                                        @if(Route::is('admin.show.payment'))
                                            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                                        @endif
                                        <a class="{{Route::is('admin.show.payment')?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                                           href="{{route('admin.show.payment')}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 11V9a2 2 0 00-2-2m2 4v4a2 2 0 104 0v-1m-4-3H9m2 0h4m6 1a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span class="ml-2">{{__('Payment')}}</span>
                                        </a>
                                    </li>
                                    <li class="relative px-2 py-0">
                                        @if(Route::is('admin.page'))
                                            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                                        @endif
                                        <a data-turbolinks="false" class="{{Route::is('admin.page')?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                                           href="{{route('admin.page')}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                            <span class="ml-2">{{__('Page list')}}</span>
                                        </a>
                                    </li>
                                @else

                                    <li class="relative px-2 py-0">
                                        @if(Route::is('contact.request'))
                                            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                                        @endif
                                        <a class="{{Route::is('contact.request')?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                                           href="{{route('contact.request')}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 11V9a2 2 0 00-2-2m2 4v4a2 2 0 104 0v-1m-4-3H9m2 0h4m6 1a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span class="ml-2">{{__('Pay')}}</span>
                                        </a>
                                    </li>
                                    @if(auth()->user()->type==='imam' || auth()->user()->type==='teacher')
                                        <li class="relative px-2 py-0">
                                            @if(Route::is('edit.cv'))
                                                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                                            @endif
                                            <a class="{{Route::is('edit.cv')?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                                               href="{{route('edit.cv')}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                                <span class="ml-2">{{__('Create Bio')}}</span>
                                            </a>
                                        </li>
                                        <li class="relative px-2 py-0">
                                            @if(Route::is('show.cv', auth()->user()->cv->id))
                                                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                                            @endif
                                            <a class="{{Route::is('show.cv', auth()->user()->cv->id)?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                                               href="{{route('show.cv', auth()->user()->cv->id)}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                                <span class="ml-2">{{__('View Bio')}}</span>
                                            </a>
                                        </li>


                                    @elseif(auth()->user()->type==='mosque' || auth()->user()->type==='madrasa')
                                        <li class="relative px-2 py-0">
                                            @if(Route::is('edit.edit.job'))
                                                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                                            @endif
                                            <a class="{{Route::is('edit.job')?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                                               href="{{route('edit.job')}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                                <span class="ml-2">{{__('Create Circular')}}</span>
                                            </a>
                                        </li>
                                        <li class="relative px-2 py-0">
                                            @if(Route::is('show.job', auth()->user()->job->id))
                                                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                                            @endif
                                            <a class="{{Route::is('show.job', auth()->user()->job->id)?'text-purple-600':''}} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-purple-800 dark:hover:text-gray-200"
                                               href="{{route('show.job', auth()->user()->job->id)}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                                <span class="ml-2">{{__('View Circular')}}</span>
                                            </a>
                                        </li>
                                    @endif
                                @endif
                            @endauth
                            <li class="flex">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();" class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200">
                                        <svg class="w-4 h-4" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path></svg>
                                        <span class="ml-2">{{__('Logout')}}</span>
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
            @else
                <li><a href="{{url('/login')}}" class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                        </svg>
                    </a>
                </li>
                <li><a href="{{url('/register')}}" class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                        </svg>
                    </a>
                </li>
            @endauth

        </ul>
    </div>
</header>
