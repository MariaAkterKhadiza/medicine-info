<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;

Route::get('/', function () {
    return redirect()->route('medicines.index');
});

Route::resource('medicines', MedicineController::class);
