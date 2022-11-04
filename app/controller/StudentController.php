<?php
    include_once("BaseController.php");

    if(isset($_REQUEST['save']))
    {
        store();
    }

    function index()
    {
        $s = "SELECT id,name, student_id, department, email, phone, address, password,admission_semester FROM students  order by student_id";

        $jsonData = readQuery($s);

        // print_r($jsonData);

        $emp = json_decode($jsonData);

        // echo "<br>";
        // print_r($emp);

        return $emp;
    }

    function create()
    {
        return "called";
    }

    function store()
    {
        // $id =  $_REQUEST['id'];
        $student_id = $_REQUEST['student_id'];
        $name = $_REQUEST['name'];
        $department = $_REQUEST['department'];
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
        $address = $_REQUEST['address'];
        $password = $_REQUEST['password'];
        $admission_semester = $_REQUEST['admission_semester'];
        // echo $student_id . $name;
        

        $s = "INSERT INTO `students`(`id`, `student_id`, `name`,`department`, `email`, `phone`,`address`,`password`,`admission_semester`) VALUES (NULL,'$student_id','$name','$department','$email','$phone','$address','$password','$admission_semester')";
        $st = executeQuery($s);
        // var_dump($st);
    }

    function show()
    {
        $id = $_REQUEST['id'];
        $s = "select * from students where id = " .$id;
        $jsonData = readQuery($s);

        $data = json_decode($jsonData);
        return $data;
    }

    function delete()
    {

    }