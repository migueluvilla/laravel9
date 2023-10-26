<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
class PageController extends Controller
{
    //Controlador de páginas
    public function home(Request $request) {

        $search = $request->search;
        $posts = Post::where('title', 'LIKE',"%{$search}%")->with('user')->latest()->paginate();

        return view('home', ['posts' => $posts]);
    }

    //Controlador de páginas
    public function dashboard(Request $request) {

        //dd($_REQUEST);
        //dd($request->all());
        //dd($request->search);


        $search = $request->search;
        $posts = Post::where('title', 'LIKE',"%{$search}%")->latest()->paginate();

        return view('dashboard', ['posts' => $posts]);
    }


    public function blog() {
        //extrayendo datos de un modelo
        //trae todos los post (SELECT * FROM posts;)
        $posts = Post::get();


    // return view('blog', concat('posts'));
    return view('blog', ['posts' => $posts]);
    }

    // Recibo una publicación del tipo obejeto Post y sus $datos
    public function posteos(Post $post) {
      //modifico la lógica de la ruta

      return view('posteos', ['post' => $post]);
  }
    // Recibo una publicación del tipo obejeto Post y sus $datos
    public function post(Post $post) {
        //modifico la lógica de la ruta

        return view('post', ['post' => $post]);
    }


}






