<?php

class Connection extends PDO
{

    protected $cnx = NULL;
    protected $hasActiveTransaction = false;

    const _motor = 'mysql';
    const _host  = 'localhost';
    const _base  = 'izidore';
    const _user  = 'root';
    const _pass  = '';
    const _charset  = 'UTF8';

    public function __construct()
    {
        try {
            $this->cnx = new PDO(self::_motor . ":host=" . self::_host . ";dbname=" . self::_base . "; charset=" . self::_charset . ";", self::_user, self::_pass);

            $this->cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            exit('Erreur : ' . $e->getMessage());
        }
    }

    public function requete($requete)
    {
        return $this->cnx->query($requete);
    }

    public function prepare($requete, $option = NULL)
    {
        return $this->cnx->prepare($requete, $option);
    }

    public function fetch($resultat)
    {
        return $resultat->fetch();
    }

  
    public function close($resultat)
    {
        return $resultat->closeCursor();
    }

    public function lastInsertId($seqname = NULL)
    {
        return $this->cnx->lastInsertId($seqname);
    }

    function beginTransaction()
    {
        if ($this->hasActiveTransaction) {
            return false;
        } else {
            $this->hasActiveTransaction = parent::beginTransaction();
            return $this->hasActiveTransaction;
        }
    }

    function commit()
    {
        parent::commit();
        $this->hasActiveTransaction = false;
    }

    function rollback()
    {
        parent::rollback();
        $this->hasActiveTransaction = false;
    }
}
