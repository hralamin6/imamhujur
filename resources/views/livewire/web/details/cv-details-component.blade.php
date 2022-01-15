@section('title', $cv->name)
@section('description', $cv->about)
@if($cv->type==='imam')
    @section('image', $setup->getFirstMediaUrl('imam'))
@else
    @section('image', $setup->getFirstMediaUrl('teacher'))
@endif
@section('url', config('app.url').'/biodata/'.$cv->slug)

<main class="py-12 bg-gray-100 dark:bg-gray-900 min-h-screen">
    <div class="container mx-auto px-4 flex flex-wrap lg:flex-nowrap">
        <div class="md:w-8/12 w-full md:mx-6">
            <div class="bg-indigo-700 text-white p-4 shadow-md rounded-md mb-4">
                <img src="{{$setup->getFirstMediaUrl('cover')}}" onerror="this.src='https://i.ytimg.com/vi/mtXQ-m2xPEY/maxresdefault.jpg'" alt="cover" class="h-20 w-full object-cover content-center rounded-t-lg">
                <div class="flex justify-center">
                    <img class="w-20 h-20 rounded-full object-cover content-center -mt-10 border-4 border-white dark:border-gray-600" src="{{$setup->getFirstMediaUrl('imam')}}" onerror="this.src='https://img.freepik.com/free-photo/handsome-confident-smiling-man-witd-hands-crossed-chest_176420-18743.jpg?size=626&amp;ext=jpg'" alt="imam">
                </div>
                <table class="w-full border-t border-b border-gray-300 justify-start text-sm mt-6   ">
                    <tbody>
                    <tr class="capitalize">
                        <th class="border border-gray-300 px-2">{{__('Name')}}</th>
                        <td class="border border-gray-300 px-2">{{$cv->name}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th class="border border-gray-300 px-2">{{__('Type')}}</th>
                        <td class="border border-gray-300 px-2">{{$cv->type==='imam'?__('Imam'):__('Teacher')}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th class="border border-gray-300 px-2">{{__('Date of birth')}}</th>
                        <td class="border border-gray-300 px-2">{{$cv->dob}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th class="border border-gray-300 px-2">{{__('Gender')}}</th>
                        <td class="border border-gray-300 px-2">{{$cv->sex==='male'?__('Male'):__('Female')}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th class="border border-gray-300 px-2">{{__('Material status')}}</th>
                        <td class="border border-gray-300 px-2">{{$cv->marital_status==true?__("Married"):__("Unmarried")}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th class="border border-gray-300 px-2">{{__('Email')}}</th>
                        @auth()
                            @if(auth()->user()->type==='admin' || auth()->user()->unlockedCvs()->where('cv_id', $cv->id)->count()>0 ||auth()->user()->cv->id==$cv->id)
                                <td class="border border-gray-300 px-2">{{$cv->email}}</td>
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
                            @if(auth()->user()->type==='admin' || auth()->user()->unlockedCvs()->where('cv_id', $cv->id)->count()>0 ||auth()->user()->cv->id==$cv->id)
                                <td class="border border-gray-300 px-2">{{$cv->phone}}</td>
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
                            @if(auth()->user()->type==='admin' || auth()->user()->unlockedCvs()->where('cv_id', $cv->id)->count()>0 ||auth()->user()->cv->id==$cv->id)
                                <td class="border border-gray-300 px-2">{{$cv->additional_phone}}</td>
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
                        <td class="border border-gray-300 px-2">{{Config::get('app.locale')=='bn'? @$cv->division->bn_name:@$cv->division->name}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th class="border border-gray-300 px-2">{{__('District')}}</th>
                        <td class="border border-gray-300 px-2"> {{Config::get('app.locale')=='bn'? @$cv->district->bn_name:@$cv->district->name}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th class="border border-gray-300 px-2">{{__('Upazila')}}</th>
                        @auth()
                            @if(auth()->user()->type==='admin' || auth()->user()->unlockedCvs()->where('cv_id', $cv->id)->count()>0 ||auth()->user()->cv->id==$cv->id)
                                <td class="border border-gray-300 px-2"> {{Config::get('app.locale')=='bn'? @$cv->upazila->bn_name:@$cv->upazila->name}}</td>
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
                            @if(auth()->user()->type==='admin' || auth()->user()->unlockedCvs()->where('cv_id', $cv->id)->count()>0 ||auth()->user()->cv->id==$cv->id)
                                <td class="border border-gray-300 px-2"> {{Config::get('app.locale')=='bn'? @$cv->union->bn_name:@$cv->union->name}}</td>
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
                        <td class="border border-gray-300 px-2">{{@$cv->education_medium=='qaumia'?__("Qaumia"):__("General")}}</td>
                    </tr>
                    @if($cv->education_medium==="qaumia")
                        <tr class="capitalize">
                            <th class="border border-gray-300 px-2">{{__("Have you finished daorah?")}}</th>
                            <td class="border border-gray-300 px-2"> {{$cv->daorah==true?__("Yes"):__("No")}}</td>
                        </tr>
                    @else
                        <tr class="capitalize">
                            <th class="border border-gray-300 px-2">{{__("Have you finished jsc?")}}</th>
                            <td class="border border-gray-300 px-2"> {{$cv->jsc==true?__("Yes"):__("No")}}</td>
                        </tr>
                        @if($cv->jsc==true)
                            <tr class="capitalize">
                                <th class="border border-gray-300 px-2">{{__("What's your jsc GPA?")}}</th>
                                <td class="border border-gray-300 px-2"> {{$cv->jsc_gpa}}</td>
                            </tr>
                        @endif
                        <tr class="capitalize">
                            <th class="border border-gray-300 px-2">{{__("Have you finished ssc?")}}</th>
                            <td class="border border-gray-300 px-2"> {{$cv->ssc==true?__("Yes"):__("No")}}</td>
                        </tr>
                        @if($cv->ssc==true)
                            <tr class="capitalize">
                                <th class="border border-gray-300 px-2">{{__("What's your ssc GPA?")}}</th>
                                <td class="border border-gray-300 px-2"> {{$cv->ssc_gpa}}</td>
                            </tr>
                        @endif
                        <tr class="capitalize">
                            <th class="border border-gray-300 px-2">{{__("Have you finished hsc?")}}</th>
                            <td class="border border-gray-300 px-2"> {{$cv->hsc==true?__("Yes"):__("No")}}</td>
                        </tr>
                        @if($cv->hsc==true)
                            <tr class="capitalize">
                                <th class="border border-gray-300 px-2">{{__("What's your jsc GPA?")}}</th>
                                <td class="border border-gray-300 px-2"> {{$cv->hsc_gpa}}</td>
                            </tr>
                        @endif
                    @endif
                    <tr class="capitalize">
                        <th class="border border-gray-300 px-2">{{__("Are you hafiz?")}}</th>
                        <td class="border border-gray-300 px-2"> {{$cv->hafiz==true?__("Yes"):__("No")}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th class="border border-gray-300 px-2">{{__("Your maximum educational qualification")}}</th>
                        <td class="border border-gray-300 px-2"> {{$cv->max_education}}</td>
                    </tr>

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
                        <td class="border border-gray-300 px-2">{{@$cv->experience}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th class="border border-gray-300 px-2">{{__("Have you previous or current profession?")}}</th>
                        <td class="border border-gray-300 px-2"> {{$cv->profession==true?__("Yes"):__("No")}}</td>
                    </tr>
                    @if($cv->profession===1)
                        <tr class="capitalize">
                            <th class="border border-gray-300 px-2">{{__("Why did left it or why do you want to leave it?")}}</th>
                            <td class="border border-gray-300 px-2"> {{$cv->reasion_of_leaving}}</td>
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
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("Which Majhad do you follow?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$cv->majhab}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("What's your concept about Majar?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$cv->majar}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("What's your concept about Milad?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$cv->milad}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("What's your concept about Tabiz?")}}   </th>
                        <td class="border border-gray-300 px-2">{{@$cv->tabiz}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("What's your concept about Pir-Muridi?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$cv->pir_muridi}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("Which political group do you follow?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$cv->politics}}</td>
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
                        <td class="border border-gray-300 px-2">{{@$cv->location_of_job}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("Where and how do you want to stay?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$cv->staying_place}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("How do you want to get meal?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$cv->taking_meal}}</td>
                    </tr>
                    @if ($cv->type=='imam')
                        <tr class="capitalize">
                            <th style="width: 50%" class="border border-gray-300 px-2">{{__("Do you must need a Moktob?")}}</th>
                            <td class="border border-gray-300 px-2">{{@$cv->maktob}}</td>
                        </tr>
                        <tr class="capitalize">
                            <th style="width: 50%" class="border border-gray-300 px-2">{{__("Do you must want to be Khatib?")}}</th>
                            <td class="border border-gray-300 px-2">{{@$cv->khatib}}</td>
                        </tr>
                        <tr class="capitalize">
                            <th style="width: 50%" class="border border-gray-300 px-2">{{__("Do you must need a Muajjin?")}}</th>
                            <td class="border border-gray-300 px-2">{{@$cv->muajjin}}</td>
                        </tr>
                    @else
                        <tr class="capitalize">
                            <th style="width: 50%" class="border border-gray-300 px-2">{{__("Are you able to teach Kitab section?")}}</th>
                            <td class="border border-gray-300 px-2">{{@$cv->kitab}}</td>
                        </tr>
                        <tr class="capitalize">
                            <th style="width: 50%" class="border border-gray-300 px-2">{{__("Are you able to teach Nurani section?")}}</th>
                            <td class="border border-gray-300 px-2">{{@$cv->nurani}}</td>
                        </tr>
                        <tr class="capitalize">
                            <th style="width: 50%" class="border border-gray-300 px-2">{{__("Are you able to teach Hafizi section?")}}</th>
                            <td class="border border-gray-300 px-2">{{@$cv->hafizi}}</td>
                        </tr>

                    @endif
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("How many money do you expect as monthly hadia?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$cv->monthly_hadia}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("How many leave do you expect in a month?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$cv->monthly_leave}}</td>
                    </tr>
                    <tr class="capitalize">
                        <th style="width: 50%" class="border border-gray-300 px-2">{{__("Why do you prefer this profession?")}}</th>
                        <td class="border border-gray-300 px-2">{{@$cv->about}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>


        <div class="md:w-6/12 w-full md:block">

            <div class="bg-indigo-700 shadow-md rounded-md mb-2">
                <div class="text-center">
                    <h1 class="text-white font-bold mb-2">{{__('Own image')}}</h1>
                </div>
                @auth()
                    @if(auth()->user()->type==='admin' || auth()->user()->unlockedCvs()->where('cv_id', $cv->id)->count()>0 ||auth()->user()->cv->id==$cv->id)
                        @if($cv->getFirstMediaUrl('cv')!=null)
                            <div class="flex justify-center">
                                <img src="{{$cv->getFirstMediaUrl('cv', "thumb")}}" alt="" class="object-cover content-center">
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
            <div class="bg-indigo-700 shadow-md rounded-md mb-2">
                <div class="text-center">
                    <h1 class="text-white font-bold mb-2">{{__('Hand writing image')}}</h1>
                </div>
                @auth()
                    @if(auth()->user()->type==='admin' || auth()->user()->unlockedCvs()->where('cv_id', $cv->id)->count()>0 ||auth()->user()->cv->id==$cv->id)
                        @if($cv->getFirstMediaUrl('hand_writing')!=null)
                            <div class="flex justify-center">
                                <img src="{{$cv->getFirstMediaUrl('hand_writing', "thumb")}}" alt="" class="object-cover content-center">
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
            <div class="bg-indigo-700 shadow-md rounded-md mb-2">
                <div class="text-center">
                    <h1 class="text-white font-bold mb-2">{{__('Certificate')}}</h1>
                </div>
                @auth()
                    @if(auth()->user()->type==='admin' || auth()->user()->unlockedCvs()->where('cv_id', $cv->id)->count()>0 ||auth()->user()->cv->id==$cv->id)
                        @if($cv->getFirstMediaUrl('certificate')!=null)
                            <div class="flex justify-center">
                                <img src="{{$cv->getFirstMediaUrl('certificate', "thumb")}}" alt="" class="object-cover content-center">
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
            <div class="bg-indigo-700 shadow-md rounded-md mb-2">
                <div class="text-center">
                    <h1 class="text-white font-bold mb-2">{{__('Quran recitation')}}</h1>
                </div>
                @auth()
                    @if(auth()->user()->type==='admin' || auth()->user()->unlockedCvs()->where('cv_id', $cv->id)->count()>0 ||auth()->user()->cv->id==$cv->id)
                        @if($cv->getFirstMediaUrl('recitation')!=null)
                            <div class="flex justify-center">
                                <audio controls>
                                    <source src="{{$cv->getFirstMediaUrl('recitation')}}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        @else
                            <h3 class="text-center text-red-600 font-semibold">{{__('Not found')}}</h3>

                        @endif
                    @else
                        <div class="flex justify-center">
                            @if($setup->getFirstMediaUrl('locked')!=null)
                                <div class="flex justify-center">
                                    <img src="{{$setup->getFirstMediaUrl('locked', "thumb")}}" alt="" class="object-cover content-center">
                                </div>
                            @endif
                        </div>
                    @endif
                @else
                    <div class="flex justify-center">
                        @if($setup->getFirstMediaUrl('locked')!=null)
                            <div class="flex justify-center">
                                <img src="{{$setup->getFirstMediaUrl('locked', "thumb")}}" alt="" class="object-cover content-center">
                            </div>
                        @endif
                    </div>
                @endauth


            </div>
            <div class="flex justify-between gap-5 mb-3">
                <a href="https://www.facebook.com/sharer.php?u={{config('app.url').'/biodata/'.$cv->slug}}&t={{$cv->name}}" target="_blank" class="w-36">
                    <img src="https://giveeasy.zendesk.com/hc/article_attachments/360029896734/mceclip2.png" alt="">
                </a>
                <a href="http://twitter.com/share?text={{$cv->name}}&url={{config('app.url').'/biodata/'.$cv->slug}}" target="_blank" class="w-36">
                    <img src="https://images.squarespace-cdn.com/content/v1/563e2841e4b09a6ae020bd67/1526818589152-JWCARBDQTDQ3SG4KESOE/twittershare.png" alt="">
                </a>
            </div>

        </div>

    </div>

@auth()
        <div class="mx-auto w-8/12">

            @if(auth()->user()->type!=='admin')
                @if(auth()->user()->cv->id!=$cv->id)
                    @if($cv->unlockedUsers()->where('user_id', Auth::id())->count()==0)
                        @if(auth()->user()->quantity>0)
                            <div class="bg-white dark:bg-gray-800 shadow-md rounded-md border-t-2 border-indigo-600 mt-4">
                                <div class="flex justify-center">
                                    <button wire:click.prevent="unlockCv({{$cv->id}})" class="flex w-full items-center justify-center gap-2 px-4 py-2 text-md font-bold text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                                        </svg>
                                        {{__('Unlock')}}
                                    </button>
                                </div>
                            </div>
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
