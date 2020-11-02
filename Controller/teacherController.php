<?php

class TeacherController
{
    public function render(array $GET, array $POST)

    {

//-----> get teachers
        $pdo = new Handler();
        $Teachers=$pdo->getTeachers();


    }

}