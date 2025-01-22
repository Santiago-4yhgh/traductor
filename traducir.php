<?php
    $palabra_ingles = $_POST['palabra_ingles']; 

    
    if ($palabra_ingles == "singer") {
        $traduccion = "cantante";
    }
    else if ($palabra_ingles == "concert") {
        $traduccion = "concierto";
    }
    else if ($palabra_ingles == "song") {
        $traduccion = "canción";
    }
    else if ($palabra_ingles == "happiness") {
        $traduccion = "felicidad";   
    }
    else if ($palabra_ingles == "flower") {
        $traduccion = "flor";
    }
    else if ($palabra_ingles == "dream") {
        $traduccion = "sueño";
    }
    else if ($palabra_ingles == "adventure") {
        $traduccion = "aventura";
    }
    else if ($palabra_ingles == "moon") {
        $traduccion = "luna";
    }
    else if ($palabra_ingles == "food") {
        $traduccion = "comida";
    }
    else if ($palabra_ingles == "star") {
        $traduccion = "estrella";
    }else {
        $traduccion = "No hay traducción.";
    }

    // Imprimir la traducción
    echo($traduccion);
?>
