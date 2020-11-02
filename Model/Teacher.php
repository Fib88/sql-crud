<?php


class Teacher extends Student
{

    function getStudents($teacherCourse)
    {
        $students = $this->pdo->getStudents();
        $teacherStudents = array();
        foreach ($students as $student) {
            if ($student['class_id'] == $teacherCourse) {
                array_push($teacherStudents, $student);
            }
        }
        return $teacherStudents;

    }

    public function updateTeacher($id,$name, $email, $classeName)
    {
        $classes = $this->pdo->getClasses();
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