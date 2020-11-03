<?php


$showTeachers = new Handler();
$teachers = $showTeachers->getTeachers();



if (isset($_POST['delete'])) {
<<<<<<< HEAD
  $showTeachers->deleteTeacher($_POST['id']);
}
=======
    $showTeachers->deleteTeacher($_POST['id']);
>>>>>>> 0123a8e01b6e7ce0dbad6c3af1ced5ecd6ed3f8d

if (isset($_GET['teacher'])) {
   $students= $showTeachers->getStudentsCourse($_GET['teacher']);
   var_dump($students);
}


require "View/teacherView.php";

