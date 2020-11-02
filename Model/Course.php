<?php


class Course
{/** @var array Student[] */

 private array $students;
 private int $id;
 private string $location;
 private string $name;
 private string $teacherName;


    public function __construct(array $students, $id, $location, $name, $teacherName)
    {
        $this->students = $students;
        $this->id = $id;
        $this->location = $location;
        $this->name = $name;
        $this->teacherName = $teacherName;
    }


    public function getStudents()
    {
        return $this->students;
    }


    public function getId()
    {
        return $this->id;
    }


    public function getLocation()
    {
        return $this->location;
    }


    public function getName()
    {
        return $this->name;
    }


    public function getTeacherName()
    {
        return $this->teacherName;
    }



}