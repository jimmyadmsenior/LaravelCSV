<?php

use App\Http\Controllers\PacienteController;

Route::resource('pacientes', PacienteController::class);

Route::get('/pacientes/export/csv', [PacienteController::class, 'exportCsv'])->name('pacientes.export.csv');