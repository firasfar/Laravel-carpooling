<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\posts;
use App\Models\add_post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class add_postController extends Controller
{
    function create($id,$m){
        $a_post = add_post::all();
       
        $trouve=0;
        foreach($a_post as $k)
        {
            if($k->id_posts==$id&&$k->id_users==Auth::user()->id)
            {
                $trouve=1;
            }
        }
        if($trouve==0)
        {
            $posts = add_post::create([
                'id_users' => Auth::user()->id ,
                'id_posts' => $id ,
            ]);
        }
        
        $a_post = add_post::all();
        $posts = posts::all()->sortBy('updated_at',SORT_REGULAR,true);
        $users = User::all();
        return view('dashboard',['posts'=>$posts,'users'=>$users,'a_post'=>$a_post]);
        
    }
}
