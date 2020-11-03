<?php


class Teacher extends Student
{
    public function DeleteFromId($id)
    {
        $pdo = openConnection();
        foreach ($this->getStudents() as $student) {
            if ($student->getId() == $id) {
                $handle = $pdo->prepare('DELETE FROM student WHERE id = :id');
                $handle->bindValue(':id', $id);
                $handle->execute();
            }
        }
    }

}