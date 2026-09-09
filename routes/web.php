<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/course', [HomeController::class, 'course'])->name('course');
Route::get('/gallery', [HomeController::class, 'galleryPage'])->name('gallery');

Route::get('/about',function(){
    return view('frontend.pages.about');
})->name('about');


Route::get('/blog',function(){
    return view('frontend.pages.blog');
})->name('blog');

Route::get('/contact',function(){
    return view('frontend.pages.contact');
})->name('contact');

Route::get('/enroll',function(){
    return view('frontend.pages.enroll');
})->name('enroll');

// Route::get('/course/railway',function(){
//     return view('frontend.pages.courses.railway');
// })->name('railway');

Route::get('/free-trial/school',function(){
    return view('frontend.pages.free-trial-school');
})->name('free-trial.school');

Route::get('/free-trial/home',function(){
    return view('frontend.pages.free-trial-home');
})->name('free-trial.home');

// Route::get('/course/cgl',function(){
//     return view('frontend.pages.courses.cgl');
// })->name('cgl');

// Route::get('/course/gd',function(){
//     return view('frontend.pages.courses.gd');
// })->name('gd');

// Route::get('/dashboard',function(){
//     return view('backend.pages.dashboard');
// })->name('dashboard');


// Route::get('/blog',function(){
//     return view('backend.pages.blog');
// })->name('blog');



// Form submit
Route::post('/enroll', [EnrollController::class, 'store'])->name('enroll.store');

Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout'); 

Route::middleware(['admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Courses
    Route::get('/admin/courses', [CourseController::class, 'index'])->name('courses');
    Route::get('/admin/courses/create', [CourseController::class, 'create'])->name('course.create');
    Route::post('/admin/courses/store', [CourseController::class, 'store'])->name('course.store');
    Route::get('/admin/courses/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
    Route::post('/admin/courses/update/{id}', [CourseController::class, 'update'])->name('course.update');
    Route::get('/admin/courses/delete/{id}', [CourseController::class, 'delete'])->name('course.delete');

    // Banners
    Route::get('/admin/banner', [BannerController::class, 'index'])->name('banner');
    Route::post('/admin/banner/store', [BannerController::class, 'store'])->name('banner.store');
    Route::get('/admin/banner/edit/{id}', [BannerController::class, 'edit'])->name('banner.edit');
    Route::post('/admin/banner/update/{id}', [BannerController::class, 'update'])->name('banner.update');
    Route::get('/admin/banner/delete/{id}', [BannerController::class, 'delete'])->name('banner.delete');

    // Gallery
    Route::get('/admin/gallery', [GalleryController::class, 'create'])->name('gallery.create');
    Route::post('/admin/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('/admin/gallery/edit/{id}', [GalleryController::class, 'edit'])->name('gallery.edit');
    Route::post('/admin/gallery/update/{id}', [GalleryController::class, 'update'])->name('gallery.update');
    Route::delete('/admin/gallery/delete/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');

    // Testimonials
    Route::get('/admin/testimonials', [App\Http\Controllers\Admin\TestimonialController::class, 'index'])->name('testimonials');
    Route::post('/admin/testimonials/store', [App\Http\Controllers\Admin\TestimonialController::class, 'store'])->name('testimonial.store');
    Route::get('/admin/testimonials/edit/{id}', [App\Http\Controllers\Admin\TestimonialController::class, 'edit'])->name('testimonial.edit');
    Route::post('/admin/testimonials/update/{id}', [App\Http\Controllers\Admin\TestimonialController::class, 'update'])->name('testimonial.update');
    Route::get('/admin/testimonials/delete/{id}', [App\Http\Controllers\Admin\TestimonialController::class, 'delete'])->name('testimonial.delete');

    // Faculty
    Route::get('/admin/faculty', [App\Http\Controllers\Admin\FacultyController::class, 'index'])->name('faculty');
    Route::post('/admin/faculty/store', [App\Http\Controllers\Admin\FacultyController::class, 'store'])->name('faculty.store');
    Route::get('/admin/faculty/edit/{id}', [App\Http\Controllers\Admin\FacultyController::class, 'edit'])->name('faculty.edit');
    Route::post('/admin/faculty/update/{id}', [App\Http\Controllers\Admin\FacultyController::class, 'update'])->name('faculty.update');
    Route::get('/admin/faculty/delete/{id}', [App\Http\Controllers\Admin\FacultyController::class, 'delete'])->name('faculty.delete');

    // Performers
    Route::get('/admin/performers', [App\Http\Controllers\Admin\PerformerController::class, 'index'])->name('performers');
    Route::post('/admin/performers/store', [App\Http\Controllers\Admin\PerformerController::class, 'store'])->name('performer.store');
    Route::get('/admin/performers/edit/{id}', [App\Http\Controllers\Admin\PerformerController::class, 'edit'])->name('performer.edit');
    Route::post('/admin/performers/update/{id}', [App\Http\Controllers\Admin\PerformerController::class, 'update'])->name('performer.update');
    Route::get('/admin/performers/delete/{id}', [App\Http\Controllers\Admin\PerformerController::class, 'delete'])->name('performer.delete');

    // Batches & Tickers
    Route::get('/admin/batches', [App\Http\Controllers\Admin\BatchController::class, 'index'])->name('batches');
    Route::post('/admin/batches/store', [App\Http\Controllers\Admin\BatchController::class, 'store'])->name('batch.store');
    Route::get('/admin/batches/edit/{id}', [App\Http\Controllers\Admin\BatchController::class, 'edit'])->name('batch.edit');
    Route::post('/admin/batches/update/{id}', [App\Http\Controllers\Admin\BatchController::class, 'update'])->name('batch.update');
    Route::get('/admin/batches/delete/{id}', [App\Http\Controllers\Admin\BatchController::class, 'delete'])->name('batch.delete');
    Route::post('/admin/batches/settings', [App\Http\Controllers\Admin\BatchController::class, 'updateSettings'])->name('batch.settings.update');

    Route::post('/admin/tickers/store', [App\Http\Controllers\Admin\BatchController::class, 'storeTicker'])->name('ticker.store');
    Route::get('/admin/tickers/delete/{id}', [App\Http\Controllers\Admin\BatchController::class, 'deleteTicker'])->name('ticker.delete');

    // Site Assets
    Route::get('/admin/assets', [App\Http\Controllers\Admin\AssetController::class, 'index'])->name('assets');
    Route::post('/admin/assets/store', [App\Http\Controllers\Admin\AssetController::class, 'store'])->name('asset.store');
    Route::post('/admin/assets/update/{id}', [App\Http\Controllers\Admin\AssetController::class, 'update'])->name('asset.update');
    Route::get('/admin/assets/delete/{id}', [App\Http\Controllers\Admin\AssetController::class, 'delete'])->name('asset.delete');

    // Enrollments
    Route::get('/admin/enrollments', [EnrollController::class, 'index'])->name('enrollments');

    // Settings
    Route::get('/admin/settings', [App\Http\Controllers\Admin\SettingController::class, 'index'])->name('settings');
    Route::post('/admin/settings/update', [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('settings.update');
});