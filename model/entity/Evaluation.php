<?php

class Evaluation
{
    # attributes
    private $id;
    private $id_acheteur;
    private $id_vendeur;
    private $note;
    private $commentaire;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of id_acheteur
     */
    public function getIdAcheteur()
    {
        return $this->id_acheteur;
    }

    /**
     * Set the value of id_acheteur
     */
    public function setIdAcheteur($id_acheteur): self
    {
        $this->id_acheteur = $id_acheteur;

        return $this;
    }

    /**
     * Get the value of id_vendeur
     */
    public function getIdVendeur()
    {
        return $this->id_vendeur;
    }

    /**
     * Set the value of id_vendeur
     */
    public function setIdVendeur($id_vendeur): self
    {
        $this->id_vendeur = $id_vendeur;

        return $this;
    }

    /**
     * Get the value of note
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set the value of note
     */
    public function setNote($note): self
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get the value of commentaire
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set the value of commentaire
     */
    public function setCommentaire($commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }
}
