<?php


    function show_gebruikers( $gebruikers)
    {
        foreach ($gebruikers as $gebruiker)
        {
            echo "$gebruiker->geb_id $gebruiker->geb_voornaam $gebruiker->geb_achternaam </br>" ;
        }
    }


?>