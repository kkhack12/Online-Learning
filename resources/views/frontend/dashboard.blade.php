@extends('master.master')
@section('title')
<title>aboutus</title>
@endsection
@section('content')
<!--Breadcrumb start-->
<div class="ed_pagetitle">
            <div class="ed_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-6">
                        <div class="page_title">
                            <h2>Educo Student</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-6">
                        <ul class="breadcrumb">
                            <li><a href="homepage">home</a></li>
                            <li><i class="fa fa-chevron-left"></i></li>
                            <li><a href="dashboard">Educo Student</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumb end-->
        <!--single student detail start-->
        <div class="ed_dashboard_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="ed_sidebar_wrapper">
                            <div class="ed_profile_img">
                                <img src="https://dummyimage.com/263x263/000/fff" alt="Dashboard Image" />
                            </div>
                            <h3>andre house</h3>
                            <div class="ed_tabs_left">
                                <ul class="nav nav-tabs">
                                    <li><a class="active" href="#dashboard" data-bs-toggle="tab">dashboard</a></li>
                                    <li><a href="#courses" data-bs-toggle="tab">courses <span>4</span></a></li>
                                    <li><a href="#activity" data-bs-toggle="tab">activity</a></li>
                                    <li><a href="#notification" data-bs-toggle="tab">notifications <span>0</span></a></li>
                                    <li><a href="#profile" data-bs-toggle="tab">profile</a></li>
                                    <li><a href="#setting" data-bs-toggle="tab">setting</a></li>
                                    <li><a href="#forums" data-bs-toggle="tab">forums</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                        <div class="ed_dashboard_tab">
                            <div class="tab-content">
                                <div class="tab-pane active" id="dashboard">
                                    <div class="ed_dashboard_tab_info">
                                        <h1>hello, <span>student</span></h1>
                                        <h1>welcome to dashboard</h1>
                                        <p>Hi <strong>Andre House</strong>, here you have to see and update your profile, subscribed courses, activities, notifications and other things. All the above updates can be modified from the left panel provided.</p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="courses">
                                    <div class="ed_dashboard_inner_tab">
                                        <div role="tabpanel">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation"><a class="active" href="#my" aria-controls="my" role="tab" data-bs-toggle="tab">my courses</a></li>
                                                <li role="presentation"><a href="#result" aria-controls="result" role="tab" data-bs-toggle="tab">result</a></li>
                                                <li role="presentation"><a href="#status" aria-controls="status" role="tab" data-bs-toggle="tab">status</a></li>
                                                <li role="presentation"><a href="#instructing" aria-controls="instructing" role="tab" data-bs-toggle="tab">instructing courses</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="my">
                                                    <div class="ed_inner_dashboard_info">
                                                        <h2>you have 4 subscribed courses</h2>
                                                        <div class="ed_mostrecomeded_course_slider">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 ed_bottompadder20">
                                                                    <div class="ed_item_img">
                                                                        <img src="https://dummyimage.com/263x263/000/fff" alt="item1" class="img-responsive">
                                                                    </div>
                                                                    <div class="ed_item_description ed_most_recomended_data">
                                                                        <h4><a href="course_single.html">Project Learning </a><span>£25</span></h4>
                                                                        <div class="row">
                                                                            <div class="ed_rating">
                                                                                <div class="col-lg-6 col-md-7 col-sm-6 col-6">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                                            <div class="ed_stardiv">
                                                                                                <div class="star-rating"><span style="width:80%;"></span></div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                                            <div class="row">
                                                                                                <p>(5 review)</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-md-5 col-sm-6 col-6">
                                                                                    <div class="ed_views">
                                                                                        <i class="fa fa-users"></i>
                                                                                        <span>35 students</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <p>Project-Based Learning is a flexible tool for framing given academic standards into flexible tool for framing.</p>
                                                                        <a href="course_single.html" class="ed_getinvolved">get involved <i class="fa fa-long-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 ed_bottompadder20">
                                                                    <div class="ed_item_img">
                                                                        <img src="https://dummyimage.com/263x263/000/fff" alt="item1" class="img-responsive">
                                                                    </div>
                                                                    <div class="ed_item_description ed_most_recomended_data">
                                                                        <h4><a href="course_single.html">Billing Seminar</a><span>£20</span></h4>
                                                                        <div class="row">
                                                                            <div class="ed_rating">
                                                                                <div class="col-lg-6 col-md-7 col-sm-6 col-6">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                                            <div class="ed_stardiv">
                                                                                                <div class="star-rating"><span style="width:80%;"></span></div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                                            <div class="row">
                                                                                                <p>(3 review)</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-md-5 col-sm-6 col-6">
                                                                                    <div class="ed_views">
                                                                                        <i class="fa fa-users"></i>
                                                                                        <span>55 students</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <p>We offer these billing seminars to AMA member physicians along with their staff (at least must attend the seminar).</p>
                                                                        <a href="course_single.html" class="ed_getinvolved">get involved <i class="fa fa-long-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 ed_bottompadder20">
                                                                    <div class="ed_item_img">
                                                                        <img src="https://dummyimage.com/263x263/000/fff" alt="item1" class="img-responsive">
                                                                    </div>
                                                                    <div class="ed_item_description ed_most_recomended_data">
                                                                        <h4><a href="course_single.html">Girls On Rails </a><span>£40</span></h4>
                                                                        <div class="row">
                                                                            <div class="ed_rating">
                                                                                <div class="col-lg-6 col-md-7 col-sm-6 col-6">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                                            <div class="ed_stardiv">
                                                                                                <div class="star-rating"><span style="width:80%;"></span></div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                                            <div class="row">
                                                                                                <p>(8 review)</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-md-5 col-sm-6 col-6">
                                                                                    <div class="ed_views">
                                                                                        <i class="fa fa-users"></i>
                                                                                        <span>45 students</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <p>In a lot of various jobs, psychology tests are something you will have to deal with. We can prepare you.</p>
                                                                        <a href="course_single.html" class="ed_getinvolved">get involved <i class="fa fa-long-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 ed_bottompadder20">
                                                                    <div class="ed_item_img">
                                                                        <img src="https://dummyimage.com/263x263/000/fff" alt="item1" class="img-responsive">
                                                                    </div>
                                                                    <div class="ed_item_description ed_most_recomended_data">
                                                                        <h4><a href="course_single.html">programming </a><span>£38</span></h4>
                                                                        <div class="row">
                                                                            <div class="ed_rating">
                                                                                <div class="col-lg-6 col-md-7 col-sm-6 col-6">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                                            <div class="ed_stardiv">
                                                                                                <div class="star-rating"><span style="width:80%;"></span></div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                                            <div class="row">
                                                                                                <p>(9 review)</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-md-5 col-sm-6 col-6">
                                                                                    <div class="ed_views">
                                                                                        <i class="fa fa-users"></i>
                                                                                        <span>60 students</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <p>Project-Based Learning is a flexible tool for framing given academic standards into curriculum flexible tool for framing.</p>
                                                                        <a href="course_single.html" class="ed_getinvolved">get involved <i class="fa fa-long-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="result">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>result details</h2>
                                                        <p>Nam id ligula tristique, porta dolor ac, pretium leo. Maecenas scelerisque vulputate dapibus. Quisque sodales tincidunt sapien, eu consequat erat tempus et. Nullam ipsum est, interdum quis posuere
                                                            sed, imperdiet quis nisi. Proin quis justo est. Vestibulum imperdiet leo sit amet tortor suscipit, id cursus ligula pharetra. Uctus ac eros a, faucibus iaculis quam. Nam non iaculis justo. Donec
                                                            maximus varius velit.</p>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="status">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>some recent status about this course</h2>
                                                        <p>Sed ultricies posuere magna elementum laoreet. Suspendisse elementum sagittis nisl, id pellentesque purus auctor finibus. Donec elementum quam est, a condimentum diam tempor ac. Sed quis magna lobortis,
                                                            pulvinar est at, commodo mauris. Nunc in mollis erat. Integer aliquet orci non auctor pretium. Pellentesque eu nisl augue. Curabitur vitae est ut sem luctus tristique. Suspendisse euismod sapien
                                                            facilisis tellus aliquam pellentesque.</p>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="instructing">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>you have not created any course</h2>
                                                        <p>Sed ultricies posuere magna elementum laoreet. Suspendisse elementum sagittis nisl, id pellentesque purus auctor finibus. Donec elementum quam est, a condimentum diam tempor ac. Sed quis magna lobortis,
                                                            pulvinar est at, commodo mauris. Nunc in mollis erat. Integer aliquet orci non auctor pretium. Pellentesque eu nisl augue. Curabitur vitae est ut sem luctus tristique. Suspendisse euismod sapien
                                                            facilisis tellus aliquam pellentesque.</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!--tab End-->
                                    </div>
                                </div>
                                <div class="tab-pane" id="activity">
                                    <div class="ed_dashboard_inner_tab">
                                        <div role="tabpanel">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation"><a class="active" href="#personal" aria-controls="personal" role="tab" data-bs-toggle="tab">personal</a></li>
                                                <li role="presentation"><a href="#mentions" aria-controls="mentions" role="tab" data-bs-toggle="tab">mentions</a></li>
                                                <li role="presentation"><a href="#favourites" aria-controls="favourites" role="tab" data-bs-toggle="tab">favourites</a></li>
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="personal">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>What's new, andrehouse@123 ?</h2>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <form class="ed_tabpersonal">
                                                                    <div class="form-group">
                                                                        <textarea name="whats_new" class="form-control" id="whats_new" cols="50" rows="5"></textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button class="btn ed_btn ed_green">post update</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="mentions">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>sorry, there was no mentions event found. please try a different filter</h2>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="favourites">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>sorry, there was no favourites event found. please try a different filter</h2>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!--tab End-->
                                    </div>
                                </div>
                                <div class="tab-pane" id="notification">
                                    <div class="ed_dashboard_inner_tab">
                                        <div role="tabpanel">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation"><a class="active" href="#unread" aria-controls="unread" role="tab" data-bs-toggle="tab">unread</a></li>
                                                <li role="presentation"><a href="#read" aria-controls="read" role="tab" data-bs-toggle="tab">read</a></li>
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="unread">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>you have no unread notifications</h2>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="read">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>you have no notifications</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab End-->
                                    </div>
                                </div>
                                <div class="tab-pane" id="profile">
                                    <div class="ed_dashboard_inner_tab">
                                        <div role="tabpanel">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation"><a class="active" href="#view" aria-controls="view" role="tab" data-bs-toggle="tab">view</a></li>
                                                <li role="presentation"><a href="#edit" aria-controls="edit" role="tab" data-bs-toggle="tab">edit</a></li>
                                                <li role="presentation"><a href="#change" aria-controls="change" role="tab" data-bs-toggle="tab">change profile photo</a></li>
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="view">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>your profile</h2>
                                                        <table id="profile_view_settings">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Id</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <tr>
                                                                    <td>Andre House</td>
                                                                    <td><a href="javascript:void(0);">andrehouse@123</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="edit">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>edit profile</h2>
                                                        <form class="ed_tabpersonal">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Your Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <p>This field can be seen by: <strong>Everyone</strong></p>
                                                            </div>
                                                            <div class="form-group">
                                                                <button class="btn ed_btn ed_green">save changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="change">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>change photo</h2>
                                                        <form class="ed_tabpersonal">
                                                            <div class="form-group">
                                                                <p>Click below to select a JPG, GIF or PNG format photo from your computer and then click 'Upload Image' to proceed.</p>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="file" name="photo" accept="image/*">
                                                            </div>
                                                            <div class="form-group">
                                                                <button class="btn ed_btn ed_green">upload image</button>
                                                            </div>
                                                            <div class="form-group">
                                                                <p>If you'd like to delete your current avatar but not upload a new one, please use the delete avatar button.</p>
                                                            </div>
                                                            <div class="form-group">
                                                                <button class="btn ed_btn ed_orange">delete</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab End-->
                                    </div>
                                </div>
                                <div class="tab-pane" id="setting">
                                    <div class="ed_dashboard_inner_tab">
                                        <div role="tabpanel">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation"><a class="active" href="#general" aria-controls="general" role="tab" data-bs-toggle="tab">general</a></li>
                                                <li role="presentation"><a href="#email" aria-controls="email" role="tab" data-bs-toggle="tab">email</a></li>
                                                <li role="presentation"><a href="#visibility" aria-controls="visibility" role="tab" data-bs-toggle="tab">profile visibility</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="general">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>general setting</h2>
                                                        <form class="ed_tabpersonal">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Your Account Email">
                                                            </div>
                                                            <div class="form-group">
                                                                <p>Change Password <strong>(leave blank for no change)</strong></p>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control" placeholder="New Password">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control" placeholder="Repeat New Password">
                                                            </div>
                                                            <div class="form-group">
                                                                <button class="btn ed_btn ed_green">save changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="email">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>email notification</h2>
                                                        <span>Send an email notice when:</span>
                                                        <table id="notification_settings">
                                                            <thead>
                                                                <tr>
                                                                    <th class="title">Activity</th>
                                                                    <th class="yes">Yes</th>
                                                                    <th class="no">No</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <tr>
                                                                    <td>A member mentions you in an update using "@andrehouse123"</td>
                                                                    <td class="yes"><input type="radio" name="activity1" value="yes" checked="checked"></td>
                                                                    <td class="no"><input type="radio" name="activity1" value="no"></td>
                                                                </tr>

                                                                <tr>
                                                                    <td>A member replies to an update or comment you've posted</td>
                                                                    <td><input type="radio" name="activity2" value="yes" checked="checked"></td>
                                                                    <td><input type="radio" name="activity2" value="no"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <button class="btn ed_btn ed_green">save changes</button>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="visibility">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>profile visibility</h2>
                                                        <table id="visibility_settings">
                                                            <thead>
                                                                <tr>
                                                                    <th class="title">Name</th>
                                                                    <th class="yes">Visibility</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <tr>
                                                                    <td>Andre House</td>
                                                                    <td>Everyone</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <button class="btn ed_btn ed_green">save setting</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!--tab End-->
                                    </div>
                                </div>
                                <div class="tab-pane" id="forums">
                                    <div class="ed_dashboard_inner_tab">
                                        <div role="tabpanel">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation"><a class="active" href="#started" aria-controls="started" role="tab" data-bs-toggle="tab">topics started</a></li>
                                                <li role="presentation"><a href="#replies" aria-controls="replies" role="tab" data-bs-toggle="tab">replies created</a></li>
                                                <li role="presentation"><a href="#favourite" aria-controls="favourite" role="tab" data-bs-toggle="tab">favourite</a></li>
                                                <li role="presentation"><a href="#subscribed" aria-controls="subscribed" role="tab" data-bs-toggle="tab">subscribed</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="started">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>forum topics started</h2>
                                                        <span>You have not created any topics.</span>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="replies">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>forum replies created</h2>
                                                        <span>You have not replied to any topics.</span>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="favourite">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>favorite forum topics</h2>
                                                        <span>You currently have no favourite topics.</span>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="subscribed">
                                                    <div class="ed_dashboard_inner_tab">
                                                        <h2>subscribed forums</h2>
                                                        <span>You are not currently subscribed to any forums.</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!--tab End-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!--single student detail end-->

@stop