<?php

$showTeachers = new Handler();
$teachers = $showTeachers->getTeachers();

if(isset($_POST["teachers"])) {
    $showTeachers = new Handler();
    $teachers = $showTeachers->getTeachers();
    var_dump($teachers);
}


if (isset($_GET['delete'])) {
  $showTeachers->deleteTeacher($_GET['delete']);
}

require "View/teacherView.php";