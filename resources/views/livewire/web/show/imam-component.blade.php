<div>
    <div class="container px-6 mx-auto grid mt-4">
        <div class="grid gap-2 mb-0 grid-cols-2 md:grid-cols-2 xl:grid-cols-4">
            <label class="block">
{{--                <span class="text-gray-700 dark:text-gray-400">{{__("Where is your division?")}}</span>--}}
                <select class="form-control-tw @error('division_id') is-invalid @enderror form-input" name="" wire:model.lazy="division_id" id="">
                    <option value="">{{__("Select division")}}</option>
                    @foreach ($divisions as $item)
                        <option value="{{ $item->id }}">{{Config::get('app.locale')=='bn'? $item->bn_name:$item->name }}</option>
                    @endforeach
                </select>
            </label>

            <label class="block">
{{--                <span class="text-gray-700 dark:text-gray-400">{{__("Where is your district?")}}</span>--}}
                <select class="form-control-tw @error('district_id') is-invalid @enderror form-input" name="" wire:model.lazy="district_id" id="">
                    <option value="">{{__("Select district")}}</option>
                    @if ($districts)
                        @foreach ($districts as $i)
                            <option value="{{ $i->id }}">{{Config::get('app.locale')=='bn'? $i->bn_name:$i->name}}</option>
                        @endforeach
                    @endif
                </select>
            </label>
            <label class="block">
{{--                <span class="text-gray-700 dark:text-gray-400">{{__("Search by name or id")}}</span>--}}
                <input type="text" wire:model.debounce.1000ms="nameOrId" class="form-control-tw @error('nameOrId') is-invalid @enderror form-input" placeholder="{{__("Search by name or id")}}">
            </label>
            <div class="flex justify-between">
                <label class="block mt-3">
                    <input id="marital_status" type="checkbox" wire:model="marital_status" class="text-purple-600 form-checkbox bg-gray-300 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                    <label for="marital_status" class="label15 text-dark">{{__("Married?")}}</label>
                </label>
                <label class="block mt-3">
                    <input id="hafiz" type="checkbox" wire:model="hafiz" class="text-purple-600 form-checkbox bg-gray-300 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                    <label for="hafiz" class="label15 text-dark">{{__("Hafiz?")}}</label>
                </label>
            </div>
        </div>

    </div>
    <div>
        <div class="grid lg:grid-cols-3 grid-cols-1 items-center gap-3 mx-2">
            @forelse($imams as $imam)
                <div class="border-2 border-purple-600 rounded-md shadow-md m-3">
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
        <div class="flex justify-center">
            {{$imams->links()}}
        </div>

    </div>


</div>


