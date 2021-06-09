<?php

class Evaluation
{
    # attributes
    private $id;
    private $id_acheteur;
    private $id_vendeur;
    private $note;
    private $commentaire;

    
    public function getId()
    {
        return $this->id;
    }

    
    public function getIdAcheteur()
    {
        return $this->id_acheteur;
    }

   
    public function setIdAcheteur($id_acheteur): self
    {
        $this->id_acheteur = $id_acheteur;

        return $this;
    }

    public function getIdVendeur()
    {
        return $this->id_vendeur;
    }

   
    public function setIdVendeur($id_vendeur): self
    {
        $this->id_vendeur = $id_vendeur;

        return $this;
    }

    
    public function getNote()
    {
        return $this->note;
    }

    
    public function setNote($note): self
    {
        $this->note = $note;

        return $this;
    }

    
    public function getCommentaire()
    {
        return $this->commentaire;
    }

  
    public function setCommentaire($commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }
}
