<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return redirect('/prenatal');
    });

    Route::get('/development/{id}', function ($id) {
        return view('development');
    });

    Route::get('/prenatal',[InfoController::class, 'index']);
    Route::get('/prenatal/registration',[InfoController::class, 'registration']);
    Route::get('/prenatal/details',[InfoController::class, 'details']);

    Route::post('/info/added',[InfoController::class, 'store'])->name('info.save');

    Route::get('/prenatalvisit', [InfoController::class, 'prenatalindex']);
    Route::post('/prenatal/prenatalvisit/added', [InfoController::class, 'prenatalstore'])->name('prenatal.save');

    Route::get('/labresult', [InfoController::class, 'labindex']);
    Route::post('/prenatal/labresult/added', [InfoController::class, 'labstore'])->name('lab.save');

    Route::get('/covid', [InfoController::class, 'covidindex']);
    Route::post('/prenatal/covid/added', [InfoController::class, 'covidstore'])->name('covid.save');

    Route::get('/dental', [InfoController::class, 'dentalindex']);
    Route::post('/prenatal/dental/added', [InfoController::class, 'dentalstore'])->name('dental.save');

    Route::get('/family', [InfoController::class, 'famindex']);
    Route::post('/prenatal/family/added', [InfoController::class, 'famstore'])->name('family.save');

    Route::get('/healthoffice', [InfoController::class, 'healthoffice_index']);
    Route::post('/prenatal/healthoffice/added', [InfoController::class, 'healthoffice_store'])->name('healthoffice.save');

    Route::get('/labor', [InfoController::class, 'laborindex']);
    Route::post('/prenatal/labor/added', [InfoController::class, 'laborstore'])->name('labor.save');


});
