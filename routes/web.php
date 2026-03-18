<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DesignerController;

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

// Route::get('/test-mail', function () {
//     Mail::raw('Test email working', function ($message) {
//         $message->to('emmakinyooye@gmail.com')
//                 ->subject('Test Mail');
//     });

//     return 'Mail sent!';
// });

