<div class="container grid px-6 mx-auto" xmlns:livewire="http://www.w3.org/1999/html">

    <div class="w-full overflow-hidden rounded-lg shadow-xs">

        <div class="container px-0 mx-auto grid mt-4">
            <div class="grid gap-2 mb-0 grid-cols-1 md:grid-cols-2 xl:grid-cols-4">


                <div class="flex justify-between">
                    <select class="form-control-tw @error('group') is-invalid @enderror form-input" name="" wire:model.lazy="group" id="">
                        <option value="">{{__("All")}}</option>
                        <option value="Science">{{__("Science")}}</option>
                        <option value="Humanities">{{__("Humanities")}}</option>
                        <option value="Business">{{__("Business")}}</option>
                    </select>
                    <select class="form-control-tw @error('medium') is-invalid @enderror form-input" name="" wire:model.lazy="medium" id="">
                        <option value="">{{__("Select medium")}}</option>
                        <option value="Bangla">{{__("Bangla")}}</option>
                        <option value="English">{{__("English")}}</option>
                        <option value="">{{__("All")}}</option>
                    </select>
                </div>
                <div class="flex justify-between">
                    <select class="form-control-tw @error('shift') is-invalid @enderror form-input" name="" wire:model.lazy="shift" id="">
                        <option value="">{{__("Select shift")}}</option>
                        <option value="Day">{{__("Day")}}</option>
                        <option value="Morning">{{__("Morning")}}</option>
                        <option value="">{{__("All")}}</option>
                    </select>
                    <select class="form-control-tw @error('gender') is-invalid @enderror form-input" name="" wire:model.lazy="gender" id="">
                        <option value="">{{__("Select gender")}}</option>
                        <option value="Male">{{__("Male")}}</option>
                        <option value="Female">{{__("Female")}}</option>
                        <option value="Both">{{__("Co-Edu")}}</option>
                        <option value="">{{__("All")}}</option>
                    </select>
                </div>
                <div class="flex justify-between">
                    <label class="block">
                        <input type="number" wire:model.debounce.1000ms="gpa" class="form-control-tw @error('gpa') is-invalid @enderror form-input" placeholder="{{__("Enter gpa")}}">
                    </label>
                    <label class="block">
                        <input type="number" wire:model.debounce.1000ms="mark" class="form-control-tw @error('mark') is-invalid @enderror form-input" placeholder="{{__("Enter mark")}}">
                    </label>
                </div>
            </div>
            <div class="flex justify-between">
                <div wire:ignore class="form-group">
                    <select wire:model="board" id="select2" class="select2 form-control-tw @error('board') is-invalid @enderror form-input" multiple="multiple" data-placeholder="Select a State">
                        <option value="">{{__("All")}}</option>
                        <option value="Dhaka">{{__("Dhaka")}}</option>
                        <option value="Mymensingh">{{__("Mymensingh")}}</option>
                        <option value="Barisal">{{__("Barisal")}}</option>
                    </select>
                </div>
                <div wire:ignore class="form-group">
                    <select class="form-control-tw @error('district') is-invalid @enderror form-input" name="" wire:model.lazy="district" id="select3" multiple>
                        <option value="">{{__("Select district")}}</option>
                        @foreach ($districts as $i)
                            <option value="{{ $i->name }}">{{Config::get('app.locale')=='bn'? $i->bn_name:$i->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap text-center">
                <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Name</th>
                    <th class="px-4 py-3">Shift</th>
                    <th class="px-4 py-3">Version</th>
                    <th class="px-4 py-3">Group</th>
                    <th class="px-4 py-3">Gender</th>
                    <th class="px-4 py-3">Min GPA</th>
                    <th class="px-4 py-3">Seat</th>
                    <th class="px-4 py-3">Mark</th>
                    {{--                    <th class="px-4 py-3">Action</th>--}}
                </tr>
                </thead>
                <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                >
                @forelse($colleges as $i=> $college)
                    <tr  wire:key="row-{{ $college->id }}" class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                                <div>
                                    <p class="">{{$college->name}}</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">
                                        {{$college->board}}, {{$college->district}}
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-sm"><span class="px-2 py-1 leading-tight {{$college->shift==='Day'?'text-blue-700 bg-green-100':'text-purple-700 bg-purple-100'}}  rounded-full ">{{$college->shift}}</span> </td>
                        <td class="px-4 py-3 text-sm"><span class="px-2 py-1 leading-tight {{$college->medium==='Bangla'?'text-blue-700 bg-green-100':'text-purple-700 bg-purple-100'}}  rounded-full ">{{$college->medium}}</span> </td>
                        <td class="px-4 py-3 text-sm"><span class="px-2 py-1 leading-tight {{$college->group==='Science'?'text-blue-700 bg-green-100':'text-purple-700 bg-purple-100'}}  rounded-full ">{{$college->group}}</span> </td>
                        <td class="px-4 py-3 text-sm"><span class="px-2 py-1 leading-tight {{$college->gender==='Male'?'text-blue-700 bg-green-100':'text-purple-700 bg-purple-100'}}  rounded-full ">{{$college->gender}}</span> </td>
                        <td>{{$college->gpa}}</td>
                        <td>{{$college->sit}}</td>
                        <td>{{$college->mark}}</td>
                        {{--                        <td class="px-4 py-3">--}}
                        {{--                            <div class="flex items-center space-x-4 text-sm">--}}
                        {{--                                <a href="{{route('edit.cv', $college->id)}}"--}}
                        {{--                                   class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"--}}
                        {{--                                   aria-label="Edit">--}}
                        {{--                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path></svg>--}}
                        {{--                                </a>--}}
                        {{--                                <a wire:click.prevent="confirmDeletion({{ $college->id }})"--}}
                        {{--                                   class="cursor-pointer flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">--}}
                        {{--                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>--}}
                        {{--                                </a>--}}
                        {{--                            </div>--}}
                        {{--                        </td>--}}
                    </tr>
                @empty
                    <center> <h2 class="text-red-600">No cv found</h2> </center>
                @endforelse
                </tbody>
            </table>
        </div>
        <div>

            {{ $colleges->links() }}
        </div>
    </div>
</div>

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
    <script>
        new TomSelect('#select2', {
            maxItems: 3,
        }).on('change', function() {
        @this.set('board', $(this).val());
        });

    </script>
    <script>
        new TomSelect('#select3', {
            maxItems: 3,
        }).on('change', function() {
        @this.set('district', $(this).val());
        });

    </script>

@endpush
