<?php


class Handler
{
    private PDO $pdo;


    public function __construct()
    {
        $this->pdo = $this->openConnection();

    }

    public function openConnection(): PDO
    {
        require 'config.php';

        return new PDO('mysql:host=' . $dbhost . ';dbname=' . $db, $dbuser, $dbpass, $driverOptions);
    }


    public function getStudents()
    {
        $handle = $this->pdo->prepare('SELECT * FROM students');
        $handle->execute();
        return $handle->fetchAll();
    }

}
