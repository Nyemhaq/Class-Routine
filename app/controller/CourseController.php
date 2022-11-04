<?php
    include_once("BaseController.php");

    if(isset($_REQUEST['save']))
    {
        store();
    }

    function index()
    {
        $s = "SELECT id, course_code, course_title, credit, department, per_class_duration, total_duration FROM courses  order by course_code";

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
        $course_code = $_REQUEST['course_code'];
        $course_title = $_REQUEST['course_title'];
        $credit = $_REQUEST['credit'];
        $department = $_REQUEST['department'];
        $per_class_duration = $_REQUEST['per_class_duration'];
        $total_duration = $_REQUEST['total_duration'];
        

        $s = "INSERT INTO `courses`(`id`, `course_code`, `course_title`, `credit`, `department`,`per_class_duration`,`total_duration`) VALUES (NULL,'$course_code','$course_title','$credit','$department','$per_class_duration','$total_duration')";
        $c = executeQuery($s);

        print_r($c);
    }

    function show()
    {
        // $year = $_REQUEST['year'];
        // $s = "select * from result where year=".$year;

        $jsonData = readQuery($s);

        // print_r($jsonData);

        $emp = json_decode($jsonData);

        // echo "<br>";
        // print_r($emp);

        return $emp;
    }

    function delete()
    {

    }