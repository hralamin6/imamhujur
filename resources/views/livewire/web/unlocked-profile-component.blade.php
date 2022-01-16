<div>
    <div class="">
        <div class="flex justify-center flex-1 px-2 pt-2 mx-6 text-white rounded-lg">
            <h1 class="text-indigo-800 text-xl">{{__("Unlocked all Biodata and Circular")}}</h1>
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
                                    <td>{{__('What should be education medium?')}}</td>
                                    <td>{{@$imam->education_medium=='qaumia'?__("Qaumia"):__("General")}}</td>
                                </tr>
                                @if($imam->education_medium==="qaumia")
                                    <tr class="px-2 py-1 text-gray-700 dark:text-gray-400 capitalize flex justify-between">
                                        <td>{{__("Is daorah pass required?")}}</td>
                                        <td>{{$imam->daorah==true?__("Yes"):__("No")}}</td>
                                    </tr>
                                @else
                                    <tr class="px-2 py-1 text-gray-700 dark:text-gray-400 capitalize flex justify-between">
                                        <td>{{__("Is hsc pass required?")}}</td>
                                        <td>{{$imam->hsc==true?__("Yes"):__("No")}}</td>
                                    </tr>
                                @endif
                                <tr class="px-2 py-1 text-gray-700 dark:text-gray-400 capitalize flex justify-between">
                                    <td>{{__("Must be a hafiz?")}}</td>
                                    <td>{{$imam->hafiz==true?__("Yes"):__("No")}}</td>
                                </tr>

                                <tr class="px-2 py-1 text-gray-700 dark:text-gray-400 capitalize flex justify-between">
                                    <td>{{__('What should be Material status')}}</td>
                                    <td>{{$imam->marital_status==true?__("Married"):__("Unmarried")}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="flex items-center justify-center m-2">
                        <a href="{{route('show.cv', $imam)}}" class="bg-blue-700 py-2 px-4 rounded-full text-white text-sm font-semibold hover:bg-purple-700 transition">
                            {{__("View Details")}}
                        </a>
                    </div>
                </div>
            @empty
                <h2 class="text-danger text-center">{{__('No data found')}}</h2>
            @endforelse
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
                            <a href="{{route('show.job', $mosque)}}" class="bg-blue-700 py-2 px-4 rounded-full text-white text-sm font-semibold hover:bg-purple-700 transition">
                                {{__("View Details")}}
                            </a>
                        </div>
                    </div>
                @empty
                    <h2 class="text-danger text-center">{{__('No data found')}}</h2>
                @endforelse
        </div>
    </div>
</div>
