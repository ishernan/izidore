<?php

include_once '../model/Connection.php';


class UserDao extends Connection
{
	function getUserById($id)
	{
		$query = "SELECT * FROM user WHERE user.id =" . $id;
		$operation = $this->cnx->prepare($query, array(Connection::FETCH_ASSOC)); # recuperation de valeurs associatifs 
		$operation->execute();
		$response = $operation->fetchObject();
		return $response;
	}
}
