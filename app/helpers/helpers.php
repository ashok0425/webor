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

function __getDifference($total1,$total2){
    if($total1>0&&$total2>0){
        if($total1>$total2){
            $total=$total1-$total2;
            $percent=($total/$total1)*100;
        }else{
            $total=$total2-$total1;
            $percent=($total/$total2)*100;
        }
        
        return number_format($percent,2);
    }else{
        return  0;
    }
    }