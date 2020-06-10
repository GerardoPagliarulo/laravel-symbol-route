<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $socials = [
            'Facebook',
            'Instagram',
            'Twitter'
        ];
        return view('index', compact('socials'));
    }
}
