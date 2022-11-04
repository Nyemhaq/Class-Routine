<?php
    include_once('../config.php');
    include_once(CON_FRONT . '../../../app/controller/CourseController.php');;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Courses</title>
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

    <!-- content -->
    <form action="" method="POST" class="card-body" style="width:50%;margin-left:25%;padding-left:5%;padding-right:5%;" enctype="multipart/form-data">
        <label for="name">COURSE CODE:</label>
        <input type="number" name="course_code" class="form-control" id="" placeholder="COURSE CODE"style="background-color:bbd0c9">
        <label for="name">COURSE TITLE:</label>
        <input type="name" name="course_title" class="form-control" id="" placeholder="COURSE TITLE"style="background-color:bbd0c9">
        <label for="name">CREDIT:</label>
        <input type="name" name="credit" class="form-control" id="" placeholder="CREDIT"style="background-color:bbd0c9">
        <label for="name">TOTAL DURATION:</label>
        <input type="name" name="total_duration" class="form-control" id="" placeholder="TOTAL DURATION"style="background-color:bbd0c9">
        <label for="name">DEPARTMENT:</label>
        <input type="name" name="department" class="form-control" id="" placeholder="DEPARTMENT"style="background-color:bbd0c9">
        <label for="phone">PER CLASS DURATION:</label>
        <input type="name" name="per_class_duration" class="form-control" id="" placeholder="PER CLASS DURATION"style="background-color:bbd0c9">
        <br>

        <a href="../../../views/admin/courses/courses.php" class="btn btn-warning">BACK TO LIST</a>
        <input class="btn btn-success float-end" type="submit" name="save" id="" value="save" class="float-right"
            class="rounded-circle">
        <br>
        <br>
    </form>

    </form>
</body>