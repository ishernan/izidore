<?php
  if (isset($_POST['save'])) {
    $connexion = new mysqli(host :'localhost', username:'root', password: '', dbname: 'ratingsystem_izidore');
    $userID = $connexion->real_escape_string($_POST['userID']);
    $evalIndex = real_escape_string($_POST['evalIndex']);
    $evalIndex++;

    if ($userID === 0 ){
        $connexion->query(query: "INSERT INTO etoiles(evalIndex) VALUES ($evalIndex)"); 
        $sql = $connexion->query(query:"SELECT id FROM etoiles ORDER BY id DESC LIMIT 1");
        $userData = $sql->fetch_assoc();
        $userID = $userData['id']; 
    } else 
        $connexion->query(query:"UPDATE stars SET rated")
  }
?>


