<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $book = Book::find(1);
    $reviews = $book->reviews;

    dd([
        'book'=> $book,
        'reviews' => $reviews
    ]);



});
