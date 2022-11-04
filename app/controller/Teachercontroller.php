<?php
    include_once("BaseController.php");

    if(isset($_REQUEST['save']))
    {
        store();
    }

    function index()
    {
        $s = "SELECT id, name, teacher_id,designation, department, email, phone, address,password, join_semester FROM teachers  order by teacher_id";

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
        $teacher_id = $_REQUEST['teacher_id'];
        $name = $_REQUEST['name'];
        $designation = $_REQUEST['designation'];
        $department = $_REQUEST['department'];
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
        $address = $_REQUEST['address'];
        $password = $_REQUEST['password'];
        $join_semester = $_REQUEST['join_semester'];

        

        $s = "INSERT INTO `teachers`(`id`, `teacher_id`, `name`,`designation`, `department`, `email`, `phone`,`address`,`password`,`join_semester`) VALUES (NULL,'$teacher_id', '$name','$designation','$department','$email','$phone','$address','$password','$join_semester')";
        $t = executeQuery($s);

        print_r($t);
    }

    function show()
    {
    
        $id = $_REQUEST['id'];
        $s = "select * from teachers where id = " .$id;
        $jsonData = readQuery($s);

        $data = json_decode($jsonData);
        return $data;

    }

    function delete()
    {

    }