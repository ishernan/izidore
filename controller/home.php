<?php
include_once('routes/common.php');
include_once($path_main."model/dao/EvaluationDao.php");


class Home {
  public function cargaHome(){
      $evaluationDao = new EvaluationDao();
      $resultat= $evaluationDao->getEvaluationsBySellerById((int) $_SESSION['vendeurId']);
      $addition = 0; 
      $votes= count($resultat);
      foreach($resultat as $registre){
        $addition+=$registre['note'];
      }
      $ponderation=round($addition/$votes,1,PHP_ROUND_HALF_UP); 
       
    include_once($path_main.'template/home.php'); 
    
  }
} 
