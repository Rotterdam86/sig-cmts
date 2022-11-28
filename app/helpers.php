<?php 

    // Voir si la fonction page_title n'existe pas 

use Illuminate\Support\Facades\Route;

    if(! function_exists('page_title'))
    {
        // on crée la fonction page_title
        function page_title($title)
        {
            // initialisation d'une variable de base
            $base_title = config('app.name') . ' - Horizon';
            // voir si il n'y a pas de titre
            if($title == '')
            {
                // on retourne le titre de base
                return $base_title;
            }
            else
            {
                // dans le cas contraire, on retourne la valeur du titre et le titre de base
                return $title .' | '. $base_title;
            }
        }
    }
     // Voir si la fonction set_active_route n'existe pas 
     if(! function_exists('set_active_route'))
     {
         // on crée la fonction set_active_route
         function set_active_route($route)
         {
                 // on retourne une route active ou pas
                 return Route::is($route) ? 'active' : '';
         }
     }