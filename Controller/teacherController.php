<?php


$showTeachers = new Handler();
$teachers = $showTeachers->getTeachers();
$classes=$showTeachers->getClasses();

if (isset($_POST['delete'])) {

    $showTeachers->deleteTeacher($_POST['id']);
}


if (isset($_GET['teacher'])) {
    $students = $showTeachers->getStudentsCourse($_GET['teacher']);
    $classname = $showTeachers->getClassName($_GET['teacher']);
    //var_dump($students);
}



if (isset($_POST['submit'])) {
    $showTeachers->addTeacher($_POST['name'], $_POST['email'], $_POST['course']);
}


require "View/teacherView.php";

