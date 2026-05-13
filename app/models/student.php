<?php

require_once __DIR__ . "/../config/database.php";

class Student
{
    public function getAllStudents()
    {
        $sql = "SELECT * FROM students";
        return $GLOBALS['conn']->query($sql);
    }


    public function createStudent(string $name, string $email, int $age)
    {
        $sql = "INSERT INTO students (name, email, age) VALUES ('$name', '$email', '$age')";
        return $GLOBALS['conn']->query($sql);
    }


    public function getStudentById(int $id)
    {
        $sql = "SELECT * FROM students WHERE id = $id";
        return $GLOBALS['conn']->query($sql)->fetch_assoc();
    }


    public function updateStudent(int $id, string $name, string $email, int $age)
    {
        $sql = "UPDATE students SET name='$name', email='$email', age='$age' WHERE id=$id";
        return $GLOBALS['conn']->query($sql);
    }


    public function deleteStudent(int $id)
    {
        $sql = "DELETE FROM students WHERE id=$id";
        return $GLOBALS['conn']->query($sql);
    }
}
