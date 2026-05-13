<?php

require_once __DIR__ . "/../config/database.php";

class Student
{

    public function getAllStudents()
    {
        global $conn;

        $sql = "SELECT * FROM students";
        $result = $conn->query($sql);
        return $result;
    }


    public function createStudent($name, $email, $age)
    {
        global $conn;

        $sql = "INSERT INTO students (name, email, age) VALUES ('$name', '$email', '$age')";
        return $conn->query($sql);
    }


    public function getStudentById($id)
    {
        global $conn;

        $sql = "SELECT * FROM students WHERE id = $id";
        $result = $conn->query($sql);
        return $result->fetch_assoc();
    }


    public function updateStudent($id, $name, $email, $age)
    {
        global $conn;

        $sql = "UPDATE students SET name='$name', email='$email', age='$age' WHERE id=$id";
        return $conn->query($sql);
    }


    public function deleteStudent($id)
    {
        global $conn;

        $sql = "DELETE FROM students WHERE id=$id";
        return $conn->query($sql);
    }
}
