<div wire:init="init">
    <div class="container px-6 mx-auto grid mt-4">
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">

            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                    </svg>
                </div>
                <div>
                    <a href="{{route('imam')}}" class="text-lg font-semibold text-gray-700 dark:text-gray-200">Find All Imam</a>
                </div>
            </div>
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                    </svg>
                </div>
                <div>
                    <a href="{{route('imam')}}" class="text-lg font-semibold text-gray-700 dark:text-gray-200">Find All Imam</a>
                </div>
            </div>
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                    </svg>
                </div>
                <div>
                    <a href="{{route('imam')}}" class="text-lg font-semibold text-gray-700 dark:text-gray-200">Find All Imam</a>
                </div>
            </div>
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                    </svg>
                </div>
                <div>
                    <a href="{{route('imam')}}" class="text-lg font-semibold text-gray-700 dark:text-gray-200">Find All Imam</a>
                </div>
            </div>

        </div>
    </div>
    @if($init==false)
        <div class="w-full h-full fixed block top-0 left-0 bg-white opacity-75 z-50">
  <span class="text-green-500 opacity-75 top-1/2 my-0 mx-auto block relative w-0 h-0" style=" top: 50%;">
        <div class="flex justify-center items-center">
            <div
                class="animate-spin rounded-full h-32 w-32 border-b-2 border-gray-900"
            ></div>
        </div>
  </span>
        </div>
        {{--        <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-300 to-blue-400">--}}

        {{--            <!-- card -->--}}
        {{--            <div class="w-64 bg-white rounded shadow-2xl">--}}

        {{--                <!-- image -->--}}
        {{--                <div class="h-32 bg-gray-200 rounded-tr rounded-tl animate-pulse"></div>--}}

        {{--                <div class="p-5">--}}
        {{--                    <!-- title -->--}}
        {{--                    <div class="h-6 rounded-sm bg-gray-200 animate-pulse mb-4"></div>--}}

        {{--                    <!-- content -->--}}
        {{--                    <div class="grid grid-cols-4 gap-1">--}}
        {{--                        <div class="col-span-3 h-4 rounded-sm bg-gray-200 animate-pulse"></div>--}}
        {{--                        <div class="h-4 rounded-sm bg-gray-200 animate-pulse"></div>--}}

        {{--                        <div class="col-span-2 h-4 rounded-sm bg-gray-200 animate-pulse"></div>--}}
        {{--                        <div class="col-span-2 h-4 rounded-sm bg-gray-200 animate-pulse"></div>--}}

        {{--                        <div class="h-4 rounded-sm bg-gray-200 animate-pulse"></div>--}}
        {{--                        <div class="col-span-3 h-4 rounded-sm bg-gray-200 animate-pulse"></div>--}}
        {{--                        <div class="col-span-2 h-4 rounded-sm bg-gray-200 animate-pulse"></div>--}}
        {{--                        <div class="h-4 rounded-sm bg-gray-200 animate-pulse"></div>--}}
        {{--                    </div>--}}

        {{--                </div>--}}

        {{--            </div>--}}

        {{--        </div>  --}}
    @else
        <div class="bordered border-t border-purple-600">
            <div class="flex justify-between flex-1 px-2 pt-2 mx-6 text-white rounded-lg">
                <div class="bg-green-500 px-2 py-1 rounded-lg">Latest 3 Imam</div>
                <div class="bg-green-500 px-2 py-1 rounded-lg">
                    <a href="">Show all imam</a>
                </div>
            </div>
            <div class="grid lg:grid-cols-3 grid-cols-1 items-center gap-3 mx-2">
                @forelse($imams as $imam)
                    <div class="border-2 border-purple-600 rounded-md shadow-md m-2">
                        <img src="{{$setup->getFirstMediaUrl('cover')}}" onerror="this.src='https://i.ytimg.com/vi/mtXQ-m2xPEY/maxresdefault.jpg'" alt="cover" class="h-20 w-full object-cover content-center rounded-t-lg">
                        <div class="flex justify-center">
                            <img class="w-20 h-20 rounded-full object-cover content-center -mt-10 border-4 border-white dark:border-gray-600" src="{{$setup->getFirstMediaUrl('imam')}}" onerror="this.src='https://img.freepik.com/free-photo/handsome-confident-smiling-man-witd-hands-crossed-chest_176420-18743.jpg?size=626&amp;ext=jpg'" alt="imam">
                        </div>
                        <h1 class="text-center font-bold dark:text-gray-300 tracking-wider text-gray-700 mt-4">{{$imam->name}}</h1>
                        <h3 class="text-center font-bold dark:text-gray-300 tracking-wider text-indigo-700">{{$imam->type==='imam'?__('Imam'):__('Teacher')}}</h3>
                        <p class="text-gray-500 mt-1 text-center">{{Config::get('app.locale')=='bn'? @$imam->division->bn_name.', '.@$imam->district->bn_name:@$imam->division->name.', '.@$imam->district->name}}</p>
                        <div class="flex items-center justify-center px-6">
                            <p class="font-semibold dark:text-gray-400 text-gray-800">{{__("Minimum hadia")}}:</p>
                            <p class="text-xl  text-red-600 pl-2"> {{' ৳'.$imam->monthly_hadia}}</p>
                        </div>
                        <div class="w-full overflow-hidden rounded-lg shadow-xs">
                            <div class="w-full overflow-x-auto">
                                <table class="w-full whitespace-no-wrap">
                                    <tbody class="bg-white divide-y-2 dark:divide-gray-700 dark:bg-gray-800">
                                    <tr class="px-2 py-1 text-gray-700 dark:text-gray-400 capitalize flex justify-between">
                                        <td>{{__('Medium')}}</td>
                                        <td>{{@$cv->education_medium=='qaumia'?__("Qaumia"):__("General")}}</td>
                                    </tr>
                                    @if($imam->education_medium==="qaumia")
                                        <tr class="px-2 py-1 text-gray-700 dark:text-gray-400 capitalize flex justify-between">
                                            <td>{{__("Have you finished daorah?")}}</td>
                                            <td>{{$imam->daorah==true?__("Yes"):__("No")}}</td>
                                        </tr>
                                    @else
                                        <tr class="px-2 py-1 text-gray-700 dark:text-gray-400 capitalize flex justify-between">
                                            <td>{{__("Have you finished hsc?")}}</td>
                                            <td>{{$imam->hsc==true?__("Yes"):__("No")}}</td>
                                        </tr>
                                    @endif
                                    <tr class="px-2 py-1 text-gray-700 dark:text-gray-400 capitalize flex justify-between">
                                        <td>{{__("Are you hafiz?")}}</td>
                                        <td>{{$imam->hafiz==true?__("Yes"):__("No")}}</td>
                                    </tr>

                                    <tr class="px-2 py-1 text-gray-700 dark:text-gray-400 capitalize flex justify-between">
                                        <td>{{__('Material status')}}</td>
                                        <td>{{$imam->marital_status==true?__("Married"):__("Unmarried")}}</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="flex items-center justify-center m-2">
                            <a href="{{route('show.cv', $imam->id)}}" class="bg-blue-700 py-2 px-4 rounded-full text-white text-sm font-semibold hover:bg-purple-700 transition">
                                {{__("View Details")}}
                            </a>
                        </div>
                    </div>
                @empty
                    <h2 class="text-danger text-center">No data found</h2>
                @endforelse
            </div>
        </div>

        <div class="bordered border-t border-purple-600">
            <div class="flex justify-between flex-1 px-2 py-2 mx-6 text-white rounded-lg">
                <div class="bg-green-500 px-2 py-1 rounded-lg">Latest 3 teacher</div>
                <div class="bg-green-500 px-2 py-1 rounded-lg">
                    <a href="">Show all teacher</a>
                </div>
            </div>
            <div class="grid lg:grid-cols-3 grid-cols-1 items-center gap-3 mx-2">
                @forelse($teachers as $teacher)
                    <div class="border-2 border-purple-600 rounded-md shadow-md m-2">
                        <img src="{{$setup->getFirstMediaUrl('cover')}}" onerror="this.src='https://i.ytimg.com/vi/mtXQ-m2xPEY/maxresdefault.jpg'" alt="cover" class="h-20 w-full object-cover content-center rounded-t-lg">
                        <div class="flex justify-center">
                            <img class="w-20 h-20 rounded-full object-cover content-center -mt-10 border-4 border-white dark:border-gray-600" src="{{$setup->getFirstMediaUrl('teacher')}}" onerror="this.src='https://img.freepik.com/free-photo/handsome-confident-smiling-man-witd-hands-crossed-chest_176420-18743.jpg?size=626&amp;ext=jpg'" alt="teacher">
                        </div>
                        <h1 class="text-center font-bold dark:text-gray-300 tracking-wider text-gray-700 mt-4">{{$teacher->name}}</h1>
                        <h3 class="text-center font-bold dark:text-gray-300 tracking-wider text-indigo-700">{{$teacher->type==='imam'?__('Imam'):__('Teacher')}}</h3>
                        <p class="text-gray-500 mt-1 text-center">{{Config::get('app.locale')=='bn'? @$teacher->division->bn_name.', '.@$teacher->district->bn_name:@$teacher->division->name.', '.@$teacher->district->name}}</p>
                        <div class="flex items-center justify-center px-6">
                            <p class="font-semibold dark:text-gray-400 text-gray-800">{{__("Minimum hadia")}}:</p>
                            <p class="text-xl  text-red-600 pl-2"> {{' ৳'.$teacher->monthly_hadia}}</p>
                        </div>
                        <div class="w-full overflow-hidden rounded-lg shadow-xs">
                            <div class="w-full overflow-x-auto">
                                <table class="w-full whitespace-no-wrap">
                                    <tbody class="bg-white divide-y-2 dark:divide-gray-700 dark:bg-gray-800">
                                    <tr class="px-2 py-1 text-gray-700 dark:text-gray-400 capitalize flex justify-between">
                                        <td>{{__('Medium')}}</td>
                                        <td>{{@$cv->education_medium=='qaumia'?__("Qaumia"):__("General")}}</td>
                                    </tr>
                                    @if($teacher->education_medium==="qaumia")
                                        <tr class="px-2 py-1 text-gray-700 dark:text-gray-400 capitalize flex justify-between">
                                            <td>{{__("Have you finished daorah?")}}</td>
                                            <td>{{$teacher->daorah==true?__("Yes"):__("No")}}</td>
                                        </tr>
                                    @else
                                        <tr class="px-2 py-1 text-gray-700 dark:text-gray-400 capitalize flex justify-between">
                                            <td>{{__("Have you finished hsc?")}}</td>
                                            <td>{{$teacher->hsc==true?__("Yes"):__("No")}}</td>
                                        </tr>
                                    @endif
                                    <tr class="px-2 py-1 text-gray-700 dark:text-gray-400 capitalize flex justify-between">
                                        <td>{{__("Are you hafiz?")}}</td>
                                        <td>{{$teacher->hafiz==true?__("Yes"):__("No")}}</td>
                                    </tr>

                                    <tr class="px-2 py-1 text-gray-700 dark:text-gray-400 capitalize flex justify-between">
                                        <td>{{__('Material status')}}</td>
                                        <td>{{$teacher->marital_status==true?__("Married"):__("Unmarried")}}</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="flex items-center justify-center m-2">
                            <a href="{{route('show.cv', $teacher->id)}}" class="bg-blue-700 py-2 px-4 rounded-full text-white text-sm font-semibold hover:bg-purple-700 transition">
                                {{__("View Details")}}
                            </a>
                        </div>
                    </div>
                @empty
                    <h2 class="text-danger text-center">No data found</h2>
                @endforelse
            </div>
        </div>
        <div class="bordered border-t border-purple-600">
            <div class="flex justify-between flex-1 px-2 py-2 mx-6 text-white rounded-lg">
                <div class="bg-green-500 px-2 py-1 rounded-lg">Latest 3 mosque</div>
                <div class="bg-green-500 px-2 py-1 rounded-lg">
                    <a href="">Show all mosque</a>
                </div>
            </div>
            <div class="grid lg:grid-cols-3 grid-cols-1 items-center gap-3 mx-2">
                @forelse($mosques as $mosque)
                    <div class="border-2 border-purple-600 rounded-md shadow-md m-2">
                        <img src="{{$setup->getFirstMediaUrl('cover')}}" onerror="this.src='https://i.ytimg.com/vi/mtXQ-m2xPEY/maxresdefault.jpg'" alt="cover" class="h-20 w-full object-cover content-center rounded-t-lg">
                        <div class="flex justify-center">
                            <img class="w-20 h-20 rounded-full object-cover content-center -mt-10 border-4 border-white dark:border-gray-600" src="{{$setup->getFirstMediaUrl('mosque')}}" onerror="this.src='https://img.freepik.com/free-photo/handsome-confident-smiling-man-witd-hands-crossed-chest_176420-18743.jpg?size=626&amp;ext=jpg'" alt="mosque">
                        </div>
                        <h1 class="text-center font-bold dark:text-gray-300 tracking-wider text-gray-700 mt-4">{{$mosque->name}}</h1>
                        <h3 class="text-center font-bold dark:text-gray-300 tracking-wider text-indigo-700">{{$mosque->type==='mosque'?__('Mosque'):__('Madrasa')}}</h3>
                        <p class="text-gray-500 mt-1 text-center">{{Config::get('app.locale')=='bn'? @$mosque->division->bn_name.', '.@$mosque->district->bn_name:@$mosque->division->name.', '.@$mosque->district->name}}</p>
                        <div class="flex items-center justify-center px-6">
                            <p class="font-semibold dark:text-gray-400 text-gray-800">{{__("Minimum hadia")}}:</p>
                            <p class="text-xl  text-red-600 pl-2"> {{' ৳'.$mosque->monthly_hadia}}</p>
                        </div>
                        <div class="w-full overflow-hidden rounded-lg shadow-xs">
                            <div class="w-full overflow-x-auto">
                                <table class="w-full whitespace-no-wrap">
                                    <tbody class="bg-white divide-y-2 dark:divide-gray-700 dark:bg-gray-800">
                                    <tr class="px-2 py-1 text-gray-700 dark:text-gray-400 capitalize flex justify-between">
                                        <td>{{__('Medium')}}</td>
                                        <td>{{@$cv->education_medium=='qaumia'?__("Qaumia"):__("General")}}</td>
                                    </tr>
                                    @if($mosque->education_medium==="qaumia")
                                        <tr class="px-2 py-1 text-gray-700 dark:text-gray-400 capitalize flex justify-between">
                                            <td>{{__("Have you finished daorah?")}}</td>
                                            <td>{{$mosque->daorah==true?__("Yes"):__("No")}}</td>
                                        </tr>
                                    @else
                                        <tr class="px-2 py-1 text-gray-700 dark:text-gray-400 capitalize flex justify-between">
                                            <td>{{__("Have you finished hsc?")}}</td>
                                            <td>{{$mosque->hsc==true?__("Yes"):__("No")}}</td>
                                        </tr>
                                    @endif
                                    <tr class="px-2 py-1 text-gray-700 dark:text-gray-400 capitalize flex justify-between">
                                        <td>{{__("Are you hafiz?")}}</td>
                                        <td>{{$mosque->hafiz==true?__("Yes"):__("No")}}</td>
                                    </tr>

                                    <tr class="px-2 py-1 text-gray-700 dark:text-gray-400 capitalize flex justify-between">
                                        <td>{{__('Material status')}}</td>
                                        <td>{{$mosque->marital_status==true?__("Married"):__("Unmarried")}}</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="flex items-center justify-center m-2">
                            <a href="{{route('show.cv', $mosque->id)}}" class="bg-blue-700 py-2 px-4 rounded-full text-white text-sm font-semibold hover:bg-purple-700 transition">
                                {{__("View Details")}}
                            </a>
                        </div>
                    </div>
                @empty
                    <h2 class="text-danger text-center">No data found</h2>
                @endforelse
            </div>
        </div>
        <div class="bordered border-t border-purple-600">
            <div class="flex justify-between flex-1 px-2 py-2 mx-6 text-white rounded-lg">
                <div class="bg-green-500 px-2 py-1 rounded-lg">Latest 3 madrasa</div>
                <div class="bg-green-500 px-2 py-1 rounded-lg">
                    <a href="">Show all madrasa</a>
                </div>
            </div>
            <div class="grid lg:grid-cols-3 grid-cols-1 items-center gap-3 mx-2">
                @forelse($madrasas as $madrasa)
                    <div class="border-2 border-purple-600 rounded-md shadow-md m-2">
                        <img src="{{$setup->getFirstMediaUrl('cover')}}" onerror="this.src='https://i.ytimg.com/vi/mtXQ-m2xPEY/maxresdefault.jpg'" alt="cover" class="h-20 w-full object-cover content-center rounded-t-lg">
                        <div class="flex justify-center">
                            <img class="w-20 h-20 rounded-full object-cover content-center -mt-10 border-4 border-white dark:border-gray-600" src="{{$setup->getFirstMediaUrl('madrasa')}}" onerror="this.src='https://img.freepik.com/free-photo/handsome-confident-smiling-man-witd-hands-crossed-chest_176420-18743.jpg?size=626&amp;ext=jpg'" alt="madrasa">
                        </div>
                        <h1 class="text-center font-bold dark:text-gray-300 tracking-wider text-gray-700 mt-4">{{$madrasa->name}}</h1>
                        <h3 class="text-center font-bold dark:text-gray-300 tracking-wider text-indigo-700">{{$madrasa->type==='mosque'?__('Mosque'):__('Madrasa')}}</h3>
                        <p class="text-gray-500 mt-1 text-center">{{Config::get('app.locale')=='bn'? @$madrasa->division->bn_name.', '.@$madrasa->district->bn_name:@$madrasa->division->name.', '.@$madrasa->district->name}}</p>
                        <div class="flex items-center justify-center px-6">
                            <p class="font-semibold dark:text-gray-400 text-gray-800">{{__("Minimum hadia")}}:</p>
                            <p class="text-xl  text-red-600 pl-2"> {{' ৳'.$madrasa->monthly_hadia}}</p>
                        </div>
                        <div class="w-full overflow-hidden rounded-lg shadow-xs">
                            <div class="w-full overflow-x-auto">
                                <table class="w-full whitespace-no-wrap">
                                    <tbody class="bg-white divide-y-2 dark:divide-gray-700 dark:bg-gray-800">
                                    <tr class="px-2 py-1 text-gray-700 dark:text-gray-400 capitalize flex justify-between">
                                        <td>{{__('Medium')}}</td>
                                        <td>{{@$cv->education_medium=='qaumia'?__("Qaumia"):__("General")}}</td>
                                    </tr>
                                    @if($madrasa->education_medium==="qaumia")
                                        <tr class="px-2 py-1 text-gray-700 dark:text-gray-400 capitalize flex justify-between">
                                            <td>{{__("Have you finished daorah?")}}</td>
                                            <td>{{$madrasa->daorah==true?__("Yes"):__("No")}}</td>
                                        </tr>
                                    @else
                                        <tr class="px-2 py-1 text-gray-700 dark:text-gray-400 capitalize flex justify-between">
                                            <td>{{__("Have you finished hsc?")}}</td>
                                            <td>{{$madrasa->hsc==true?__("Yes"):__("No")}}</td>
                                        </tr>
                                    @endif
                                    <tr class="px-2 py-1 text-gray-700 dark:text-gray-400 capitalize flex justify-between">
                                        <td>{{__("Are you hafiz?")}}</td>
                                        <td>{{$madrasa->hafiz==true?__("Yes"):__("No")}}</td>
                                    </tr>

                                    <tr class="px-2 py-1 text-gray-700 dark:text-gray-400 capitalize flex justify-between">
                                        <td>{{__('Material status')}}</td>
                                        <td>{{$madrasa->marital_status==true?__("Married"):__("Unmarried")}}</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="flex items-center justify-center m-2">
                            <a href="{{route('show.cv', $madrasa->id)}}" class="bg-blue-700 py-2 px-4 rounded-full text-white text-sm font-semibold hover:bg-purple-700 transition">
                                {{__("View Details")}}
                            </a>
                        </div>
                    </div>
                @empty
                    <h2 class="text-danger text-center">No data found</h2>
                @endforelse
            </div>
        </div>
    @endif
</div>


