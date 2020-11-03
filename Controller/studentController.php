<?php

//if button on overview is clicked load up and show all students
if(isset($_POST["students"])){
    $showStudents = new Handler();
    $students = $showStudents->getStudents();
}





require "View/studentView.php";




