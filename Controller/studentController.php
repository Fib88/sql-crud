<?php

//if button on overview is clicked load up and show all students

    $handler = new Handler();
    $students = $handler->getStudents();
    if (isset($_GET["student"])) {
        $selectedStudentId = $_GET["student"];
        $studentInfo = $handler->getStudent($selectedStudentId);
        $studentsClass = $handler->getClassName($studentInfo[0]["classes_id"]);
        $teacherFromCourse = $handler->getTeacherFromCourse($studentsClass);
    }
require "View/studentView.php";




