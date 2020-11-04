<?php

//if button on overview is clicked load up and show all students

    $showStudents = new Handler();
    $students = $showStudents->getStudents();
    if (isset($_GET["student"])) {
        $selectedStudentId = $_GET["student"];
        $studentInfo = $showStudents->getStudent($selectedStudentId);
        $studentsclass = $showStudents->getClassName($studentInfo[0]["classes_id"]);
        var_dump($studentsclass);
        //$studentsTeacher = $showStudents->getTeacherCourse()
    }
require "View/studentView.php";




