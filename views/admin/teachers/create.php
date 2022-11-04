<?php
    include_once('../config.php');
    include_once(CON_FRONT . '../../../app/controller/TeacherController.php');
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Teacher</title>
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
        <label for="teacher_id">TEACHER ID:</label>
        <input type="number" name="teacher_id" class="form-control" id="" placeholder="ID"style="background-color:bbd0c9">
        <label for="name">Name:</label>
        <input type="name" name="name" class="form-control" id="" placeholder="Name"style="background-color:bbd0c9">
        <label for="name">Designation:</label>
        <input type="name" name="designation" class="form-control" id="" placeholder="Desigantion"style="background-color:bbd0c9">
        <label for="name">DEPARTMENT:</label>
        <input type="name" name="department" class="form-control" id="" placeholder="Department"style="background-color:bbd0c9">
        <label for="name">EMAIL:</label>
        <input type="name" name="email" class="form-control" id="" placeholder="Email"style="background-color:bbd0c9">
        <label for="phone">PHONE:</label>
        <input type="phone" name="phone" class="form-control" id="" placeholder="+8801XXXXXXXXX"style="background-color:bbd0c9">
        <label for="name">Address:</label>
        <input type="name" name="address" class="form-control" id="" placeholder="Address"style="background-color:bbd0c9">
        <label for="password">PASSWORD:</label>
        <input type="password" name="password" class="form-control" id="" placeholder="Password"style="background-color:bbd0c9">
        <label for="name">JOIN SEMESTER:</label>
        <input type="name" name="join_semester" class="form-control" id="" placeholder="JOIN SEMESTER"style="background-color:bbd0c9">
        <br>

        <a href="../../../views/admin/teachers/index.php" class="btn btn-warning">BACK TO LIST</a>
        <input class="btn btn-success float-end" type="submit" name="save" id="" value="save" class="float-right"
            class="rounded-circle">
        <br>
        <br>
    </form>

    </form>
</body>