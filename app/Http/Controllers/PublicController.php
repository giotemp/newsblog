<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    //

    public function profile(){
        return view('myprofile');
    }

    public function home(){
        $articles=Article::orderBy('created_at','desc')->get();
       
        return view('welcome',compact('articles'));
    }

    // public function authorList($id){
    //     $user = User::find($id);
    //     $articles =$user->articles;
    //     return view('article.list',compact('articles'));
    // }

    public function authorList(User $user){
        $articles =$user->articles;
        return view('article.list',compact('articles'));
    }

}
