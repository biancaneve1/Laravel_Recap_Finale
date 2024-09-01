<?php

namespace App\Http\Controllers;

use App\Models\Art;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class PublicController extends Controller implements HasMiddleware

{

public static function middleware(){
    return [
new Middleware('auth', only:['profile'])
    ];
}



    public function home() {

        $categories =Category::all();
        $arts=Art::orderBy('created_at','desc')->take(3)->get();
        return view('welcome',compact('arts','categories'));
    }

    public function profile() {

        return view('auth.profile');
    }
}
