<?php

namespace App\Http\Controllers;

use App\Models\Art;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class ArtController extends Controller implements HasMiddleware
{

    public static function middleware(){
        return[ new Middleware ('auth', only:['create'])];
    }

  
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $arts=Art::all();
      return view('at.index',compact('arts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('art.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     */
    public function show(Art $art)
    {
        return view('art.show',compact('art'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Art $art)
    {
        if(Auth::id()==$art->user_id){
            return view('art.edit',compact('art'));
        }

        return redirect()->back()->with('denied','accssso negato');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Art $art)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Art $art)
    {
        //
    }


public function indexCategory(Category $category){


    return view('art.index-category',compact('category'));

}



}
