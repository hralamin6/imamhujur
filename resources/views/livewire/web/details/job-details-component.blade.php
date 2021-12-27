@section('subtitle', __("job Details"))

<main class="py-12 bg-gray-100 dark:bg-gray-900 min-h-screen">
    <div class="container mx-auto px-4 flex flex-wrap lg:flex-nowrap">
        <div class="md:w-8/12 w-full md:mx-6">
            <div class="bg-indigo-700 text-white p-4 shadow-md rounded-md mb-4">
                <img src="https://i.ytimg.com/vi/mtXQ-m2xPEY/maxresdefault.jpg" alt="" class="h-20 w-full object-cover content-center rounded-t-lg">
                <div class="flex justify-center">
                    <img src="https://img.freepik.com/free-photo/handsome-confident-smiling-man-witd-hands-crossed-chest_176420-18743.jpg?size=626&amp;ext=jpg" alt="" class="w-20 h-20 rounded-full object-cover content-center -mt-10 border-4 border-white dark:border-gray-600">
                </div>
                <table class="w-full border-t border-b border-gray-300 justify-start text-sm mt-6   ">
                    <tbody>
                    <tr class="capitalize">
                        <th class="border border-gray-300 px-2">{{__('Institutions')}} {{__('Name')}}</th>
                        <td class="border border-gray-300 px-2">{{$job->name}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th class="border border-gray-300 px-2">{{__('Institutions')}} {{__('Type')}}</th>
                        <td class="border border-gray-300 px-2">{{$job->type==='mosque'?__('Mosque'):__('Madrasa')}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th class="border border-gray-300 px-2">{{__('Institutions')}} {{__('establish date')}}</th>
                        <td class="border border-gray-300 px-2">{{$job->dob}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th class="border border-gray-300 px-2">{{auth()->user()->type==='mosque'?__('Imams'):__('Teachers')}} {{__('Gender')}}</th>
                        <td class="border border-gray-300 px-2">{{$job->sex==='male'?__('Male'):__('Female')}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th class="border border-gray-300 px-2">{{auth()->user()->type==='mosque'?__('Imams'):__('Teachers')}} {{__('Marital status')}}</th>
                        <td class="border border-gray-300 px-2">{{$job->marital_status==true?__("Married"):__("Unmarried")}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th class="border border-gray-300 px-2">{{__('Email')}}</th>
                        @auth()
                            @if(auth()->user()->type==='admin' || auth()->user()->unlockedJobs()->where('job_id', $job->id)->count()>0 ||auth()->user()->job->id==$job->id)
                                <td class="border border-gray-300 px-2">{{$job->email}}</td>
                            @else
                                <td class="border border-gray-300 px-2 z-50 text-red-600 ">{{__('Please Unlock to see')}}</td>
                            @endif
                        @else
                            <td class="border border-gray-300 px-2 z-50 text-red-600 ">{{__('Please Unlock to see')}}</td>
                        @endauth
                    </tr>
                    <tr class="capitalize">
                        <th class="border border-gray-300 px-2">{{__('Phone')}}</th>
                        @auth()
                            @if(auth()->user()->type==='admin' || auth()->user()->unlockedJobs()->where('job_id', $job->id)->count()>0 ||auth()->user()->job->id==$job->id)
                                <td class="border border-gray-300 px-2">{{$job->phone}}</td>
                            @else
                                <td class="border border-gray-300 px-2 z-50 text-red-600">{{__('Please Unlock to see')}}</td>
                            @endif
                        @else
                            <td class="border border-gray-300 px-2 z-50 text-red-600">{{__('Please Unlock to see')}}</td>
                        @endauth

                    </tr>
                    <tr class="capitalize">
                        <th class="border border-gray-300 px-2">{{__('Additional phone')}}</th>
                        @auth()
                            @if(auth()->user()->type==='admin' || auth()->user()->unlockedJobs()->where('job_id', $job->id)->count()>0 ||auth()->user()->job->id==$job->id)
                                <td class="border border-gray-300 px-2">{{$job->additional_phone}}</td>
                            @else
                                <td class="border border-gray-300 px-2 z-50 text-red-600">{{__('Please Unlock to see')}}</td>
                            @endif
                        @else
                            <td class="border border-gray-300 px-2 z-50 text-red-600">{{__('Please Unlock to see')}}</td>
                        @endauth
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="bg-white dark:bg-gray-800 shadow-md rounded-md border-t-2 border-indigo-600">
                <div class="text-center">
                    <h1 class="text-indigo-800 dark:text-white font-bold">{{__('Address')}}</h1>
                </div>
                <table class="w-full border-t border-b dark:text-white border-gray-300 justify-start text-sm mt-4 p-0">
                    <tbody class="overflow-hidden">
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__('Division')}}</th>
                        <td class="border border-gray-300 px-2">{{Config::get('app.locale')=='bn'? @$job->division->bn_name:@$job->division->name}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th class="border border-gray-300 px-2">{{__('District')}}</th>
                        <td class="border border-gray-300 px-2"> {{Config::get('app.locale')=='bn'? @$job->district->bn_name:@$job->district->name}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th class="border border-gray-300 px-2">{{__('Upazila')}}</th>
                        @auth()
                            @if(auth()->user()->type==='admin' || auth()->user()->unlockedJobs()->where('job_id', $job->id)->count()>0 ||auth()->user()->job->id==$job->id)
                                <td class="border border-gray-300 px-2"> {{Config::get('app.locale')=='bn'? @$job->upazila->bn_name:@$job->upazila->name}}</td>
                            @else
                                <td class="border border-gray-300 px-2 z-50 text-red-600">{{__('Please Unlock to see')}}</td>
                            @endif
                        @else
                            <td class="border border-gray-300 px-2 z-50 text-red-600">{{__('Please Unlock to see')}}</td>
                        @endauth

                    </tr>
                    <tr class="capitalize">
                        <th class="border border-gray-300 px-2">{{__('Union')}}</th>
                        @auth()
                            @if(auth()->user()->type==='admin' || auth()->user()->unlockedJobs()->where('job_id', $job->id)->count()>0 ||auth()->user()->job->id==$job->id)
                                <td class="border border-gray-300 px-2"> {{Config::get('app.locale')=='bn'? @$job->union->bn_name:@$job->union->name}}</td>
                            @else
                                <td class="border border-gray-300 px-2 z-50 text-red-600">{{__('Please Unlock to see')}}</td>
                            @endif
                        @else
                            <td class="border border-gray-300 px-2 z-50 text-red-600">{{__('Please Unlock to see')}}</td>
                        @endauth

                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="bg-white dark:bg-gray-800 shadow-md rounded-md border-t-2 border-indigo-600 mt-4">
                <div class="text-center">
                    <h1 class="text-indigo-800 dark:text-white  font-bold">{{__('Education')}}</h1>
                </div>
                <table class="w-full border-t  dark:text-white border-b border-gray-300 justify-start text-sm mt-4 p-0">
                    <tbody class="overflow-hidden">
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("What should be education medium?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$job->education_medium=='qaumia'?__("Qaumia"):__("General")}}</td>
                    </tr>
                    @if($job->education_medium==="qaumia")
                        <tr class="capitalize">
                            <th class="border border-gray-300 px-2">{{__("Is daorah pass required?")}}</th>
                            <td class="border border-gray-300 px-2"> {{$job->daorah==true?__("Yes"):__("No")}}</td>
                        </tr>
                    @else
                        <tr class="capitalize">
                            <th class="border border-gray-300 px-2">{{__("Is jsc pass required?")}}</th>
                            <td class="border border-gray-300 px-2"> {{$job->jsc==true?__("Yes"):__("No")}}</td>
                        </tr>
                        <tr class="capitalize">
                            <th class="border border-gray-300 px-2">{{__("Is ssc pass required?")}}</th>
                            <td class="border border-gray-300 px-2"> {{$job->ssc==true?__("Yes"):__("No")}}</td>
                        </tr>
                        <tr class="capitalize">
                            <th class="border border-gray-300 px-2">{{__("Is hsc pass required?")}}</th>
                            <td class="border border-gray-300 px-2"> {{$job->hsc==true?__("Yes"):__("No")}}</td>
                        </tr>
                    @endif
                    <tr class="capitalize">
                        <th class="border border-gray-300 px-2">{{auth()->user()->type==='mosque'?__('Imam'):__('Teacher')}} {{__('Must be a hafiz')}}</th>
                        <td class="border border-gray-300 px-2"> {{$job->hafiz==true?__("Yes"):__("No")}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th class="border border-gray-300 px-2">{{__("What should be minimum educational qualification?")}}</th>
                        <td class="border border-gray-300 px-2"> {{$job->max_education}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("Is training or previous experience required?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$job->experience}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="bg-white dark:bg-gray-800 shadow-md rounded-md border-t-2 border-indigo-600 mt-4">
                <div class="text-center">
                    <h1 class="text-indigo-800 dark:text-white font-bold">{{__("Opinion")}}</h1>
                </div>
                <table class="w-full border-t dark:text-white border-b border-gray-300 justify-start text-sm mt-4 p-0">
                    <tbody class="overflow-hidden">
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("Which Majhad should follow?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$job->majhab}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("What should be the concept about Majar?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$job->majar}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("What should be the concept about Milad?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$job->milad}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("What should be the concept about Tabiz?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$job->tabiz}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("What should be the concept about Pir-Muridi?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$job->pir_muridi}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("Which political group should follow?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$job->politics}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="bg-white dark:bg-gray-800 shadow-md rounded-md border-t-2 border-indigo-600 mt-4">
                <div class="text-center">
                    <h1 class="text-indigo-800 dark:text-white font-bold">{{__('Preferance')}}</h1>
                </div>
                <table class="w-full border-t dark:text-white border-b border-gray-300 justify-start text-sm mt-4 p-0">
                    <tbody class="overflow-hidden">
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("Where should be location?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$job->location_of_job}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("How will be the staying place?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$job->staying_place}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("How will the food be served?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$job->taking_meal}}</td>
                    </tr>
                    @if ($job->type=='mosque')
                        <tr class="capitalize">
                            <th style="width: 50%" class="border border-gray-300 px-2">{{__("Do you have a Moktob?")}}</th>
                            <td class="border border-gray-300 px-2">{{@$job->maktob}}</td>
                        </tr>
                        <tr class="capitalize">
                            <th style="width: 50%" class="border border-gray-300 px-2">{{__("Do you have a Khatib?")}}</th>
                            <td class="border border-gray-300 px-2">{{@$job->khatib}}</td>
                        </tr>
                        <tr class="capitalize">
                            <th style="width: 50%" class="border border-gray-300 px-2">{{__("Do you have a Muajjin?")}}</th>
                            <td class="border border-gray-300 px-2">{{@$job->muajjin}}</td>
                        </tr>
                    @else
                        <tr class="capitalize">
                            <th style="width: 50%" class="border border-gray-300 px-2">{{__("Should be proficient in Kitab department?")}}</th>
                            <td class="border border-gray-300 px-2">{{@$job->kitab}}</td>
                        </tr>
                        <tr class="capitalize">
                            <th style="width: 50%" class="border border-gray-300 px-2">{{__("Should be proficient in Nurani department?")}}</th>
                            <td class="border border-gray-300 px-2">{{@$job->nurani}}</td>
                        </tr>
                        <tr class="capitalize">
                            <th style="width: 50%" class="border border-gray-300 px-2">{{__("Should be proficient in Hafizi department?")}}</th>
                            <td class="border border-gray-300 px-2">{{@$job->hafizi}}</td>
                        </tr>

                    @endif
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("How will be the approximate monthly hadia?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$job->monthly_hadia}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("How will be the approximate monthly leave?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$job->monthly_leave}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("More information about this institution")}}</th>
                        <td class="border border-gray-300 px-2">{{@$job->about}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>


        <div class="md:w-6/12 w-full md:block">

            <div class="bg-indigo-700 shadow-md rounded-md mb-2">
                <div class="text-center">
                    <h1 class="text-white font-bold mb-2">{{__('Institutions')}} {{__('image')}}</h1>
                </div>
                @auth()
                    @if(auth()->user()->type==='admin' || auth()->user()->unlockedJobs()->where('job_id', $job->id)->count()>0 ||auth()->user()->job->id==$job->id)
                        @if($job->getFirstMediaUrl('job')!=null)
                            <div class="flex justify-center">
                                <img src="{{$job->getFirstMediaUrl('job', "thumb")}}" alt="" class="object-cover content-center">
                            </div>
                        @else
                            <div class="flex justify-center">
                                <img src="https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg" alt="no image" class="object-cover content-center">
                            </div>

                        @endif
                    @else
                        @if($setup->getFirstMediaUrl('locked')!=null)
                            <div class="flex justify-center">
                                <img src="{{$setup->getFirstMediaUrl('locked', "thumb")}}" alt="" class="object-cover content-center">
                            </div>
                        @endif
                    @endif
                @else
                    @if($setup->getFirstMediaUrl('locked')!=null)
                        <div class="flex justify-center">
                            <img src="{{$setup->getFirstMediaUrl('locked', "thumb")}}" alt="" class="object-cover content-center">
                        </div>
                    @endif
                @endauth
            </div>

        </div>

    </div>
    @auth()
        <div class="mx-auto w-8/12">

            @if(auth()->user()->type!=='admin')
                @if(auth()->user()->job->id!=$job->id)
                    @if(auth()->user()->quantity>0)
                        @if($job->unlockedUsers()->where('user_id', Auth::id())->count()==0)
                            <div class="bg-white dark:bg-gray-800 shadow-md rounded-md border-t-2 border-indigo-600 mt-4">
                                <div class="flex justify-center">
                                    <button wire:click.prevent="unlockJob({{$job->id}})" class="flex w-full items-center justify-center gap-2 px-4 py-2 text-md font-bold text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                                        </svg>
                                        {{__('Unlock')}}
                                    </button>
                                </div>
                            </div>
                        @endif
                    @else
                        <div class="bg-white dark:bg-gray-800 shadow-md rounded-md border-t-2 border-indigo-600 mt-4">
                            <div class="flex justify-center">
                                <a href="{{route('contact.request')}}" class="flex w-full items-center justify-center gap-2 px-4 py-2 text-md font-bold text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                                    </svg>
                                    {{__('Unlock')}}
                                </a>
                            </div>
                        </div>
                    @endif
                @endif
            @endif
        </div>
            @else
        <div class="mx-auto w-8/12">

        <div class="dark:bg-gray-800 shadow-md rounded-md border-t-2 border-indigo-600 mt-4">
                    <div class="flex justify-center">
                        <a href="{{route('login')}}" class="flex w-full items-center justify-center gap-2 px-4 py-2 text-md font-bold text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                            </svg>
                            {{__('Unlock')}}
                        </a>
                    </div>
                </div>
        </div>
    @endauth
</main>
