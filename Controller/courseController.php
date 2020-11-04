<?php




//if button on overview is clicked show all courses
    $showClasses = new Handler();
    $classes = $showClasses->getClasses();
    //var_dump($classes);

    $classTeacher = $showClasses->getTeachers();
    //var_dump($classTeacher);

    $studentsFromClass = $showClasses->getStudents();
    //var_dump($studentsFromClass);



    if(isset($_GET['course'])){
        $students = $showClasses->getStudentsCourse($_GET['course']);
        var_dump($students);
        echo "lololol";
        var_dump($_GET['course']);
    }

require "View/courseView.php";