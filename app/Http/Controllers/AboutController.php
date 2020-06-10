<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $socials = [
            'Facebook',
            'Instagram',
            'Twitter'
        ];
        return view('about', compact('socials'));
    }
}