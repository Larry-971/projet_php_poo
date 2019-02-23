<?php
//Création de ma class vêtement
class Vetement {
    protected $id;
    protected $nom;
    protected $modele;
    protected $marque;
    protected $photo;
    protected $prix;
    protected $pays;
    protected $description;

    /****Getters et Setters des variables d'instances de ma class Vetement *****/

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getModele()
    {
        return $this->modele;
    }
 
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }
 
    public function getMarque()
    {
        return $this->marque;
    }

    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }
 
    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    public function getPrix()
    {
        return $this->prix;
    }
 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    public function getPays()
    {
        return $this->pays;
    }

    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}




?>