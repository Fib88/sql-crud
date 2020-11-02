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

    public function getTeachers()
    {
        $handle = $this->pdo->prepare('SELECT * FROM teachers');
        $handle->execute();
        return $handle->fetchAll();
    }

    public function getClasses()
    {
        $handle = $this->pdo->prepare('SELECT * FROM classes');
        $handle->execute();
        return $handle->fetchAll();
    }
}
