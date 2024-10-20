<?php

use NueTemplate\Default\Controllers as Ctrl;

Route::middleware(['web', 'maintenance'])->as('theme::')->group(function () 
{
    Route::get('/', [Ctrl\IndexController::class, 'index'])->name('index');

    // 
});