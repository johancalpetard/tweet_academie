<?php
class Connexion
{
    protected $bdd;

    public function __construct()
    {
        try {
            $this->bdd = new PDO('mysql:dbname=common-database;host=localhost', 'root', 'root');
        } catch (Exception $e) {
            die('Connexion échoué :' . $e->getMessage());
        }
    }

    public function getDB()
    {
        return $this->bdd;
        // var_dump($this->bdd);
    }
}
