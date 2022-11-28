<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // définition de l'action home
    public function home()
    {
        // On retourne la vue home
        return view('pages.home');
    }

    // définition de l'action cmts
    public function cmts()
    {
        // On retourne la vue cmts
        return view('pages.cmts');
    }

    // définition de l'action contact
    /*public function contact()
    {
        // On retourne la vue cmts
        //return view('pages.cmts');
    }*/
}
