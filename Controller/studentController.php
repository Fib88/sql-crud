<?php

//if button on overview is clicked load up and show all students

$handler = new Handler();
$students = $handler->getStudents();
$classes = $handler->getClasses();
if (isset($_GET["student"])) {
    $selectedStudentId = $_GET["student"];
    $studentInfo = $handler->getStudent($selectedStudentId);
    $studentsClass = $handler->getClassName($studentInfo[0]["classes_id"]);
    $teacherFromCourse = $handler->getTeacherFromCourse($studentsClass);
}

if (isset($_POST['delete'])) {
    $handler->deleteStudent($_POST['id']);
}

if (isset($_POST['add']) && $_POST['add'] == "Register") {
    $handler->addStudent($_POST['name'], $_POST['email'], $_POST['course']);
}

$updatedStudent = [
    'name' => '',
    'email' => '',
    'id' => '',
];

if (isset($_POST['idupdate'])) {
    $selectedStudent =  $handler->getStudent($_POST['idupdate']);
    $updatedStudent = [
        'name' => $selectedStudent[0]['name'],
        'email' => $selectedStudent[0]['email'],
        'id' => $_POST['idupdate'],
    ];
}

if (isset($_POST['add']) && $_POST['add'] == "Update") {
    $handler->updateStudent($_POST['id'], $_POST['name'], $_POST['email'], $_POST['course']);
}


require "View/studentView.php";




