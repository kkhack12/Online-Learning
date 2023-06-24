<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//#region

Route::post('/login', [LoginController::class,'process_login'])->name('postlogin');
Route::post('/register', [LoginController::class,'process_signup'])->name('postsignup');
// Route::post('/logout', [LoginController::class,'logout'])->name('logout');
//#endregion


Route::get('/', function () {
    return view('master.master');
});
//login
Route::get('/login', function () {
    return view('frontend.login');
});


//homepage
Route::get('/homepage', function(){
    return view('frontend.homepage');
});


//signup page
Route::get('/signup', function(){
    return view('frontend.signup');
});



//about us page
Route::get('/aboutus',function(){
    return view('frontend.aboutus');
});


Route::group(["middleware" => ["auth"]], function(){
    //course page
    Route::get('/course',function(){
        return view('frontend.course');
    });
    
    //single course page
    Route::get('/coursesingle',function(){
        return view('frontend.coursesingle');
    });
    
    //dashboard
    Route::get('/dashboard',function(){
        return view('frontend.dashboard');
    });
    
    //teacher dashboard
    Route::get('/teacherdashboard',function(){
        return view('frontend.teacherdashboard');
    });
    
    //teacher register
    Route::get('/teacherregister',function(){
        return view('frontend.teacherregister');
    });
    
    //all teacher page
    Route::get("/allteacher",function(){
        return view('frontend.allteacher');
    });
    
    //cart
    Route::get('/cart',function(){
        return view('frontend.cart');
    });
    
    //checkout
    Route::get('/checkout',function(){
        return view('frontend.checkout');
    });
    
    //contact page
    Route::get('/contact',function(){
        return view('frontend.contact');
    });
    
    //event page
    Route::get('/event',function(){
        return view('frontend.event');
    });
    
    //admin page
    //course page
    Route::get('/a_course',function(){
        return view('backend.a_course');
    });
    
    //student dashboard page
    Route::get("/a_studentdashboard",function(){
        return view('backend.a_studentdashboard');
    });
    
    //teacher dashboad page
    Route::get("/a_teacherdashboard",function(){
        return view('backend.a_teacherdashboard');
    });


});


