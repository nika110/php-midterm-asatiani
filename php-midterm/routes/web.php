<?php

use Illuminate\Support\Facades\Route;
use App\Models\Applicant;
use Illuminate\Http\Request;
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
    return view('home');
});

Route::get('/applicants', function () {
    $applicants = Applicant::orderBy('created_at', 'asc')->get();
    return view('applicant_list', [
        'applicants' => $applicants
    ]);
});

Route::get('/applicants/{id}/edit', function ($id) {
    $applicant = Applicant::findOrFail($id);
    return view('edit', [
        'applicant' => $applicant
    ]);
});

Route::post('/applicants/{id}/edit', function ($id, Request $request) {
    $applicant = Applicant::findOrFail($id);
    $applicant->name = $request->name;
    $applicant->surname = $request->surname;
    $applicant->position = $request->position;
    $applicant->phone = $request->phone;
    $applicant->is_hired = $request->is_hired;
    $applicant->save();
    return redirect('/applicants');
})->name('applicants.edit');;
