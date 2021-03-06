<?php


$showTeachers = new Handler();
$teachers = $showTeachers->getTeachers();
$classes = $showTeachers->getClasses();

if (isset($_POST['delete'])) {

    $showTeachers->deleteTeacher($_POST['id']);
}


if (isset($_GET['teacher'])) {
    $students = $showTeachers->getStudentsCourse($_GET['teacher']);
    $classname = $showTeachers->getClassName($_GET['teacher']);
}

$updatedTeacher = [
    'name' => '',
    'email' => '',
    'id' => '',
];

if (isset($_POST['idupdate'])) {
    $selectedTeacher = $showTeachers->getTeacher($_POST['idupdate']);
    $updatedTeacher = [
        'name' => $selectedTeacher[0]['name'],
        'email' => $selectedTeacher[0]['email'],
        'id' => $_POST['idupdate'],
    ];
}


if (isset($_POST['add']) && $_POST['add'] == "Register") {
    $showTeachers->addTeacher($_POST['name'], $_POST['email'], $_POST['course']);
}

if (isset($_POST['add']) && $_POST['add'] == "Update") {
    $showTeachers->updateTeacher($_POST['id'], $_POST['name'], $_POST['email'], $_POST['course']);
}


require "View/teacherView.php";

