<?php
    include_once('../config.php');
    include_once(CON_FRONT . '../../../app/controller/ScheduleController.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routine</title>
    <link rel="shortcut icon" href="../../../resources/image/4.png" type="image/x-icon">
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
        <label for="name">ENROLL COURSE TEACHER ID:</label>
        <input type="number" name="enroll_course_teacher_id" class="form-control" id="" placeholder="ENROLL COURSE TEACHER ID"style="background-color:bbd0c9">
        <label for="name">DAY:</label>
        <input type="name" name="day" class="form-control" id="" placeholder="DAY"style="background-color:bbd0c9">
        <label for="name">START TIME:</label>
        <input type="name" name="start_time" class="form-control" id="" placeholder="HOUR-MIN-SEC"style="background-color:bbd0c9">
        <label for="name">END TIME:</label>
        <input type="name" name="end_time" class="form-control" id="" placeholder="HOUR-MIN-SEC"style="background-color:bbd0c9">
        <br>

        <a href="../../../views/admin/routine/index.php" class="btn btn-warning">BACK TO LIST</a>
        <input class="btn btn-success float-end" type="submit" name="save" id="" value="save" class="float-right"
            class="rounded-circle">
        <br>
        <br>
    </form>

    </form>
</body>