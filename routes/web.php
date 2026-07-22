<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("welcome");
});

Route::get("/services", function () {
    return view("services");
});

Route::get("/work", function () {
    return view("work");
});

Route::get("/about", function () {
    return view("about");
});

Route::get("/contact", function () {
    return view("contact");
});

