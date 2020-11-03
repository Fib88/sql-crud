<?php


$showTeachers = new Handler();
$teachers = $showTeachers->getTeachers();



if (isset($_POST['delete'])) {
  $showTeachers->deleteTeacher($_POST['id']);
}

if (isset($_GET['teacher'])) {
   $students= $showTeachers->getStudentsCourse($_GET['teacher']);
   var_dump($students);
}


require "View/teacherView.php";

