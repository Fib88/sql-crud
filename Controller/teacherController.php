<?php

require "View/teacherView.php";
require "View/studentView.php";
require_once "Model/Handler.php";

if(isset($_POST["teachers"])){
$showTeachers = new Handler();
$teachers = $showTeachers->getTeachers();
var_dump($teachers);

}
