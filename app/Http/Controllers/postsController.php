<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\posts;
use App\Models\add_post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class postsController extends Controller
{
    function create(Request $request){
        $posts = posts::create([
            'depart' => $request->depart,
            'arriver' => $request->arriver,
            'date' => $request->date,
            'heure' => $request->heure,
            'frais' => $request->frais,
            'nb_place' => $request->nb_place,
            'id_postes' => Auth::user()->id ,
        ]);
        return view('ajoute_posts');
        
    }
    function show(){
        $posts = posts::all()->sortBy('updated_at',SORT_REGULAR,true);
        $users = User::all();
        $a_post = add_post::all();
        #dd($posts);
        return view('dashboard',['posts'=>$posts,'users'=>$users,'a_post'=>$a_post]);
    }
    function show1(){
        $posts = posts::all()->sortBy('updated_at',SORT_REGULAR,true);
        $users = User::all();
        $a_post = add_post::all();
        #dd($posts);
        return view('gererpost',['posts'=>$posts,'users'=>$users,'a_post'=>$a_post]);
    }
    function delete($k){
        $post = posts::findOrFail($k);
        
        #foreach($posts as $post)
        #{
         #   if($post->id==$k)
         #   {
                $post->delete();
        #    }
       # }
        #dd($posts);
        $posts = posts::all();
        $users = User::all();
        return view('gererpost',['posts'=>$posts,'users'=>$users]);
    }
    function Profile(){
        return view('profile');
    }

    function showuser(){
        $users = User::all();
        #dd($user);
        return view('gereruser',['users'=>$users]);
        
    }
    function deleteuser($id){
        $users = User::findOrFail($id);
        #dd($user);
        $users->delete();
        $users = User::all();
        return view('gereruser',['users'=>$users]);
        
    }

    function modifuser($id){
        $users = User::findOrFail($id);
        #dd($user);
        
        return view('modifier_role',['users'=>$users]);
        
    }
    function Cmodifuser(Request $k,$id){
        $users = User::findOrFail($id);
        $users->role = $k->role;
        $users->save();
        #dd($user);
        $users = User::all();
        return view('gereruser',['users'=>$users]);
        
    }

}
