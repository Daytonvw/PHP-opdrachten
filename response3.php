<?php

if($_POST['email'] == "") {
    echo "Sorry, geen toegang!";
    echo "<br><a href=\"Opdracht 5 H05.php\">Terug naar het formulier</a>";

};

if($_POST['email'] == "piet@worldwideonline.nl") {
    echo "Welkom";

};

if($_POST['wachtwoord'] == "") {
    echo "Sorry, geen toegang!";
    echo "<br><a href=\"Opdracht 5 H05.php\">Terug naar het formulier</a>";
};

if($_POST['wachtwoord'] == "doetje123") {
    echo "Welkom";

};