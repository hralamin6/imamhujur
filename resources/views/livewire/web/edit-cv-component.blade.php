@section('title', __('Create Biodata'))
<div xmlns:wire="http://www.w3.org/1999/xhtml">
    <div class="m-2 px-2 py-2 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800 ">
        <div class="flex gap-1 flex-wrap justify-center text-sm">

            <a wire:click.prevent="$set('currentPage', 1)" class="font-semibold cursor-pointer {{$currentPage==1?'bg-indigo-700 px-3 py-1 text-white rounded-md':'text-indigo-700'}}">{{__("General")}} {{__("Info")}}</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
            <a wire:click.prevent="$set('currentPage', 2)" class="font-semibold cursor-pointer {{$currentPage==2?'bg-indigo-700 px-3 py-1 text-white rounded-md':'text-indigo-700'}}">{{__("Address")}}</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
            <a wire:click.prevent="$set('currentPage', 3)" class="font-semibold cursor-pointer {{$currentPage==3?'bg-indigo-700 px-3 py-1 text-white rounded-md':'text-indigo-700'}}">{{__("Profession")}}</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
            <a wire:click.prevent="$set('currentPage', 4)" class="font-semibold cursor-pointer {{$currentPage==4?'bg-indigo-700 px-3 py-1 text-white rounded-md':'text-indigo-700'}}">{{__("Qualification")}}</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
            <a wire:click.prevent="$set('currentPage', 5)" class="font-semibold cursor-pointer {{$currentPage==5?'bg-indigo-700 px-3 py-1 text-white rounded-md':'text-indigo-700'}}">{{__("Opinion")}}</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
            <a wire:click.prevent="$set('currentPage', 6)" class="font-semibold cursor-pointer {{$currentPage==6?'bg-indigo-700 px-3 py-1 text-white rounded-md':'text-indigo-700'}}">{{__("Preference")}}</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
            <a wire:click.prevent="$set('currentPage', 7)" class="font-semibold cursor-pointer {{$currentPage==7?'bg-indigo-700 px-3 py-1 text-white rounded-md':'text-indigo-700'}}">{{__("Attachment")}}</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
            <a wire:click.prevent="$set('currentPage', 8)" class="font-semibold cursor-pointer {{$currentPage==8?'bg-indigo-700 px-3 py-1 text-white rounded-md':'text-indigo-700'}}">{{__("Commitment")}}</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
            <a wire:click.prevent="$set('currentPage', 9)" class="font-semibold cursor-pointer {{$currentPage==9?'bg-indigo-700 px-3 py-1 text-white rounded-md':'text-indigo-700'}}">{{__("Submit")}}</a>
        </div>
    </div>

    {{--    <div class="px-5 py-4 bg-white rounded-lg shadow-md flex items-center justify-between mx-2 my-7">--}}
    {{--        <div class="flex items-center">--}}
    {{--            <h1 tabindex="0" class="focus:outline-none text-xl font-medium pr-2 leading-5 text-gray-800">{{ $pages[$currentPage]['heading'] }}</h1>--}}
    {{--        </div>--}}
    {{--    </div>--}}


    <div class="mx-3 px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800 grid lg:grid-cols-2 grid-cols-1 lg:gap-3">
        @if ($currentPage==1)
            <label class="block mt-3">
                <span class="text-gray-700 dark:text-gray-400">{{__('Your job type')}}</span>
                <input value="{{$type==='imam'?__('Imam'):__('Teacher')}}" type="text" readonly class="form-control-tw @error('type') is-invalid @enderror form-input" placeholder="{{__('')}}">
                @error('type')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            </label>
            <label class="block mt-3">
                <span class="text-gray-700 dark:text-gray-400">{{__('Your gender')}}</span>
                <select wire:model.lazy="sex" class="form-control-tw @error('sex') is-invalid @enderror form-input" name="sex" id="">
                    <option value="male">{{__("Male")}}</option>
                    <option value="female">{{__("Female")}}</option>
                </select>
                @error('sex')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            </label>
            <label class="block mt-3">
                <span class="text-gray-700 dark:text-gray-400">{{__('Enter your name')}}</span>
                <input type="text" wire:model.lazy="name" class="form-control-tw @error('name') is-invalid @enderror form-input" placeholder="{{__('Enter your name')}}">
                @error('name')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            </label>
            <label class="block mt-3">
                <span class="text-gray-700 dark:text-gray-400">{{__('Enter your email')}}</span>
                <input type="email" wire:model.lazy="email" class="form-control-tw @error('email') is-invalid @enderror form-input" placeholder="{{__('Enter your email')}}">
                @error('email')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            </label>
            <label class="block mt-3">
                <span class="text-gray-700 dark:text-gray-400">{{__('Enter your phone')}}</span>
                <input type="tel" name="phone" wire:model.lazy="phone" class="form-control-tw @error('phone') is-invalid @enderror form-input" placeholder="{{__('Enter your phone')}}">
                @error('phone')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            </label>
            <label class="block mt-3">
                <span class="text-gray-700 dark:text-gray-400">{{__('Enter your additional phone')}}</span>
                <input type="tel" name="phone" wire:model.lazy="additional_phone" class="form-control-tw @error('additional_phone') is-invalid @enderror form-input" placeholder="{{__('Enter your additional phone')}}">
                @error('additional_phone')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            </label>
            <label class="block mt-3">
                <span class="text-gray-700 dark:text-gray-400">{{__('Are you married?')}}</span>
                <select wire:model.lazy="marital_status" class="form-control-tw @error('marital_status') is-invalid @enderror form-input" name="marital_status" id="">
                    <option value="0">{{__("Unmarried")}}</option>
                    <option value="1">{{__("Married")}}</option>
                </select>
                @error('marital_status')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            </label>

            <label class="block mt-3">
                <span class="text-gray-700 dark:text-gray-400">{{__('Enter your date of birth')}}</span>
                <input type="date" name="dob" wire:model.lazy="dob" class="form-control-tw @error('dob') is-invalid @enderror form-input" placeholder="{{__('Enter your date of birth')}}">
                @error('dob')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            </label>
        @endif
        @if ($currentPage==2)
            <label class="block mt-3">
                <span class="text-gray-700 dark:text-gray-400">{{__("Where is your division?")}}</span>
                <select class="form-control-tw @error('division_id') is-invalid @enderror form-input" name="" wire:model.lazy="division_id" id="">
                    <option value="">{{__("Select division")}}</option>
                    @foreach ($divisions as $item)
                        <option value="{{ $item->id }}">{{Config::get('app.locale')=='bn'? $item->bn_name:$item->name }}</option>
                    @endforeach
                </select>
                @error('division_id')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            </label>
            @if ($districts)
                <label class="block mt-3">
                    <span class="text-gray-700 dark:text-gray-400">{{__("Where is your district?")}}</span>
                    <select class="form-control-tw @error('district_id') is-invalid @enderror form-input" name="" wire:model.lazy="district_id" id="">
                        <option value="">{{__("Select district")}}</option>
                        @foreach ($districts as $i)
                            <option value="{{ $i->id }}">{{Config::get('app.locale')=='bn'? $i->bn_name:$i->name}}</option>
                        @endforeach
                    </select>
                    @error('district_id')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                </label>
            @endif
            @if ($upazilas)
                <label class="block mt-3">
                    <span class="text-gray-700 dark:text-gray-400">{{__("Where is your upazila?")}}</span>
                    <select class="form-control-tw @error('upazila_id') is-invalid @enderror form-input" name="" wire:model.lazy="upazila_id" id="">
                        <option value="">{{__("Select upazila")}}</option>
                        @foreach ($upazilas as $i)
                            <option value="{{ $i->id }}">{{Config::get('app.locale')=='bn'? $i->bn_name:$i->name}}</option>
                        @endforeach
                    </select>
                    @error('upazila_id')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                </label>
            @endif
            @if ($unions)
                <label class="block mt-3">
                    <span class="text-gray-700 dark:text-gray-400">{{__("Where is your union?")}}</span>
                    <select class="form-control-tw @error('union_id') is-invalid @enderror form-input" name="" wire:model.lazy="union_id" id="">
                        <option value="">{{__("Select union")}}</option>
                        @foreach ($unions as $i)
                            <option value="{{ $i->id }}">{{Config::get('app.locale')=='bn'? $i->bn_name:$i->name}}</option>
                        @endforeach
                    </select>
                    @error('union_id')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                </label>
            @endif
        @endif
        @if ($currentPage==3)
            <label class="block mt-3">
                <input id="profession" type="checkbox" wire:model.lazy="profession" class="text-purple-600 form-checkbox bg-gray-300 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                <label for="profession" class="label15 text-dark">{{__("Have you previous or current profession?")}}</label>
                @error('profession')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            </label>
            @if ($isProfession)
                <label class="block mt-3">
                    <span class="text-gray-700 dark:text-gray-400">{{__("Why did left it or why do you want to leave it?")}}</span>
                    <input type="text" wire:model.lazy="reason_of_leaving" class="form-control-tw @error('reason_of_leaving') is-invalid @enderror form-input" placeholder="{{__("Enter reason")}}">
                    @error('reason_of_leaving')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                </label>
            @endif
        @endif
        @if ($currentPage==4)
            <label class="block mt-3">
                <span class="text-gray-700 dark:text-gray-400">{{__("What's your education medium?")}}</span>
                <select class="form-control-tw @error('education_medium') is-invalid @enderror form-input" name="" wire:model.lazy="education_medium" id="">
                    <option value="0">{{__("Select education medium")}}</option>
                    <option value="qaumia">{{__("Qaumia")}}</option>
                    <option value="general">{{__("General")}}</option>
                </select>
                @error('education_medium')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            </label>
            @if($isQaumia)
                <label class="block mt-3">
                    <input id="daorah" type="checkbox" wire:model.lazy="daorah" class="text-purple-600 form-checkbox bg-gray-300 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                    <label for="daorah" class="label15 text-dark">{{__("Have you finished daorah?")}}</label>
                    @error('daorah')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                </label>
            @else
                <label class="block mt-3"></label>
            @endif
            @if($isGeneral)
                <label class="block mt-3">
                    <input id="jsc" type="checkbox" wire:model.lazy="jsc" class="text-purple-600 form-checkbox bg-gray-300 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                    <label for="jsc" class="label15 text-dark">{{__("Have you finished jsc?")}}</label>
                    @error('jsc')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                </label>
                @if($isJsc)
                    <label class="block mt-3">
                        <span class="text-gray-700 dark:text-gray-400">{{__("What's your jsc GPA?")}}</span>
                        <input type="number" wire:model.lazy="jsc_gpa" class="form-control-tw @error('jsc_gpa') is-invalid @enderror form-input" placeholder="{{__("What's your jsc GPA?")}}">
                        @error('jsc_gpa')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                    </label>
                @else
                    <label class="block mt-3"></label>
                @endif
                <label class="block mt-3">
                    <input id="ssc" type="checkbox" wire:model.lazy="ssc" class="text-purple-600 form-checkbox bg-gray-300 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                    <label for="ssc" class="label15 text-dark">{{__("Have you finished ssc?")}}</label>
                    @error('ssc')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                </label>
                @if($isSsc)
                    <label class="block mt-3">
                        <span class="text-gray-700 dark:text-gray-400">{{__("What's your ssc GPA?")}}</span>
                        <input type="number" wire:model.lazy="ssc_gpa" class="form-control-tw @error('ssc_gpa') is-invalid @enderror form-input" placeholder="{{__("What's your ssc GPA?")}}">
                        @error('ssc_gpa')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                    </label>
                @else
                    <label class="block mt-3"></label>
                @endif
                <label class="block mt-3">
                    <input id="hsc" type="checkbox" wire:model.lazy="hsc" class="text-purple-600 form-checkbox bg-gray-300 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                    <label for="hsc" class="label15 text-dark">{{__("Have you finished hsc?")}}</label>
                    @error('hsc')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                </label>
                @if($isHsc)
                    <label class="block mt-3">
                        <span class="text-gray-700 dark:text-gray-400">{{__("What's your hsc GPA?")}}</span>
                        <input type="number" wire:model.lazy="hsc_gpa" class="form-control-tw @error('hsc_gpa') is-invalid @enderror form-input" placeholder="{{__("What's your hsc GPA?")}}">
                        @error('hsc_gpa')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                    </label>
                @else
                    <label class="block mt-3"></label>
                @endif
            @endif
            <label class="block mt-3">
                <span class="text-gray-700 dark:text-gray-400">{{__("Are you hafiz?")}}</span>
                <select wire:model.lazy="hafiz" class="form-control-tw @error('hafiz') is-invalid @enderror form-input" name="hafiz" id="">
                    <option value="0">{{__("No")}}</option>
                    <option value="1">{{__("Yes")}}</option>
                </select>
                @error('hafiz')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            </label>
            <label class="block mt-3">
                <span class="text-gray-700 dark:text-gray-400">{{__("Your maximum educational qualification")}}</span>
                <input type="text" wire:model.lazy="max_education" class="form-control-tw @error('max_education') is-invalid @enderror form-input" placeholder="{{__("Your maximum educational qualification")}}">
                @error('max_education')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            </label>
            <label class="block mt-3">
                <span class="text-gray-700 dark:text-gray-400">{{__("Have you any experience or training?")}}</span>
                <input type="text" wire:model.lazy="experience" class="form-control-tw @error('experience') is-invalid @enderror form-input" placeholder="{{__("Have you any experience or training?")}}">
                @error('experience')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            </label>
        @endif
        @if ($currentPage===5)
            <label class="block mt-3">
                <span class="text-gray-700 dark:text-gray-400">{{__("Which Majhad do you follow?")}}</span>
                <input type="text" wire:model.lazy="majhab" class="form-control-tw @error('majhab') is-invalid @enderror form-input" placeholder="{{__("Which Majhad do you follow?")}}">
                @error('majhab')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            </label>
            <label class="block mt-3">
                <span class="text-gray-700 dark:text-gray-400">{{__("Which political group do you follow?")}}</span>
                <input type="text" wire:model.lazy="politics" class="form-control-tw @error('politics') is-invalid @enderror form-input" placeholder="{{__("Which political group do you follow?")}}">
                @error('politics')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            </label>
            <label class="block mt-3">
                <span class="text-gray-700 dark:text-gray-400">{{__("What's your concept about Pir-Muridi?")}}</span>
                <input type="text" wire:model.lazy="pir_muridi" class="form-control-tw @error('pir_muridi') is-invalid @enderror form-input" placeholder="{{__("What's your concept about Pir-Muridi?")}}">
                @error('pir_muridi')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            </label>
            <label class="block mt-3">
                <span class="text-gray-700 dark:text-gray-400">{{__("What's your concept about Milad?")}}</span>
                <input type="text" wire:model.lazy="milad" class="form-control-tw @error('milad') is-invalid @enderror form-input" placeholder="{{__("What's your concept about Milad?")}}">
                @error('milad')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            </label>
            <label class="block mt-3">
                <span class="text-gray-700 dark:text-gray-400">{{__("What's your concept about Majar?")}}</span>
                <input type="text" wire:model.lazy="majar" class="form-control-tw @error('majar') is-invalid @enderror form-input" placeholder="{{__("What's your concept about Majar?")}}">
                @error('majar')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            </label>
            <label class="block mt-3">
                <span class="text-gray-700 dark:text-gray-400">{{__("What's your concept about Tabiz?")}}</span>
                <input type="text" wire:model.lazy="tabiz" class="form-control-tw @error('tabiz') is-invalid @enderror form-input" placeholder="{{__("What's your concept about Tabiz?")}}">
                @error('tabiz')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            </label>
        @endif
        @if ($currentPage===6)

            <label class="block mt-3">
                <span class="text-gray-700 dark:text-gray-400">{{__("From where you want to get job?")}}</span>
                <input type="text" wire:model.lazy="location_of_job" class="form-control-tw @error('location_of_job') is-invalid @enderror form-input" placeholder="{{__("From where you want to get job?")}}">
                @error('location_of_job')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            </label>
            <label class="block mt-3">
                <span class="text-gray-700 dark:text-gray-400">{{__("How do you want to get meal?")}}</span>
                <input type="text" wire:model.lazy="taking_meal" class="form-control-tw @error('taking_meal') is-invalid @enderror form-input" placeholder="{{__("How do you want to get meal?")}}">
                @error('taking_meal')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            </label>
            <label class="block mt-3">
                <span class="text-gray-700 dark:text-gray-400">{{__("Where and how do you want to stay?")}}</span>
                <input type="text" wire:model.lazy="staying_place" class="form-control-tw @error('staying_place') is-invalid @enderror form-input" placeholder="{{__("Where and how do you want to stay?")}}">
                @error('staying_place')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            </label>
            @if ($type=='imam')
                <label class="block mt-3">
                    <span class="text-gray-700 dark:text-gray-400">{{__("Do you must need a Moktob?")}}</span>
                    <input type="text" wire:model.lazy="maktob" class="form-control-tw @error('maktob') is-invalid @enderror form-input" placeholder="{{__("Do you must need a Moktob?")}}">
                    @error('maktob')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                </label>
                <label class="block mt-3">
                    <span class="text-gray-700 dark:text-gray-400">{{__("Do you must want to be Khatib?")}}</span>
                    <input type="text" wire:model.lazy="khatib" class="form-control-tw @error('khatib') is-invalid @enderror form-input" placeholder="{{__("Do you must want to be Khatib?")}}">
                    @error('khatib')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                </label>
                <label class="block mt-3">
                    <span class="text-gray-700 dark:text-gray-400">{{__("Do you must need a Muajjin?")}}</span>
                    <input type="text" wire:model.lazy="muajjin" class="form-control-tw @error('muajjin') is-invalid @enderror form-input" placeholder="{{__("Do you must need a Muajjin?")}}">
                    @error('muajjin')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                </label>
            @endif
            @if ($type=='teacher')
                <label class="block mt-3">
                    <span class="text-gray-700 dark:text-gray-400">{{__("Are you able to teach Kitab section?")}}</span>
                    <input type="text" wire:model.lazy="kitab" class="form-control-tw @error('kitab') is-invalid @enderror form-input" placeholder="{{__("Do you must need a kitab?")}}">
                    @error('kitab')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                </label>
                <label class="block mt-3">
                    <span class="text-gray-700 dark:text-gray-400">{{__("Are you able to teach Nurani section??")}}</span>
                    <input type="text" wire:model.lazy="nurani" class="form-control-tw @error('nurani') is-invalid @enderror form-input" placeholder="{{__("Do you must want to be nurani?")}}">
                    @error('nurani')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                </label>
                <label class="block mt-3">
                    <span class="text-gray-700 dark:text-gray-400">{{__("Are you able to teach Hafizi section?")}}</span>
                    <input type="text" wire:model.lazy="hafizi" class="form-control-tw @error('hafizi') is-invalid @enderror form-input" placeholder="{{__("Do you must need a hafizi?")}}">
                    @error('hafizi')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                </label>
            @endif
            <label class="block mt-3">
                <span class="text-gray-700 dark:text-gray-400">{{__("How many money do you expect as monthly hadia?")}}</span>
                <input type="number" wire:model.lazy="monthly_hadia" class="form-control-tw @error('monthly_hadia') is-invalid @enderror form-input" placeholder="{{__("How many money do you expect as monthly hadia?")}}">
                @error('monthly_hadia')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            </label>
            <label class="block mt-3">
                <span class="text-gray-700 dark:text-gray-400">{{__("How many leave do you expect in a month?")}}</span>
                <input type="number" wire:model.lazy="monthly_leave" class="form-control-tw @error('monthly_leave') is-invalid @enderror form-input" placeholder="{{__("How many leave do you expect in a month?")}}">
                @error('monthly_leave')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            </label>
        @endif
        @if($currentPage===7)

            <label class="block mt-3">
                <div class="list-inline flex justify-between"  x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                    <label class="cursor-pointer flex justify-content-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                        </svg>
                        {{__("Choose an image of you")}}
                        <input type="file" class="hidden" wire:model.lazy="image">
                    </label>
                    <div class="col-md-4 list-inline-item" x-show="isUploading">
                        <progress max="100" x-bind:value="progress"></progress>
                    </div>
                    @if($image)
                        <img style="height: 66px; width: 66px;" src="{{ $image->temporaryUrl() }}">
                    @elseif($cv->getFirstMediaUrl('cv')!=null)
                        <img style="height: 66px; width: 66px;" src="{{$cv->getFirstMediaUrl('cv', "thumb")}}" alt="">
                    @endif
                </div>
            </label>
            @error('image')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            <label class="block mt-3">
                <div class="list-inline flex justify-between"  x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                    <label class="cursor-pointer flex justify-content-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                        </svg>{{__("Choose your hand writing image")}}
                        <input type="file" class="hidden" wire:model.lazy="hand_writing">
                    </label>
                    <div class="col-md-4 list-inline-item" x-show="isUploading">
                        <progress max="100" x-bind:value="progress"></progress>
                    </div>
                    @if($hand_writing)
                        <img style="height: 66px; width: 66px;" src="{{ $hand_writing->temporaryUrl() }}">
                    @elseif($cv->getFirstMediaUrl('hand_writing')!=null)
                        <img style="height: 66px; width: 66px;" src="{{$cv->getFirstMediaUrl('hand_writing', "thumb")}}" alt="">
                    @endif
                </div>
            </label>
            @error('hand_writing')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror

            <label class="block mt-3">
                <div class="list-inline flex justify-between"  x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                    <label class="cursor-pointer flex justify-content-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                        </svg>{{__("Choose an image if you have any training or special certificate")}}
                        <input type="file" class="hidden" wire:model.lazy="certificate">
                    </label>
                    <div class="col-md-4 list-inline-item" x-show="isUploading">
                        <progress max="100" x-bind:value="progress"></progress>
                    </div>
                    @if($certificate)
                        <img style="height: 66px; width: 66px;" src="{{ $certificate->temporaryUrl() }}">
                    @elseif($cv->getFirstMediaUrl('certificate')!=null)
                        <img style="height: 66px; width: 66px;" src="{{$cv->getFirstMediaUrl('certificate', "thumb")}}" alt="">
                    @endif
                </div>
            </label>
            @error('certificate')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror

            <label class="block mt-3">
                <div class="list-inline flex justify-between"  x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                    <label class="cursor-pointer flex justify-content-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                        </svg>{{__("Choose a recorded Quran recitation")}}
                        <input type="file" class="hidden" wire:model.lazy="recitation">
                    </label>
                    <div class="col-md-4 list-inline-item" x-show="isUploading">
                        <progress max="100" x-bind:value="progress"></progress>
                    </div>
                    @if($recitation)
                        <audio controls>
                            <source src="{{ $recitation->temporaryUrl() }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    @elseif($cv->getFirstMediaUrl('recitation')!=null)
                        <audio controls>
                            <source src="{{$cv->getFirstMediaUrl('recitation')}}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    @endif
                </div>
            </label>
            @error('recitation')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
        @endif
        @if($currentPage===8)
            <label class="block mt-3">
                <input id="commitment" type="checkbox" wire:model.lazy="commitment" class="text-purple-600 form-checkbox bg-gray-300 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                <label for="commitment" class="label15 text-dark">{{__("By clicking you are swearing by the name of Almighty that your all information are correct!")}}</label>
                @error('commitment')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            </label>

            <label class="block mt-3">
                <span class="text-gray-700 dark:text-gray-400">{{__("Why do you prefer this profession?")}}</span>
                <input type="text" wire:model.lazy="about" class="form-control-tw @error('about') is-invalid @enderror form-input" placeholder="{{__("Why do you prefer this profession?")}}">
                @error('about')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
            </label>
        @endif
        @if($currentPage===9)
            <div class="text-lg font-semibold px-6 mx-auto text-center"><span>{{__('Please be careful! You will not be able to edit it again after submitting.')}}</span></div>
        @endif
    </div>
    <div class="flex justify-between mx-6 mb-3">
        @if ($currentPage==1)
            <button type="button" class="btn btn-primary @if ($currentPage==1) opacity-50 cursor-not-allowed @endif">{{__("Back")}}
                <span wire:loading wire:target="previousPage" class="ml-2 animate-spin rounded-full h-4 w-4 border-b-2 border-white"></span>
            </button>
        @else
            <button wire:click.prevent="previousPage" type="button" class="btn btn-primary @if ($currentPage==1) opacity-50 cursor-not-allowed @endif">{{__("Back")}}
                <span wire:loading wire:target="previousPage" class="ml-2 animate-spin rounded-full h-4 w-4 border-b-2 border-white"></span>
            </button>
        @endif
        @if ($currentPage===count($pages))
            <button wire:click.prevent="confirmation" type="button" class="btn btn-primary float-right">
                {{__("Submit")}}
                <span wire:loading wire:target="confirmation" class="animate-spin rounded-full h-4 w-4 border-b-2 border-white"></span>
            </button>
        @else
            <button wire:click.prevent="nextPage" type="button" class="btn btn-primary ml-auto">{{ __('Next')}}
                <span wire:loading wire:target="nextPage" class="animate-spin rounded-full h-4 w-4 border-b-2 border-white"></span>
            </button>
        @endif
    </div>
</div>
@push('js')
    <script>
        window.addEventListener('show-form', event => {
            $('#form').modal(event.detail.action);
        })
        window.addEventListener('showConfirmation', event => {
            Swal.fire({
                title: event.detail.title,
                text: event.detail.text,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: event.detail.confirmButtonText
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('confirmed')
                }
            })
        })
    </script>
@endpush
