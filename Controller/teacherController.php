<?php


<<<<<<< HEAD
$showTeachers = new Handler();
$teachers = $showTeachers->getTeachers();
=======
if(isset($_POST["teachers"])){
$showTeachers = new Handler();
$teachers = $showTeachers->getTeachers();
var_dump($teachers);
>>>>>>> d462cd3554f69f0166c6532fd02a4273bf125892


if (isset($_GET['delete'])) {
  $showTeachers->deleteTeacher($_GET['delete']);
}

require "View/teacherView.php";