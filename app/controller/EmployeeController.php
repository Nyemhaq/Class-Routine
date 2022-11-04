<?php
    include_once("BaseController.php");

    if(isset($_REQUEST['save']))
    {
        store();
    }

    function index()
    {
        $s = "select * from employees";

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
        $name =  $_REQUEST['name'];
        $phone = $_REQUEST['phone'];
        $email = $_REQUEST['email'];
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        $s = "INSERT INTO `employees`(`id`, `name`, `phone`, `email`, `username`, `password`) VALUES (NULL,'$name','$phone','$email','$username','$password')";
        $r = executeQuery($s);

        print_r($r);
    }

    function show()
    {

    }

    function delete()
    {

    }