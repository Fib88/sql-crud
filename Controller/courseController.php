<?php




//if button on overview is clicked show all courses
    $showClasses = new Handler();
    $classes = $showClasses->getClasses();
    var_dump($classes);

require "View/courseView.php";