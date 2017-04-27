@extends('layouts.admin.default')

@section('title')
    HR systems
@endsection
@section('css')
    <style>
        body{
            font-size: large;
        }
        .navigation-menu {
            float: right;
        }

        .RTL {
            float: right;
            direction: rtl;

        }
        th{
            text-align: center;
        }


    </style>
@endsection
@section('content')
    <div class="wrapper">
        <div class="container">
            <br>
            <br>

            <div class="container">
            <div class="row">
                <div class=" card-box col-sm-8 offset-5">
                    <div>
                        <img src="image/profile.png">
                    </div>
                    <div class="table-responsive RTL">


                        <h1>معلومات شخصيه</h1>
                        </hr>
                        <strong> <label class="RTL">الاسم</label><p >  :{{Auth::user()->employ->name}}  </p>
                       <strong> <label class="RTL">التحصيل الدراسي </label><p >  :{{Auth::user()->employ->sinetafic_name}}  </p>
                        <label class="RTL"> السكن الحالي</label><p >  :{{Auth::user()->employ->adderss}}  </p>
                        <label class="RTL">محل الولاده </label><p >  :{{Auth::user()->employ->b_address}}  </p></strong>
                    </div>


            </div>
            </div>
            <div class="row">



                <div class="col-sm-12">
                    <div class="card-box table-responsive">
                        <h1 class="m-t-0 header-title RTL"><b>معلوماتك الخاصه بلوضيفه</b></h1>

                        <br>
                        <br>
                        <br>
                        <table id="datatable" class="table table-striped table-bordered RTL text-center">
                            <thead>
                            <tr>
                                <th>الاسم</th>
                                <th>سنوات الخدمه</th>
                                <th>العلاوات</th>
                                <th>العقوبات</th>
                                <th>تاريخ التعين</th>
                                <th>ساعات الاجازه</th>
                            </tr>
                            </thead>


                            <tbody>

                            <tr>
                                <td>{{Auth::user()->employ->name}}  {{Auth::user()->employ->secname}}</td>
                                <td>{{Auth::user()->employ->history}}</td>
                                <td>10%</td>
                                <td>{{Auth::user()->employ->alert}}</td>
                                <td>2012/11/27</td>
                                <td>12</td>
                            </tr>





                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- end row -->

                <br>
                <div class="row">



                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h1 class="m-t-0 header-title RTL"><b>معلومات ادرايه</b></h1>

                            <br>
                            <br>
                            <br>
                            <table id="datatable" class="table table-striped table-bordered RTL text-center">
                                <thead>
                                <tr>
                                    <th>الاسم</th>
                                    <th>سنوات الخدمه</th>

                                    <th>العقوبات</th>
                                    <th>تاريخ التعين</th>

                                </tr>
                                </thead>


                                <tbody>

                                <tr>
                                    <td>{{Auth::user()->employ->name}}  {{Auth::user()->employ->secname}}</td>
                                    <td>{{Auth::user()->employ->history}}</td>

                                    <td>{{Auth::user()->employ->alert}}</td>
                                    <td>{{Auth::user()->employ->work_date}}</td>

                                </tr>





                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end row -->
        </div>
    </div>

@endsection