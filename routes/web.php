<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QualificationController;
use App\Http\Controllers\CenterController;
use App\Http\Controllers\AuditTypeController;
use App\Http\Controllers\RequirementsController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tvi-suggestions', [App\Http\Controllers\RequirementsController::class, 'getTviSuggestions']);
Route::post('/tvi-audit', [App\Http\Controllers\RequirementsController::class, 'getTviAudits']);
Route::post('/audit-qualifications', [App\Http\Controllers\RequirementsController::class, 'getAuditQualifications']);
Route::post('/qualifications-doc-type', [App\Http\Controllers\RequirementsController::class, 'getQualificationsDocTypes']);


Route::resource('users', UserController::class);
Route::resource('qualifications', QualificationController::class);
Route::resource('centers', CenterController::class);
Route::resource('audits', AuditTypeController::class);
Route::resource('requirements', RequirementsController::class);
