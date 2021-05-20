<?php
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

function __getAdmin(){
return Auth::guard('admin')->user();
}

function __getPriceunit(){
return "$";
}

// function __setLink(){
//     route()
//     }