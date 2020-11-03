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

    public function addTeacher($name, $email, $classeName)
    {
        $classes = $this->getClasses();
        foreach ($classes as $course) {
            if ($course['name'] == $classeName) {
                $classes_id = $course['id'];
            }
        }
        $handle = $this->pdo->prepare('INSERT INTO teachers ( name, email,classes_id) VALUES (:name,:email,:classes_id )');
        $handle->bindValue(':name', $name);
        $handle->bindValue(':email', $email);
        $handle->bindValue(':classes_id', $classes_id);
        $handle->execute();
    }

    public function addStudent($name, $email, $classeName)
    {
        $classes = $this->getClasses();
        foreach ($classes as $course) {
            if ($course['name'] == $classeName) {
                $classes_id = $course['id'];
            }
        }
        $handle = $this->pdo->prepare('INSERT INTO students ( name, email,classes_id) VALUES (:name,:email,:classes_id )');
        $handle->bindValue(':name', $name);
        $handle->bindValue(':email', $email);
        $handle->bindValue(':classes_id', $classes_id);
        $handle->execute();
    }

    public function updateTeacher($id, $name, $email, $classeName)
    {
        $classes = $this->getClasses();
        foreach ($classes as $course) {
            if ($course['name'] == $classeName) {
                $classes_id = $course['id'];
            }
        }
        $handle = $this->pdo->prepare('UPDATE teachers SET name =:name, email =:email, classes_id = :classes_id WHERE id = :id');
        $handle->bindValue(':id', $id);
        $handle->bindValue(':name', $name);
        $handle->bindValue(':email', $email);
        $handle->bindValue(':classes_id', $classes_id);
        $handle->execute();
    }

    public function updateStudent($id, $name, $email, $classeName)
    {
        $classes = $this->getClasses();
        foreach ($classes as $course) {
            if ($course['name'] == $classeName) {
                $classes_id = $course['id'];
            }
        }
        $handle = $this->pdo->prepare('UPDATE students SET name =:name, email =:email, classes_id = :classes_id WHERE id = :id');
        $handle->bindValue(':id', $id);
        $handle->bindValue(':name', $name);
        $handle->bindValue(':email', $email);
        $handle->bindValue(':classes_id', $classes_id);
        $handle->execute();
    }

    function getStudentsCourse($teacherCourse)
    {
        $students = $this->getStudents();
        $teacherStudents = array();
        foreach ($students as $student) {
            if ($student['class_id'] == $teacherCourse) {
                array_push($teacherStudents, $student);
            }
        }
        return $teacherStudents;
    }

    function deleteTeacher($teacherId)
    {
        $teachers = $this->getTeachers();
        foreach ($teachers as $teacher) {
            if ($teacher->getId() == $teacherId) {

                $handle = $this->pdo->prepare('ALTER TABLE classes NO CHECK CONSTRAINT ALL; DELETE FROM teachers WHERE id = :id; ALTER TABLE classes CHECK CONSTRAINT ALL;');
                $handle->bindValue(':id', $teacherId);
                $handle->execute();
            }
        }

    }


}