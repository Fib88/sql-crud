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


var_dump($_POST);

if (isset($_POST["students"])) {
    require 'Controller/studentController.php';

}

if (isset($_POST["teachers"])) {
    require 'Controller/teacherController.php';

}
if (isset($_POST["classes"])) {
    require 'Controller/courseController.php';

} else {
    require 'View/landingpage.php';
}

