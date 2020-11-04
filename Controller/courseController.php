<?php


//if button on overview is clicked show all courses
$showClasses = new Handler();
$classes = $showClasses->getClasses();


$classTeacher = $showClasses->getTeachers();


$studentsFromClass = $showClasses->getStudents();

if (isset($_GET['course'])) {
    $students = $showClasses->getStudentsCourse($_GET['course']);

}


require "View/courseView.php";