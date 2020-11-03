<?php


$showTeachers = new Handler();
$teachers = $showTeachers->getTeachers();


$showTeachers = new Handler();
$teachers = $showTeachers->getTeachers();
var_dump($teachers);


if (isset($_POST['delete'])) {
    $showTeachers->deleteTeacher($_POST['id']);

}

require "View/teacherView.php";