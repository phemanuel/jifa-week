<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DesignerController;
use App\Http\Controllers\ChildrenController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'home'])->name('home');
//----Designer routes
Route::get('/designer-signup',[DesignerController::class,'form'])
->name('designer-form');

Route::post('/designer-store',[DesignerController::class,'store'])
->name('designer.store');

Route::get('/designer-payment-verify', [DesignerController::class,'verifyPayment'])
->name('designer.verify');

Route::get('/designer/{designer}/payment', [DesignerController::class, 'payment'])
->name('designer-payment');

Route::get('/designer/payment/success/{designer}', [DesignerController::class, 'success'])
->name('designer.success');

Route::get('/designer/payment/failure/{designer}', [DesignerController::class, 'failure'])
->name('designer.failure');
//------Children routes
Route::get('/children-signup',[ChildrenController::class,'form'])
->name('children-form');

Route::post('/children-store',[ChildrenController::class,'store'])
->name('children.store');

Route::get('/children-payment-verify', [ChildrenController::class,'verifyPayment'])
->name('children.verify');

Route::get('/children/{children}/payment', [ChildrenController::class, 'payment'])
->name('children-payment');

Route::get('/children/payment/success/{children}', [ChildrenController::class, 'success'])
->name('children.success');

Route::get('/children/payment/failure/{children}', [ChildrenController::class, 'failure'])
->name('children.failure');

Route::middleware('guest')->group(function() {
    Route::get('/admin', [AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.submit');
});

// Logout route
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::middleware(['auth', 'is_admin'])->prefix('admin')->group(function() {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/home', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    // Users
    Route::get('users', [UserController::class,'index'])->name('admin.users');
    Route::get('users/create', [UserController::class,'create'])->name('admin.users.create');
    Route::post('users', [UserController::class,'store'])->name('admin.users.store');
    Route::get('users/{user}/edit', [UserController::class,'edit'])->name('admin.users.edit');
    Route::put('users/{user}', [UserController::class,'update'])->name('admin.users.update');
    Route::delete('users/{user}', [UserController::class,'destroy'])->name('admin.users.destroy');

    Route::get('/designers', [AdminController::class, 'designers'])->name('admin.designers');
    Route::get('/childrens', [AdminController::class, 'childrens'])->name('admin.childrens');

   Route::post('/designers/query-payment', [AdminController::class, 'queryPayment'])
   ->name('admin.designer.queryPayment');
   Route::post('/children/query-payment', [AdminController::class, 'queryPaymentChild'])
   ->name('admin.child.queryPayment');
   Route::post('/designers/resend-email', [AdminController::class, 'resendEmail'])
   ->name('admin.designer.resendEmail');
   Route::post('children/resend-email', [AdminController::class, 'resendEmailChild'])
   ->name('admin.child.resendEmail');
});
// Route::get('/test-mail', function () {
//     Mail::raw('Test email working', function ($message) {
//         $message->to('emmakinyooye@gmail.com')
//                 ->subject('Test Mail');
//     });

//     return 'Mail sent!';
// });

