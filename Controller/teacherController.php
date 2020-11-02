<?php
<<<<<<< HEAD
require "View/teacherView.php";
=======

class TeacherController
{
    public function render(array $GET, array $POST)

    {

//-----> get teachers
        $pdo = new Handler();
        $Teachers=$pdo->getTeachers();




    }

}
>>>>>>> c7042408304cd3a41b954317e716d5c90cf94754
