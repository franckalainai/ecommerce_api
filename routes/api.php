<?php

use Illuminate\Http\Request;

// prendre les methodes index et show
Route::resource('buyers', 'Buyer\BuyerController', ['only' => ['index', 'show']]);

// prendre en compte toutes les methodes sauf create et edit
Route::resource('categories', 'Category\CategoryController', ['except' => ['create', 'edit']]);

// prendre les methodes index et show
Route::resource('products', 'Product\ProductController', ['only' => ['index', 'show']]);

// prendre les methodes index et show
Route::resource('sellers', 'Seller\SellerController', ['only' => ['index', 'show']]);

// prendre les methodes index et show
Route::resource('transactions', 'Transaction\TransactionController', ['only' => ['index', 'show']]);

// prendre en compte toutes les methodes sauf create et edit
Route::resource('users', 'User\UserController', ['except' => ['create', 'edit']]);
