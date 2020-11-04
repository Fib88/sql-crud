<?php

//if button on overview is clicked load up and show all students

    $showStudents = new Handler();
    $students = $showStudents->getStudents();
    if (isset($_GET["student"])) {
        $selectedStudentId = $_GET["student"];
        $studentInfo = $showStudents->getStudent($selectedStudentId);
        var_dump($studentInfo);
    }
require "View/studentView.php";




