<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DesignerController;
use App\Http\Controllers\ChildrenController;

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
// Route::get('/test-mail', function () {
//     Mail::raw('Test email working', function ($message) {
//         $message->to('emmakinyooye@gmail.com')
//                 ->subject('Test Mail');
//     });

//     return 'Mail sent!';
// });

