<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BranchController::class, 'showBranches'])->name('home');

//staff
Route::get('/staff', [StaffController::class, 'showAllStaff'])->name('staff');
Route::post('/staff', [StaffController::class, 'store'])->name('staff.store');
Route::get('/staff/create', [StaffController::class, 'createStaffView'])->name('staff.create');
Route::get('/staff/{staff_id}/edit', [StaffController::class, 'edit'])->name('staff.edit');
Route::put('/staff/{staff_id}', [StaffController::class, 'update'])->name('staff.update');
Route::get('/staff/{staff_id}', [StaffController::class, 'destroy'])->name('staff.destroy');

//videos
Route::get('/videos', [VideoController::class, 'showAllVideos'])->name('videos');
Route::get('/videos/{video_id}', [RentalController::class, 'showVideoDetails'])->name('rentals.video.one');

//members
Route::get('/members', [MemberController::class, 'showAllMembers'])->name('members');

//rentals
Route::get('/rentals', [RentalController::class, 'showAllRentals'])->name('rentals');
Route::get('/rentals/{video_id}', [RentalController::class, 'showVideoDetails'])->name('rentals.video');
Route::get('/rentals/downloadpdf/{video_id}', [RentalController::class, 'exportVideoPdf'])->name('rentals.video.pdf');

