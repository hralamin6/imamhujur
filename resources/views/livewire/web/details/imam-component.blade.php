@section('subtitle', __("Find Imam"))
<main class="browse-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="account_dt_left">
                    <div class="job-top-dt1 text-center">
                        <div class="job-center-dt">
                            <img src="{{ asset('frontend') }}/images/homepage/candidates/img-1.jpg" alt="">
                            <div class="job-urs-dts">
                                <a href="#"><h4 class="text-capitalize">{{$imam->name}}</h4></a>
                                <div class="text-info">{{__("Expected minimum hadia")}} <span style="font-size: 22px">{{'৳'.$imam->monthly_hadia}}</span></div>
                            </div>
                            <ul class="user_btns">
                                <li>
                                    <button class="hire_btn" type="button">Hire Me</button>
                                </li>
                                <li>
                                    <button class="hire_btn" type="button">Message</button>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-secondary text-light">
                       <h4 class="text-center h4" style="font-weight: bolder">{{__("Address")}}</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered border mb-0">
                            <tbody class="text-center text-capitalize">
                            <tr>
                                <th style="color: #a73ed4" scope="col">{{__("Division")}} <span class="text-right">:</span></th>
                                <th style="color: #054ebb" scope="col">{{$imam->division->name}}</th>
                            </tr>
                            <tr>
                                <th style="color: #a73ed4" scope="col">{{__("District")}} <span class="text-right">:</span></th>
                                <th style="color: #054ebb" scope="col">{{$imam->district->name}}</th>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card my-5">
                    <div class="card-header bg-secondary text-light">
                       <h4 class="text-center h4" style="font-weight: bolder">{{__("Personal info")}}</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered border mb-0">
                            <tbody class="text-center text-capitalize">
                            <tr>
                                <th style="color: #a73ed4" scope="col">{{__("Marital status")}} <span class="text-right">:</span></th>
                                <th style="color: #054ebb" scope="col">{{$imam->marital_status}}</th>
                            </tr>
                            <tr>
                                <th style="color: #a73ed4" scope="col">{{__("District")}} <span class="text-right">:</span></th>
                                <th style="color: #054ebb" scope="col">{{$imam->district->name}}</th>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card my-5">
                    <div class="card-header bg-secondary text-light">
                        <h4 class="text-center h4" style="font-weight: bolder">{{__("Education medium")}}</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered border  mb-0">
                            <tbody class="text-center text-capitalize">
                            <tr>
                                <th style="color: #a73ed4" scope="col">{{__("Education medium")}} <span class="text-right">:</span></th>
                                <th style="color: #054ebb" scope="col">{{$imam->education_medium}}</th>
                            </tr>
                            @if($imam->education_medium==="qaumia")
                                <tr>
                                    <th style="color: #a73ed4" scope="col">{{__("Daorah pass?")}} <span class="text-right">:</span></th>
                                    <th style="color: #054ebb" scope="col">{{$imam->daorah==true?__("Yes"):__("No")}}</th>
                                </tr>
                            @else
                                <tr>
                                    <th style="color: #a73ed4" scope="col">{{__("Jsc pass?")}} <span class="text-right">:</span></th>
                                    <th style="color: #054ebb" scope="col">{{$imam->jsc==true?__("Yes"):__("No")}}</th>
                                </tr>
                                <tr>
                                    <th style="color: #a73ed4" scope="col">{{__("Jsc gpa?")}} <span class="text-right">:</span></th>
                                    <th style="color: #054ebb" scope="col">{{$imam->jsc_gpa}}</th>
                                </tr>
                                <tr>
                                    <th style="color: #a73ed4" scope="col">{{__("Ssc pass?")}} <span class="text-right">:</span></th>
                                    <th style="color: #054ebb" scope="col">{{$imam->ssc==true?__("Yes"):__("No")}}</th>
                                </tr>
                                <tr>
                                    <th style="color: #a73ed4" scope="col">{{__("Ssc gpa?")}} <span class="text-right">:</span></th>
                                    <th style="color: #054ebb" scope="col">{{$imam->ssc_gpa}}</th>
                                </tr>

                                <tr>
                                    <th style="color: #a73ed4" scope="col">{{__("Hsc pass?")}} <span class="text-right">:</span></th>
                                    <th style="color: #054ebb" scope="col">{{$imam->hsc==true?__("Yes"):__("No")}}</th>
                                </tr>
                                <tr>
                                    <th style="color: #a73ed4" scope="col">{{__("Hsc gpa?")}} <span class="text-right">:</span></th>
                                    <th style="color: #054ebb" scope="col">{{$imam->hsc_gpa}}</th>
                                </tr>
                            @endif
                            <tr>
                                <th style="color: #a73ed4" scope="col">{{__("Hafiz?")}} <span class="text-right">:</span></th>
                                <th style="color: #054ebb" scope="col">{{$imam->hafiz==true?__("Yes"):__("No")}}</th>
                            </tr>
                            <tr>
                                <th style="color: #a73ed4" scope="col">{{__("Married?")}} <span class="text-right">:</span></th>
                                <th style="color: #054ebb" scope="col">{{$imam->marital_status==true?__("Yes"):__("No")}}</th>
                            </tr>
                            </tbody>
                        </table>
                        <div class="card">
                            <div class="card-header text-center">
                                <h4 style="font-weight: bolder">{{__("Maximum educational qualification")}}</h4>
                            </div>
                            <div class="card-body">
                                <p style="font-size: 18px" class="user_about_des">{!! $imam->max_education !!}</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header text-center">
                                <h4 style="font-weight: bolder">{{__("Quran recitation")}}</h4>
                            </div>
                            <div class="card-body">
                                <p style="font-size: 18px" class="user_about_des">{!! $imam->recition !!}</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card my-5">
                    <div class="card-header bg-secondary text-light">
                        <h4 class="text-center h4" style="font-weight: bolder">{{__("Experience")}}</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered border  mb-0">
                            <tbody class="text-center text-capitalize">
                            <tr>
                                <th style="color: #a73ed4" scope="col">{{__("Previous or current profession")}} <span class="text-right">:</span></th>
                                <th style="color: #054ebb" scope="col">{{$imam->profession==true?__("Yes"):__("No")}}</th>
                            </tr>
                            </tbody>
                        </table>
                        @if($imam->profession==true)
                        <div class="card">
                            <div class="card-header text-center">
                                <h4 style="font-weight: bolder">{{__("Reason of leaving")}}</h4>
                            </div>
                            <div class="card-body">
                                <span style="font-size: 18px" class="user_about_des">{!! $imam->reason_of_leaving !!}</span>
                            </div>
                        </div>
                        @endif
                        <div class="card">
                            <div class="card-header text-center">
                                <h4 style="font-weight: bolder">{{__("Experience")}}</h4>
                            </div>
                            <div class="card-body">
                                <span style="font-size: 18px" class="user_about_des">{!! $imam->experience !!}</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card my-5">
                    <div class="card-header bg-secondary text-light">
                        <h4 class="text-center h4" style="font-weight: bolder">{{__("Conception")}}</h4>
                    </div>
                    <div class="table-responsive">
                        <div class="card">
                            <div class="card-header text-center">
                                <h4 style="font-weight: bolder">{{__("About  majhab")}}</h4>
                            </div>
                            <div class="card-body">
                                <span style="font-size: 18px" class="user_about_des">{!! $imam->majhab !!}</span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header text-center">
                                <h4 style="font-weight: bolder">{{__("About politics")}}</h4>
                            </div>
                            <div class="card-body">
                                <span style="font-size: 18px" class="user_about_des">{!! $imam->politics !!}</span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header text-center">
                                <h4 style="font-weight: bolder">{{__("About pir-muridi")}}</h4>
                            </div>
                            <div class="card-body">
                                <span style="font-size: 18px" class="user_about_des">{!! $imam->pir_muridi !!}</span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header text-center">
                                <h4 style="font-weight: bolder">{{__("About majar")}}</h4>
                            </div>
                            <div class="card-body">
                                <span style="font-size: 18px" class="user_about_des">{!! $imam->majar !!}</span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header text-center">
                                <h4 style="font-weight: bolder">{{__("About tabiz")}}</h4>
                            </div>
                            <div class="card-body">
                                <span style="font-size: 18px" class="user_about_des">{!! $imam->tabiz !!}</span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header text-center">
                                <h4 style="font-weight: bolder">{{__("About milad")}}</h4>
                            </div>
                            <div class="card-body">
                                <span style="font-size: 18px" class="user_about_des">{!! $imam->milad !!}</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card my-5">
                    <div class="card-header bg-secondary text-light">
                        <h4 class="text-center h4" style="font-weight: bolder">{{__("Expected mosque")}}</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered border  mb-0">
                            <tbody class="text-center text-capitalize">
                            <tr>
                                <th style="color: #a73ed4" scope="col">{{__("Expected hadia")}} <span class="text-right">:</span></th>
                                <th style="color: #054ebb" scope="col">{{$imam->monthly_hadia}}</th>
                            </tr>
                            <tr>
                                <th style="color: #a73ed4" scope="col">{{__("Expected leave")}} <span class="text-right">:</span></th>
                                <th style="color: #054ebb" scope="col">{{$imam->monthly_leave}}</th>
                            </tr>
                            </tbody>
                        </table>
                        <div class="card">
                            <div class="card-header text-center">
                                <h4 style="font-weight: bolder">{{__("Expected location")}}</h4>
                            </div>
                            <div class="card-body">
                                <span style="font-size: 18px" class="user_about_des">{!! $imam->location_of_maszid !!}</span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header text-center">
                                <h4 style="font-weight: bolder">{{__("Expected meal")}}</h4>
                            </div>
                            <div class="card-body">
                                <span style="font-size: 18px" class="user_about_des">{!! $imam->taking_meal !!}</span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header text-center">
                                <h4 style="font-weight: bolder">{{__("About place")}}</h4>
                            </div>
                            <div class="card-body">
                                <span style="font-size: 18px" class="user_about_des">{!! $imam->staying_place !!}</span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header text-center">
                                <h4 style="font-weight: bolder">{{__("About khatib")}}</h4>
                            </div>
                            <div class="card-body">
                                <span style="font-size: 18px" class="user_about_des">{!! $imam->khatib !!}</span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header text-center">
                                <h4 style="font-weight: bolder">{{__("About maktob")}}</h4>
                            </div>
                            <div class="card-body">
                                <span style="font-size: 18px" class="user_about_des">{!! $imam->maktob !!}</span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header text-center">
                                <h4 style="font-weight: bolder">{{__("About muajjin")}}</h4>
                            </div>
                            <div class="card-body">
                                <span style="font-size: 18px" class="user_about_des">{!! $imam->muajjin !!}</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
