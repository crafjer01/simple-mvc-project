<?php

namespace App\app\Controllers;

use App\core\App;

class PageController
{

    public function home()
    {
        $posts = App::get('database')->all('posts');

        return view('index', ['posts' => $posts]);
    }

    public function about()
    {
        return view('about', ['company' => 'IDCAS']);
    }

    public function contact()
    {
        return view('contact');
    }

}