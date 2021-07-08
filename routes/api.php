<?php

use Illuminate\Http\Request;

// prendre les methodes index et show
Route::resource('buyers', 'Buyer\BuyerController', ['only' => ['index', 'show']]);
Route::resource('buyers.transactions', 'Buyer\BuyerTransactionController', ['only' => ['index']]);
Route::resource('buyers.products', 'Buyer\BuyerProductController', ['only' => ['index']]);
Route::resource('buyers.sellers', 'Buyer\BuyerSellerController', ['only' => ['index']]);
Route::resource('buyers.categories', 'Buyer\BuyerCategoryController', ['only' => ['index']]);


// prendre en compte toutes les methodes sauf create et edit
Route::resource('categories', 'Category\CategoryController', ['except' => ['create', 'edit']]);

// prendre les methodes index et show
Route::resource('products', 'Product\ProductController', ['only' => ['index', 'show']]);

// prendre les methodes index et show
Route::resource('sellers', 'Seller\SellerController', ['only' => ['index', 'show']]);

// prendre les methodes index et show
Route::resource('transactions', 'Transaction\TransactionController', ['only' => ['index', 'show']]);
Route::resource('transactions.categories', 'Transaction\TransactionCategoryController', ['only' => ['index']]);
Route::resource('transactions.seller', 'Transaction\TransactionSellerController', ['only' => ['index']]);

// prendre en compte toutes les methodes sauf create et edit
Route::resource('users', 'User\UserController', ['except' => ['create', 'edit']]);
