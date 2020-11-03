<?php




//if button on overview is clicked show all courses
    $showClasses = new Handler();
    $classes = $showClasses->getClasses();
    var_dump($classes);

    $classTeacher = $showClasses->getTeachers();
    var_dump($classTeacher);

    $studentsFromClass = $showClasses->getStudents();
    var_dump($studentsFromClass);

require "View/courseView.php";