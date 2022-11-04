<?php
    include_once("BaseController.php");

    if(isset($_REQUEST['save']))
    {
        store();
    }

    function index()
    {
        $s = "SELECT es.*,s.*,rs.*,st.student_id student_uni_id FROM `enroll_course_students` es, schedule s, routine_details rs , students st WHERE es.enroll_course_teacher_id = s.enroll_course_teacher_id and es.enroll_course_teacher_id = rs.id and es.student_id = st.id and st.student_id = " . $_SESSION['uni_id'] . " order by start_time;";

        $jsonData = readQuery($s);

        // print_r($jsonData);

        $emp = json_decode($jsonData);

        // echo "<br>";
        // print_r($emp);

        return $emp;
    }
    function courses()
    {
        $s = "SELECT es.*,s.*,rs.*,st.student_id student_uni_id FROM `enroll_course_students` es, schedule s, routine_details rs , students st WHERE es.enroll_course_teacher_id = s.enroll_course_teacher_id and es.enroll_course_teacher_id = rs.id and es.student_id = st.id and st.student_id = " . $_SESSION['uni_id'] . "  GROUP BY course_id;";

        $jsonData = readQuery($s);

        // print_r($jsonData);

        $emp = json_decode($jsonData);

        // echo "<br>";
        // print_r($emp);

        return $emp;
    }
    function teacher_index()
    {
        $s = "SELECT es.*,s.*,rs.* FROM `enroll_course_students` es, schedule s, routine_details rs WHERE es.enroll_course_teacher_id = s.enroll_course_teacher_id and es.enroll_course_teacher_id = rs.id  and rs.techer_uni_id = " . $_SESSION['uni_id'] . " order by start_time;";

        $jsonData = readQuery($s);

        // print_r($jsonData);

        $emp = json_decode($jsonData);

        // echo "<br>";
        // print_r($emp);

        return $emp;
    }
    function teacher_courses()
    {
        $s = "SELECT es.*,s.*,rs.* FROM `enroll_course_students` es, schedule s, routine_details rs WHERE es.enroll_course_teacher_id = s.enroll_course_teacher_id and es.enroll_course_teacher_id = rs.id  and rs.techer_uni_id = " . $_SESSION['uni_id'] . "  GROUP BY course_id;";

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
        $enroll_course_teacher_id = $_REQUEST['enroll_course_teacher_id'];
        $day = $_REQUEST['day'];
        $start_time = $_REQUEST['start_time'];
        $end_time = $_REQUEST['end_time'];

        

        $s = "INSERT INTO `courses`(`id`, `enroll_course_teacher_id`, `day`,`start_time`, `end_time`) VALUES (NULL,'$enroll_course_teacher_id','$day','$start_time','$end_time')";
        $s = executeQuery($s);

        print_r($s);
    }

    function show()
    {
        // $year = $_REQUEST['year'];
        $s = "select * from result where year";

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