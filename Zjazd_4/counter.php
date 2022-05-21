<?php
    include('header.html');
    if(!isset($_COOKIE["counter"])) {
        setcookie("counter", 2, time() + (60 * 60 * 24 * 7));
    } else {
        setcookie("counter", $_COOKIE["counter"] + 1, time() + (60 * 60 * 24 * 7));
    }

    echo "<p>Odwiedziłęś strone po raz ". $_COOKIE["counter"]." </p> <br />";

    include('footer.html');

?> 

