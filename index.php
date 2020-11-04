<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

session_start();
require 'Model/Handler.php';
require 'Model/Course.php';
require 'Model/Student.php';
require 'Model/Teacher.php';
require 'View/body.php';
require 'View/includes/header.php';



if(isset($_GET['page']) && $_GET['page'] === 'students'){
    require 'Controller/studentController.php';
}

if(isset($_GET['page']) && $_GET['page'] === 'teachers'){
    require 'Controller/teacherController.php';
}

if(isset($_GET['page']) && $_GET['page'] === 'classes'){
    require 'Controller/courseController.php';

} else {
    require 'View/landingpage.php';
}

