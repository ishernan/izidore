<?php
if(is_file('../model/Connection.php')){
	include_once '../model/Connection.php';
} else {
	include_once 'model/Connection.php';
}


class EvaluationDao extends Connection
{
	function setEvaluation(Evaluation $evaluation)
	{
		$query = "INSERT INTO evaluation(id_acheteur, id_vendeur, note, commentaire)
        VALUES(:acheteur, :vendeur, :note, :commentaire)";
		# INSERTION valores associativos
		$stmt = $this->cnx->prepare($query);
		$stmt->execute([
			':acheteur' => $evaluation->getIdAcheteur(),
			':vendeur' => $evaluation->getIdVendeur(),
			':note' => $evaluation->getNote(),
			':commentaire' => $evaluation->getCommentaire()
		]);
		return true;
	}

	function getEvaluationsBySellerById(int $idVendeur)
	{
		$query = "SELECT note FROM evaluation WHERE evaluation.id_vendeur = $idVendeur";
		$stmt = $this->cnx->prepare($query, array(Connection::FETCH_OBJ));
		$stmt->execute();
		$response = $stmt->fetchAll();
		return $response;
	}
}
