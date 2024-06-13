<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Games;

class Gamecontroller extends Controller
{
    public function home()
    {
        // $games = [
        //     ['game_id' => '1', 'name'=> 'tekken_god', 'description'=> 'fight game god', 'price'=> '80'],
        //     ['game_id' => '2', 'name'=> 'wowsito_god', 'description'=> 'a mmorp god', 'price'=> '60'],
        //     ['game_id' => '3', 'name'=> 'resident_evil_4', 'description'=> 'horror', 'price'=> '620'],
        // ];
        $games=Games::paginate();
        return view('vistas/home', ['games'=> $games]);
    }

    public function details(Games $games)
    {
        return view('vistas/details', ['games' => $games]);
    }
    // public function post(Post $post)
    // // aca hacemos mencion al modelo, puesto que esta recibiendo un registro que fue seleccionado previamente en la vista
    // {
    //     return view('vistas/post', ['post' => $post]);
    // }
}
