<?php
<<<<<<< HEAD
=======

require "View/teacherView.php";
require "View/studentView.php";
require_once "Model/Handler.php";
>>>>>>> b0a749e04bd3679314df9dfd83ce9976b10015c0

if(isset($_POST["teachers"])){
    $showTeachers = new Handler();
    $teachers = $showTeachers->getTeachers();
    var_dump($teachers);

}
<<<<<<< HEAD

=======
>>>>>>> b0a749e04bd3679314df9dfd83ce9976b10015c0
