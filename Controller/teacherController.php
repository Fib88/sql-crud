<?php
require "View/studentView.php";
require_once "Model/Handler.php";

//if student button is clicked load up and show teachers
if(isset($_POST["teachers"])){
    $showTeachers = new Handler();
    $teachers = $showTeachers->getTeachers();
    var_dump($teachers);

}