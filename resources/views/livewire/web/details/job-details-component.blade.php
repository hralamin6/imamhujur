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
                        <th class="border border-gray-300 px-2">{{__('Name')}}</th>
                        <td class="border border-gray-300 px-2">{{$job->name}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th class="border border-gray-300 px-2">{{__('Type')}}</th>
                        <td class="border border-gray-300 px-2">{{$job->type==='imam'?__('Imam'):__('Teacher')}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th class="border border-gray-300 px-2">{{__('Date of birth')}}</th>
                        <td class="border border-gray-300 px-2">{{$job->dob}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th class="border border-gray-300 px-2">{{__('Gender')}}</th>
                        <td class="border border-gray-300 px-2">{{$job->sex==='male'?__('Male'):__('Female')}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th class="border border-gray-300 px-2">{{__('Material status')}}</th>
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
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__('Medium')}}</th>
                        <td class="border border-gray-300 px-2">{{@$job->education_medium=='qaumia'?__("Qaumia"):__("General")}}</td>
                    </tr>
                    @if($job->education_medium==="qaumia")
                        <tr class="capitalize">
                            <th class="border border-gray-300 px-2">{{__("Have you finished daorah?")}}</th>
                            <td class="border border-gray-300 px-2"> {{$job->daorah==true?__("Yes"):__("No")}}</td>
                        </tr>
                    @else
                        <tr class="capitalize">
                            <th class="border border-gray-300 px-2">{{__("Have you finished jsc?")}}</th>
                            <td class="border border-gray-300 px-2"> {{$job->jsc==true?__("Yes"):__("No")}}</td>
                        </tr>
                        @if($job->jsc==true)
                            <tr class="capitalize">
                                <th class="border border-gray-300 px-2">{{__("What's your jsc GPA?")}}</th>
                                <td class="border border-gray-300 px-2"> {{$job->jsc_gpa}}</td>
                            </tr>
                        @endif
                        <tr class="capitalize">
                            <th class="border border-gray-300 px-2">{{__("Have you finished ssc?")}}</th>
                            <td class="border border-gray-300 px-2"> {{$job->ssc==true?__("Yes"):__("No")}}</td>
                        </tr>
                        @if($job->ssc==true)
                            <tr class="capitalize">
                                <th class="border border-gray-300 px-2">{{__("What's your ssc GPA?")}}</th>
                                <td class="border border-gray-300 px-2"> {{$job->ssc_gpa}}</td>
                            </tr>
                        @endif
                        <tr class="capitalize">
                            <th class="border border-gray-300 px-2">{{__("Have you finished hsc?")}}</th>
                            <td class="border border-gray-300 px-2"> {{$job->hsc==true?__("Yes"):__("No")}}</td>
                        </tr>
                        @if($job->hsc==true)
                            <tr class="capitalize">
                                <th class="border border-gray-300 px-2">{{__("What's your jsc GPA?")}}</th>
                                <td class="border border-gray-300 px-2"> {{$job->hsc_gpa}}</td>
                            </tr>
                        @endif
                        <tr class="capitalize">
                            <th class="border border-gray-300 px-2">{{__("Are you hafiz?")}}</th>
                            <td class="border border-gray-300 px-2"> {{$job->hafiz==true?__("Yes"):__("No")}}</td>
                        </tr>
                        <tr class="capitalize">
                            <th class="border border-gray-300 px-2">{{__("Your maximum educational qualification")}}</th>
                            <td class="border border-gray-300 px-2"> {{$job->max_education}}</td>
                        </tr>

                    @endif
                    </tbody>
                </table>
            </div>

            <div class="bg-white dark:bg-gray-800 shadow-md rounded-md border-t-2 border-indigo-600 mt-4">
                <div class="text-center">
                    <h1 class="text-indigo-800 dark:text-white font-bold">{{__('Experience')}}</h1>
                </div>
                <table class="w-full border-t dark:text-white border-b border-gray-300 justify-start text-sm mt-4 p-0">
                    <tbody class="overflow-hidden">
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("Have you any experience or training?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$job->experience}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th class="border border-gray-300 px-2">{{__("Have you previous or current profession?")}}</th>
                        <td class="border border-gray-300 px-2"> {{$job->profession==true?__("Yes"):__("No")}}</td>
                    </tr>
                    @if($job->profession===true)
                        <tr class="capitalize">
                            <th class="border border-gray-300 px-2">{{__("Why did left it or why do you want to leave it?")}}</th>
                            <td class="border border-gray-300 px-2"> {{$job->reasion_of_leaving}}</td>
                        </tr>
                    @endif
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
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("Which Majhad do you follow? In details")}}</th>
                        <td class="border border-gray-300 px-2">{{@$job->majhab}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("What's your concept about Majar? In details")}}</th>
                        <td class="border border-gray-300 px-2">{{@$job->majar}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("What's your concept about pir Milad? In details")}}</th>
                        <td class="border border-gray-300 px-2">{{@$job->milad}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("What's your concept about Tabiz? In details")}}</th>
                        <td class="border border-gray-300 px-2">{{@$job->tabiz}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("What's your concept about Pir-Muridi? In details")}}</th>
                        <td class="border border-gray-300 px-2">{{@$job->pir_muridi}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("Which political group do you follow? In details")}}</th>
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
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("From where you want to get job?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$job->location_of_job}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("Where and how do you want to stay?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$job->staying_place}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("How do you want to get meal?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$job->taking_meal}}</td>
                    </tr>
                    @if ($job->type=='imam')
                        <tr class="capitalize">
                            <th style="width: 50%" class="border border-gray-300 px-2">{{__("Do you must need a Moktob?")}}</th>
                            <td class="border border-gray-300 px-2">{{@$job->maktob}}</td>
                        </tr>
                        <tr class="capitalize">
                            <th style="width: 50%" class="border border-gray-300 px-2">{{__("Do you must want to be Khatib?")}}</th>
                            <td class="border border-gray-300 px-2">{{@$job->khatib}}</td>
                        </tr>
                        <tr class="capitalize">
                            <th style="width: 50%" class="border border-gray-300 px-2">{{__("Do you must need a Muajjin?")}}</th>
                            <td class="border border-gray-300 px-2">{{@$job->muajjin}}</td>
                        </tr>
                    @else
                        <tr class="capitalize">
                            <th style="width: 50%" class="border border-gray-300 px-2">{{__("Are you able to teach Kitab section?")}}</th>
                            <td class="border border-gray-300 px-2">{{@$job->kitab}}</td>
                        </tr>
                        <tr class="capitalize">
                            <th style="width: 50%" class="border border-gray-300 px-2">{{__("Are you able to teach Nurani section?")}}</th>
                            <td class="border border-gray-300 px-2">{{@$job->nurani}}</td>
                        </tr>
                        <tr class="capitalize">
                            <th style="width: 50%" class="border border-gray-300 px-2">{{__("Are you able to teach Hafizi section?")}}</th>
                            <td class="border border-gray-300 px-2">{{@$job->hafizi}}</td>
                        </tr>

                    @endif
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("How many money do you expect as monthly hadia?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$job->monthly_hadia}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("How many leave do you expect in a month?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$job->monthly_leave}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("Why do you prefer this profession?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$job->about}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            @auth()
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
            @else
                <div class="bg-white dark:bg-gray-800 shadow-md rounded-md border-t-2 border-indigo-600 mt-4">
                    <div class="flex justify-center">
                        <a href="{{route('login')}}" class="flex w-full items-center justify-center gap-2 px-4 py-2 text-md font-bold text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                            </svg>
                            {{__('Unlock')}}
                        </a>
                    </div>
                </div>
            @endauth

        </div>


        <div class="md:w-6/12 w-full md:block">

            <div class="bg-indigo-700 shadow-md rounded-md mb-2">
                <div class="text-center">
                    <h1 class="text-white font-bold mb-2">{{__('Your own image')}}</h1>
                </div>
                @auth()
                    @if(auth()->user()->type==='admin' || auth()->user()->unlockedJobs()->where('job_id', $job->id)->count()>0 ||auth()->user()->job->id==$job->id)
                        @if($job->getFirstMediaUrl('job')!=null)
                            <div class="flex justify-center">
                                <img src="{{$job->getFirstMediaUrl('job', "thumb")}}" alt="" class="object-cover content-center">
                            </div>
                        @endif
                    @else
                        <div class="flex justify-center">
                            <img src="https://i.ytimg.com/vi/mtXQ-m2xPEY/maxresdefault.jpg" alt="" class="object-cover content-center">
                        </div>
                    @endif
                @else
                    <div class="flex justify-center">
                        <img src="https://i.ytimg.com/vi/mtXQ-m2xPEY/maxresdefault.jpg" alt="" class="object-cover content-center">
                    </div>
                @endauth
            </div>
            <div class="bg-indigo-700 shadow-md rounded-md mb-2">
                <div class="text-center">
                    <h1 class="text-white font-bold mb-2">{{__('Hand writing image')}}</h1>
                </div>
                @auth()
                    @if(auth()->user()->type==='admin' || auth()->user()->unlockedJobs()->where('job_id', $job->id)->count()>0 ||auth()->user()->job->id==$job->id)
                        @if($job->getFirstMediaUrl('hand_writing')!=null)
                            <div class="flex justify-center">
                                <img src="{{$job->getFirstMediaUrl('hand_writing', "thumb")}}" alt="" class="object-cover content-center">
                            </div>
                        @endif
                    @else
                        <div class="flex justify-center">
                            <img src="https://i.ytimg.com/vi/mtXQ-m2xPEY/maxresdefault.jpg" alt="" class="object-cover content-center">
                        </div>
                    @endif
                @else
                    <div class="flex justify-center">
                        <img src="https://i.ytimg.com/vi/mtXQ-m2xPEY/maxresdefault.jpg" alt="" class="object-cover content-center">
                    </div>
                @endauth

            </div>
            <div class="bg-indigo-700 shadow-md rounded-md mb-2">
                <div class="text-center">
                    <h1 class="text-white font-bold mb-2">{{__('Certificate')}}</h1>
                </div>
                @auth()
                    @if(auth()->user()->type==='admin' || auth()->user()->unlockedJobs()->where('job_id', $job->id)->count()>0 ||auth()->user()->job->id==$job->id)
                        @if($job->getFirstMediaUrl('certificate')!=null)
                            <div class="flex justify-center">
                                <img src="{{$job->getFirstMediaUrl('certificate', "thumb")}}" alt="" class="object-cover content-center">
                            </div>
                        @endif
                    @else
                        <div class="flex justify-center">
                            <img src="https://i.ytimg.com/vi/mtXQ-m2xPEY/maxresdefault.jpg" alt="" class="object-cover content-center">
                        </div>
                    @endif
                @else
                    <div class="flex justify-center">
                        <img src="https://i.ytimg.com/vi/mtXQ-m2xPEY/maxresdefault.jpg" alt="" class="object-cover content-center">
                    </div>
                @endauth

            </div>
            <div class="bg-indigo-700 shadow-md rounded-md mb-2">
                <div class="text-center">
                    <h1 class="text-white font-bold mb-2">{{__('Quran recitation')}}</h1>
                </div>
                @auth()
                    @if(auth()->user()->type==='admin' || auth()->user()->unlockedJobs()->where('job_id', $job->id)->count()>0 ||auth()->user()->job->id==$job->id)
                        @if($job->getFirstMediaUrl('recitation')!=null)
                            <div class="flex justify-center">
                                <audio controls>
                                    <source src="{{$job->getFirstMediaUrl('recitation')}}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        @endif                    @else
                        <div class="flex justify-center">
                            <audio controls>
                                <source src="" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        </div>                    @endif
                @else
                    <div class="flex justify-center">
                        <audio controls>
                            <source src="" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                @endauth


            </div>

        </div>

    </div>
</main>
