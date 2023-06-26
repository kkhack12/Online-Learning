<body>
    <!--Page main section start-->
    <div id="educo_wrapper">
        <!--Header start-->
        <header id="ed_header_wrapper">
            <div class="ed_header_top" id="popup">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-between">
                            <p>welcome to our new session of education</p>
                            <!-- <button class="btn btn-light"  onclick="deletePopup()">X</button> -->
                            @if(auth()->check())
                            <div class="ed_info_wrapper">
                                <a href="{{ route('logout') }}" id="login_button">Logout</a>
                            </div>
                            @else
                            <div class="ed_info_wrapper">
                                <a href="{{ url('login') }}" id="login_button">Login</a>
                                <a href="{{ url('signup') }}" id="login_button">Sign Up</a>
                            </div>
                            @endif
                            <div class="ed_info_wrapper">
                                <a href="{{ url('teacher') }}" id="login_button">Teacher Portal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ed_header_bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="educo_logo">
                                <a href="homepage"><img src="../assets/images/header/logo.png" alt="logo" /></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-2 col-md-1 col-sm-12 col-12">
                            <div class="main-menu-container">
                                <div class="main-menu">
                                    <ul>
                                        <li class="has-sub-menu">
                                            <a href="homepage">Home</a>
                                        </li>
                                        <li><a href="aboutus">about us</a></li>

                                        <li class="has-sub-menu">
                                            <a href="javascript:void(0);">events</a>
                                            <ul class="sub-menu">
                                                <li><a href="event">all events</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-sub-menu">
                                            <a href="javascript:void(0);">courses</a>
                                            <ul class="sub-menu">
                                                <li><a href="course">all courses</a></li>
                                                <li><a href="coursesingle">course-single</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-sub-menu">
                                            <a href="javascript:void(0);">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="allteacher">all instructor</a></li>
                                                <li><a href="teacherdashboard">instructor dashboard</a></li>
                                                <li><a href="dashboard">student dashboard</a></li>
                                                <li><a href="teacherregister">Become teacher</a></li>
                                                <li><a href="cart">cart</a></li>
                                                <li><a href="checkout">checkout</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-7 col-md-8 col-sm-12 col-12">
                            <div class="educo_call edu-info-menu">
                                @if(auth()->check())
                                <a class="" classs="bg-dark rounded-circle" href="javascript:void(0);"><img class="me-2"
                                        src="{{asset('assets/images/property/user.png')}}" width="24px" height="24px">
                                    <p class="me-2">Welcome,
                                        {{ auth()->user()->firstname.' '. auth()->user()->lastname}}</p>
                                </a>
                                @else
                                <a classs="bg-dark rounded-circle" href="javascript:void(0);"><img class="me-2"
                                        src="{{asset('assets/images/property/user.png')}}" width="24px" height="24px">
                                    User name</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
    </div>

    
    </header>
<div class="bg-white m-0 p-0 text-light">.</div>

<div class="container bg-white border-2 border-top border-buttom category ">
    
        <ul class="row px-2 mx-2">
            <li class="col-lg py-2 text-center">
                <a class=" text-dark" href="#">Computer Science </a>
            </li>
            <li class="col-lg py-2 text-center">
                <a class="text-dark" href="#">Math</a>
            </li>
            
            <li class="col-lg py-2 text-center">
                <a class="text-dark" href="#">Design</a>
            </li>
            <li class="col-lg py-2 text-center">
                <a class="text-dark" href="#">Management</a>
            </li>
            <li class="col-lg py-2 text-center">
                <a class="text-dark" href="#">Bio Chemistry</a>
            </li>
        </ul>
</div>
