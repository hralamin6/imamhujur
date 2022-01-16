@section('title', __('Biodata of all madrasa'))
@section('description', __('Easily find your preferred one from all madrasa'))
@section('image', $setup->getFirstMediaUrl('madrasa'))
@section('url', config('app.url').'/madrasa')
<div>
    <div class="container px-6 mx-auto grid mt-4">
        <div class="grid gap-2 mb-0 grid-cols-2 md:grid-cols-2 xl:grid-cols-4">
            <label class="block">
                <select class="form-control-tw @error('division_id') is-invalid @enderror form-input" name="" wire:model.lazy="division_id" id="">
                    <option value="">{{__("Select division")}}</option>
                    @foreach ($divisions as $item)
                        <option value="{{ $item->id }}">{{Config::get('app.locale')=='bn'? $item->bn_name:$item->name }}</option>
                    @endforeach
                </select>
            </label>

            <label class="block">
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
        <h1 class="dark:text-white text-indigo-800 font-semibold m-2 text-center">{{__('Biodata of all madrasa')}}</h1>

        <div class="grid lg:grid-cols-3 grid-cols-1 items-center gap-3 mx-2">
            @forelse($madrasas as $madrasa)
                <div class="border-2 border-purple-600 rounded-md shadow-md m-3">
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
                                    <td>{{__('What should be education medium?')}}</td>
                                    <td>{{@$cv->education_medium=='qaumia'?__("Qaumia"):__("General")}}</td>
                                </tr>
                                @if($madrasa->education_medium==="qaumia")
                                    <tr class="px-2 py-1 text-gray-700 dark:text-gray-400 capitalize flex justify-between">
                                        <td>{{__("Is daorah pass required?")}}</td>
                                        <td>{{$madrasa->daorah==true?__("Yes"):__("No")}}</td>
                                    </tr>
                                @else
                                    <tr class="px-2 py-1 text-gray-700 dark:text-gray-400 capitalize flex justify-between">
                                        <td>{{__("Is hsc pass required?")}}</td>
                                        <td>{{$madrasa->hsc==true?__("Yes"):__("No")}}</td>
                                    </tr>
                                @endif
                                <tr class="px-2 py-1 text-gray-700 dark:text-gray-400 capitalize flex justify-between">
                                    <td>{{__("Must be a hafiz?")}}</td>
                                    <td>{{$madrasa->hafiz==true?__("Yes"):__("No")}}</td>
                                </tr>

                                <tr class="px-2 py-1 text-gray-700 dark:text-gray-400 capitalize flex justify-between">
                                    <td>{{__('What should be Material status')}}</td>
                                    <td>{{$madrasa->marital_status==true?__("Married"):__("Unmarried")}}</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="flex items-center justify-center m-2">
                        <a href="{{route('show.cv', $madrasa)}}" class="bg-blue-700 py-2 px-4 rounded-full text-white text-sm font-semibold hover:bg-purple-700 transition">
                            {{__("View Details")}}
                        </a>
                    </div>
                </div>
            @empty
                <h2 class="text-danger text-center">No data found</h2>
            @endforelse
        </div>
        <div class="flex justify-center my-6">
            {{$madrasas->links()}}
        </div>

    </div>


</div>


