<?php
session_start();
include_once "../model/entity/User.php";
include_once "../model/entity/Evaluation.php";
include_once "../model/dao/UserDao.php";
include_once "../model/dao/EvaluationDao.php";

$userDao = new UserDao();

$acheteur = $userDao->getUserById((int) $_SESSION['userId']);

$vendeur = $userDao->getUserById((int) $_SESSION['vendeurId']);

//verifier que l'acheteur  et le vendeur existe. S'ils existent donc stocker une nouvelle entrée dans la table "evaluation"
if (isset($acheteur) && isset($vendeur)) {
	$evaluation = new Evaluation();
	$evaluation->setIdAcheteur($_SESSION['userId']);
	$evaluation->setIdVendeur($_SESSION['vendeurId']);
	$evaluation->setCommentaire($_POST['commentaire']);
	$evaluation->setNote($_POST['note']);
	$evaluationDao = new EvaluationDao();
	$resultat = $evaluationDao->setEvaluation($evaluation);
	
	if ($resultat) {
		include("../template/confirmationEvaluation.php");
	} else {
		include("../template/404.php");
	}
}


return json_encode($_POST);
