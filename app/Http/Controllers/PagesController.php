<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcom to laravel!!!';
        return view('pages.index')->with('title' , $title);
    }

    public function about(){
        $title = 'About Page';
        return view('pages.about')->with('title',$title);
    }

    public function services(){
        $data = [
            'title' => 'Services!',
            'services' => ['Basketball','Jogging' , 'Biking', 'Mountaining']
        ];
        return view('pages.services')->with($data);
    }
}
