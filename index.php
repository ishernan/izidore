<?php
 
session_start();

# On suppose que l'acheteur est déjà connecté dans notre site
# et on possede son identifiant dans une variable de session
$_SESSION['userId'] = "2";
$_SESSION['vendeurId'] = "3";


include_once('controller/home.php');
$home = New home(); 
$home->cargaHome();
/*
$home->cargaHomeNavidad();
$home->cargaHomeDiaPadre();
*/