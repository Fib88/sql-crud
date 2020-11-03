<?php
<<<<<<< HEAD
require "View/teacherView.php";
=======
require "View/studentView.php";
require_once "Model/Handler.php";

//if student button is clicked load up and show teachers
if(isset($_POST["teachers"])){
    $showTeachers = new Handler();
    $teachers = $showTeachers->getTeachers();
    var_dump($teachers);

}
>>>>>>> 0b5786a8aeba7a65b64ab97b112a3c810c360eaf
