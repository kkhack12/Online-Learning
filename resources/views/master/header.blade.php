
<body>
    <!--Page main section start-->
    <div id="educo_wrapper">
        <!--Header start-->
        <header id="ed_header_wrapper">
            <div class="ed_header_top" id="popup">
                <div class="container">
                    <div class="row" >
                        <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-between" >
                            <p>welcome to our new session of education</p>
                            <!-- <button class="btn btn-light"  onclick="deletePopup()">X</button> -->
                            <div class="ed_info_wrapper">
                                <a href="{{ url('login') }}" id="login_button">Login</a>
                                <a href="{{ url('signup') }}" id="login_button">Sign Up</a>
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
                                            <a href= "homepage">Home</a> 
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
                                <a href="javascript:void(0);"><i class="fa-solid fa-user"></i>01234567</a>
                                <div class="menu-btn-wrap">
                                    <a href="javascript:void(0);" class="menu-btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>