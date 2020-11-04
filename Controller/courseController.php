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

if(isset($_POST['iupdate'])){
    $selectedClass = $showClasses->getClasses($_POST['iupdate']);
    $updatedClass = [
        'name'=> $selectedClass['0']['name'],
        'location'=> $selectedClass['0']['location'],
        'id'=> $selectedClass['id']
    ];
}

require "View/courseView.php";