<?php

class database
{
    private $host = "localhost";
    private $username = "richard";
    private $login = "sounouvou";
    private $dbname = "compte";
    protected $connexion;

    public function __construct()
    {
        try {
            $this->connexion = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->username, $this->login);
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            throw new Exception('erreur lors de la connexion ' . $e->getMessage());
        }
    }

    // Methode pour la recuperation de la connexion
    public function getConnexion()
    {
        return $this->connexion;
    }
}
