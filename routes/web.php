<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
});

$cruds = [
    'orders' => OrderController::class,
];

foreach ($cruds as $obj => $controller) {
    Route::resource($obj, $controller);
}
