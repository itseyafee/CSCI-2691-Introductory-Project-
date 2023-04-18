<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimonialController;
use App\Models\Testimonial;

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

Route::get('/', function () {
    return view('main.index');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/highlights', function () {
    return view('admin.highlights');
});


Route::get('/admin/testimonials', [TestimonialController::class,'addTestimonial']);

Route::post('/testimonial/insert', [TestimonialController::class, 'insertTestimonial'])->name('testimonial.insert');

Route::get('main-elements.client-testimonials.client-testimonials',[TestimonialController::class,'showTestimonial']);

Route::get('admin-elements.client-testimonials.client-testimonials',[TestimonialController::class,'showTestimonialAdmin']);

Route::get('/testimonial/delete/{id}', [TestimonialController::class, 'deleteTestimonial'])->name('testimonial.delete');

Route::post('/testimonial/update/{id}', [TestimonialController::class, 'updateTestimonial'])->name('testimonial.update');




Route::get('/login', function () {
    return view('login.login');
});

Route::get("/forget_pwd", function () {
    return view('auth.passwords.forget_pwd');
});

Route::get("/reset_pwd_email_sent", function () {
    return view('auth.passwords.reset_pwd_email_sent');
});

Route::get('/resetPwd_without_old_pwd', function (){
    //this should be changed to post or something else later so that
    //nobody can just get this page and reset other ppl's pwd
    return view('auth.passwords.resetPwd_without_old_pwd');
});

Route::get("/sign_to_become_our_client", function () {
    return view('main.client-registration');
});

Route::get("/client_regristration_submitted", function () {
    return view('client-registration.client-registration-submit');
}) -> name('client_regristration_submitted');


Route::get("/client-registration" , [RegisterController::class, 'index']) -> name('register');
Route::post("/client-registration" , [RegisterController::class, 'onFormSubmit']);
