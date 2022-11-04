<?php
    include_once("BaseController.php");

    if(isset($_REQUEST['save']))
    {
        store();
    }

    function index()
    {
        $s = "SELECT  date, course_code, course_title, description FROM cancel  order by date";

        $jsonData = readQuery($s);

       //print_r($jsonData);

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
        $date =  $_REQUEST['date'];
        $course_code = $_REQUEST['course_code'];
        $course_title = $_REQUEST['course_title'];
        $description = $_REQUEST['description'];
     
        

        $s = "INSERT INTO `cancel`(`date`, `course_code`, `course_title`, `description`) VALUES ('$date','$course_code','$course_title','$description')";
        $c = executeQuery($s);

        //print_r($c);
    }

    function show()
    {
        

        // $jsonData = readQuery($s);

        // $emp = json_decode($jsonData);

        // // echo "<br>";
        // // print_r($emp);

        // return $emp;

    }

    function delete()
    {

    }