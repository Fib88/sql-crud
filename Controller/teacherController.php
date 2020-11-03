<?php


$showTeachers = new Handler();
$teachers = $showTeachers->getTeachers();


if (isset($_GET['delete'])) {
  $showTeachers->deleteTeacher($_GET['delete']);
}

require "View/teacherView.php";