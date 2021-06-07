<?php

session_start();

include_once "../model/entity/User.php";
include_once "../model/entity/Evaluation.php";
include_once "../model/dao/UserDao.php";

$evalutaion = new Evaluation();
$evalutaion->setCommentaire($_POST['commentaire']);
$evalutaion->setCommentaire($_POST['commentaire']);
$evalutaion->setCommentaire($_POST['commentaire']);
$evalutaion->setNote($_POST['note']);

var_dump($_POST['userId']);
die;
$userDao = new UserDao();

$acheteur = $userDao->getUserById((int) $_POST['userId']);
$vendeur = $userDao->getUserById((int) $_POST['vendeurId']);



//var_dump(json_encode($_POST));
die;
return json_encode($_POST);



