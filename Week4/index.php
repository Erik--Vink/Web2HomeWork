<?php

include ("gebruiker.class.php");
include ("view.php");

//$gebruikers = Gebruiker::get_gebruikers();
$gebruikers = Gebruiker::getGebruikerById(1);
show_gebruikers($gebruikers);

?>