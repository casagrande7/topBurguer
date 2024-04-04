<?php

use App\Http\Controllers\ProdutoConctroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/produtos', [ProdutoConctroller::class, 'index']);
Route::post('/produtos', [ProdutoConctroller::class, 'store']);

