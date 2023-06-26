<div class="mycontainer">
    <nav>
        <div class="mynavbar">
            <div class="mylogo">
                <img src="{{asset('assets/images/header/edu-white.png')}}" alt="">
                <a href="/">
                    <h1>jobs</h1>
                </a>
            </div>
            <ul>
                <li><a href="#">
                        <i class="fa-solid fa-gauge"></i>
                        <span class="mynav-item">Dashboard</span>
                    </a>
                </li>
                <li><a href="#">
                        <i class="fas fa-user"></i>
                        <span class="mynav-item">My Profile</span>
                    </a>
                </li>
                <li><a href="#">
                        <i class="fa-solid fa-book"></i>
                        <span class="mynav-item">My Classes</span>
                    </a>
                </li>

                <li><a href="#">
                        <i class="fas fa-cog"></i>
                        <span class="mynav-item">Setting</span>
                    </a>
                </li>
                <li><a href="#">
                        <i class="fas fa-question-circle"></i>
                        <span class="mynav-item">Help</span>
                    </a>
                </li>
                <!-- <li><a href="#" class="mylogout">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="ynav-item">Logout</span>
                    </a>
                </li> -->
            </ul>
        </div>
    </nav>

    <section class="mymain ">
        <div class="container mymain-top d-flex justify-content-end">
            <a href="/">
                <button class="btn btn-dark">

                    Student Portal
                </button>
            </a>
            <a href="/">
                <button class="btn">

                    <i class="fas fa-sign-out-alt"></i>
                    <span class="ynav-item">Logout</span>
                </button>
            </a>
        </div>

        <div class="main-body">
                <h1>Recent Jobs</h1>

                <div class="search_bar">
                    <input type="search" placeholder="Search job here...">
                    <select name="" id="">
                        <option>Category</option>
                        <option>Web Design</option>
                        <option>App Design</option>
                        <option>App Development</option>
                    </select>
                    <select class="filter">
                        <option>Filter</option>
                    </select>
                </div>
        </div>
    </section>
</div>