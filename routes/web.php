<?php

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
    return view('welcome');
});

#Aprendiz
Route::get('Aprendiz/insert', 'AprendizController@ViewInsert')->name('InsertAprendiz');
Route::get('Aprendiz/view', 'AprendizController@ViewApre') ->name('ViewAprendiz');
Route::post('Aprendiz/insert', 'AprendizController@InsertApre')  ->name('InsertAprendiz');
Route::get('Aprendiz/delete/{id}', 'AprendizController@DeleteApre') ->name('DeleteAprendiz');
Route::get('Aprendiz/update/{id}', 'AprendizController@UpdateApre') ->name('UpdateAprendiz');
Route::post('Aprendiz/update', 'AprendizController@UpdateBdApre')  ->name('UpdateBdAprendiz');

Route::get('Aprendiz/json','AprendizController@resuljson')->name('listaprendiz');
#endaprendiz

#CentroFormacion
Route::get('CentroFormacion/delete/{id}', 'CentroFormacionController@DeleteCen') ->name('DeleteCentroFormacion');
Route::get('CentroFormacion/update/{id}', 'CentroFormacionController@UpdateCen') ->name('UpdateCentroFormacion');
Route::get('CentroFormacion/view', 'CentroFormacionController@ViewCen') ->name('ViewCentroFormacion');

Route::get('CentroFormacion/insert', 'CentroFormacionController@ViewInsert')->name('InsertCentroFormacion');

Route::post('CentroFormacion/insert', 'CentroFormacionController@InsertCen')  ->name('InsertCentroFormacion');
Route::post('CentroFormacion/update', 'CentroFormacionController@UpdateBdCen')  ->name('UpdateBdCentroFormacion');

Route::get('CentroFormacion/json','CentroFormacionController@resuljson')->name('listcentro');
#endcentroformacion

#Regional
Route::get('Regional/delete/{id}', 'RegionalController@DeleteReg') ->name('DeleteRegional');
Route::get('Regional/update/{id}', 'RegionalController@UpdateReg') ->name('UpdateRegional');
Route::get('Regional/view', 'RegionalController@ViewReg') ->name('ViewRegional');

Route::get('Regional/insert', function () {
    return view('Regional/insert');
})->name('InsertRegional');

Route::post('Regional/insert', 'RegionalController@InsertReg')  ->name('InsertRegional');
Route::post('Regional/update', 'RegionalController@UpdateBdReg')  ->name('UpdateBdRegional');

Route::get('Regional/json','RegionalController@resuljson')->name('listreg');
#endregional




// #Aprendiz
// Route::get('Aprendiz/insert', function () {
//     return view('Aprendiz/insert');
// })->name('InsertAprendiz');
// Route::get('Aprendiz/view', 'AprendizController@ViewApre') ->name('ViewAprendiz');
// Route::post('Aprendiz/insert', 'AprendizController@InsertApre')  ->name('InsertAprendiz');
// Route::get('Aprendiz/delete/{id}', 'AprendizController@DeleteApre') ->name('DeleteAprendiz');
// Route::get('Aprendiz/update/{id}', 'AprendizController@UpdateApre') ->name('UpdateAprendiz');
// Route::post('Aprendiz/update', 'AprendizController@UpdateBdApre')  ->name('UpdateBdAprendiz');
// #endaprendiz


