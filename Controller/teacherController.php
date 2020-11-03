<?php

require "View/teacherView.php";


if(isset($_POST["teachers"])){
$showTeachers = new Handler();
$teachers = $showTeachers->getTeachers();
var_dump($teachers);

}
