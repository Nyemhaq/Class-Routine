<?php
    include_once('../config.php');
    include_once(CON_FRONT . 'CourseController.php');
    $courses = index();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course</title>
    <link rel="shortcut icon" href="../../../resources/image/2222.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <!-- links -->
    <?php include_once('../layout/links.php'); ?>
    <!-- end of links -->
</head>

<body>
     <!-- navBar -->
     <?php include_once('../layout/navBar/navBar.php'); ?>
    <!-- end of navBar -->  
    <div class="container-fluid mt-3">
        <h1 style="text-align: center;background-color:#e6ac00;padding-top:10px;padding-bottom:15px">Courses of 8th Semester</h1>
        <table class="table table-hover table-dark table-striped">
            <thead>
            <tr> 
                <th>Course Code</th>
                <th>Course Title</th>
                <th>Credit</th>
                <th>Total Duration (min)</th>
                <th>Department</th>
                <th>Per Class Duration (min)</th>
                
            </tr>
            </thead>
            <tbody>
                <?php 
            foreach($courses as $c)
            {
                ?>
            <tr>
                <td><?= $c->course_code ?></td>
                <td><?= $c->course_title ?></td>
                <td><?= $c->credit ?></td>
                <td><?= $c->total_duration ?></td>
                <td><?= $c->department ?></td>
                <td><?= $c->per_class_duration ?></td>
           
            </tr>
            <?php
            }
        ?>
            </tbody>
        </table>


    </div>
<footer style="text-align:center;margin-top:5%;margin-bottom:5%;">© Created By Nyem & Sakib @2022</footer>
</body>

</html>