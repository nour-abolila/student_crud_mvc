<?php

require_once __DIR__ . "/../models/student.php";

class StudentController
{

    private $student;

    public function __construct()
    {
        $this->student = new Student();
    }


    public function index()
    {
        $students = $this->student->getAllStudents();
        include __DIR__ . "/../views/students/Home.php";
    }


    public function create()
    {
        include __DIR__ . "/../views/students/create.php";
    }


    public function store()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $this->student->createStudent($name, $email, $age);
        header("Location: index.php");
    }


    public function edit()
    {
        $id = $_GET['id'];
        $student = $this->student->getStudentById($id);
        include __DIR__ . "/../views/students/edit.php";
    }


    public function update()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $this->student->updateStudent($id, $name, $email, $age);
        header("Location: index.php");
    }


    public function delete()
    {
        $id = $_GET['id'];
        $this->student->deleteStudent($id);
        header("Location: index.php");
    }
}
