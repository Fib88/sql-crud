<?php
require "View/courseView.php";



//if button on overview is clicked show all courses
if(isset($_POST["classes"])){
    $showClasses = new Handler();
    $classes = $showClasses->getClasses();
    var_dump($classes);
}
