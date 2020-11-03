<?php

require "View/teacherView.php";



//if student button is clicked load up and show teachers
if(isset($_POST["teachers"])){
    $showTeachers = new Handler();
    $teachers = $showTeachers->getTeachers();
    var_dump($teachers);

}

