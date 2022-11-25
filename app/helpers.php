<?php 
    // Voir si la fonction page_title n'existe pas 
    if(! function_exists('page_title'))
    {
        // on crée la fonction page_title
        function page_title($title)
        {
            // initialisation d'une variable de base
            $base_title = 'Sig@ - Médicale';
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