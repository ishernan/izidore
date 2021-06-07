<?php

class User
{
	# attributes
	private $id;
	private $nom;
	private $prenom;
	private $active;

	# setters
	function setNom(string $nom)
	{
		$this->nom = $nom;
	}

	function setPrenom(string $prenom)
	{
		$this->prenom = $prenom;
	}

	function setActive(int $active)
	{
		$this->active = $active;
	}

	# getters
	function getId()
	{
		return $this->id;
	}
	function getNom()
	{
		return $this->nom;
	}
	function getPrenom()
	{
		return $this->prenom;
	}
	function getActive()
	{
		return $this->active;
	}
}
