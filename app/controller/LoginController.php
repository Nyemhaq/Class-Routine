<?php
    include_once("BaseController.php");

    if(isset($_REQUEST['submit']))
    {
        login();
    }
    function login()
    {
        $username =  $_REQUEST['username'];
        $password =  $_REQUEST['password'];
        //  print_r($username . ' ' . $password);
        // $s="select * from admin where username='$username' and password='$password'";
        $s="SELECT * FROM login  WHERE uni_id = '$username'   and password = '$password'";
        $jasonData= readQuery($s);
        $data=json_decode($jasonData);
        // print_r($data);
        if(count($data)>0)
        {
            $_SESSION['uni_id'] = $data[0]->uni_id;
            $_SESSION['user_name'] = $data[0]->name;
            $_SESSION['user_type'] = $data[0]->des;
            $_SESSION['user_designation'] = $data[0]->designation;
            if($data[0]->des == "std")
            {
                header('Location: ../dashboard/dashboard-student.php');
            }
            if($data[0]->des == "tea")
            {
                header('Location: ../dashboard/dashboard-teacher.php');
            }
            return;
        }


    
    }
?>

    