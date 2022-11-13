<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            'Mon super premier titre',
            'Mon super deuxieme titre'
        ];
        
        //$title = 'Mon super premier titre';
        //  $title2 = 'Mon super deuxieme titre';
        //Renvoie des données d'un tableau
        return view('article', compact('posts'));
        //Utlisation de with
        //return view('article')->with('titre',$titre);

        //Passer données dans la vue

        /* return view('article', [
             'title'=> $title,
             'title2' => $title2
        ]);
        */
    }

    public function show($id)
    {
        $posts = [
            1 => 'Mon titre n°1',
            2 => 'Mon titre n°2'
        ];
        $post = $posts[$id] ?? 'Pas de titre';
        return view('article', [
            'post' => $post,
        ]);
    }
    public  function contact()
    {
        return view('');
    }
}
