<?php


//if button on overview is clicked show all courses
$showClasses = new Handler();
$classes = $showClasses->getClasses();
$classTeacher = $showClasses->getTeachers();
$studentsFromClass = $showClasses->getStudents();


if (isset($_GET['course'])) {
    $students = $showClasses->getStudentsCourse($_GET['course']);

}

if (isset($_GET['course'])){
    $teacherShow = $showClasses->getTeacherCourse($_GET['course']);
}

$updatedClass = [
    'name' => '',
    'location' => '',
    'id' => '',
];

if(isset($_POST['idupdate'])){
    $selectedClass = $showClasses->getClass($_POST['idupdate']);
    $updatedClass = [
        'name'=> $selectedClass[0]['name'],
        'location'=> $selectedClass[0]['location'],
        'id'=> $selectedClass[0]['id']
    ];
    var_dump($selectedClass);
}

if(isset($_POST['delete'])){
    $showClasses->deleteClass($_POST['id']);
}

if (isset($_POST['add']) && $_POST['add'] == "Register"){
    $showClasses->addClass($_POST['name'],$_POST['location']);
}

if (isset($_POST['add']) && $_POST['add'] == "Update"){
    $showClasses->updateClasses($_POST['id'], $_POST['name'], $_POST['location']);
}


require "View/courseView.php";