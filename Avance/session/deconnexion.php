<?php

// Démarrer la session
session_start();

// Destruction de la variable de session "pseudo"
unset($_SESSION["pseudo"]);

// Destruction de la session actuelle
session_destroy();

// Redirection vers la page d'accueil
header("Location: index.php");

?>