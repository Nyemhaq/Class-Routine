<?php
    include_once('../config.php');
    include_once(CON_FRONT . '../../../app/controller/studentController.php');
    $students = index();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="shortcut icon" href="../../../resources/image/3.jpg" type="image/x-icon">
    <!-- links -->
    <?php include_once('../layout/links.php'); ?>
    <!-- end of links -->
</head>

<body>
    <!-- navBar -->
    <?php include_once('../layout/navBar/navBar.php'); ?>
    <!-- end of navBar -->
    <div class="container-fluid mt-3">
    <h1 style="text-align: center;background-color:#e6ac00;padding-top:10px;padding-bottom:15px">STUDENTS OF 4-II</h1>
        <table class="table table-hover table-dark table-striped">
            <thead>
            <tr> 
                <!-- <th>ID</th> -->
                <th>STUDENT ID</th>
                <th>NAME</th>
                <th>DEPARTMENT</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                <?php 
            foreach($students as $s)
            {
                ?>
            <tr>
                <!-- <td><?= $s->id ?></td> -->
                <td><?= $s->student_id ?></td>
                <td><?= $s->name ?></td>
                <td><?= $s->department ?></td>

                <td><a class="btn btn-sm btn-warning float" href="show.php?id=<?= $s->id ?>">Details</a></td>
           
            </tr>
            <?php
            }
        ?>
            </tbody>
        </table>

    </div>
    <footer style="padding-left: 45%;margin-top:120px;">Created by Nyem & Sakib @2022</footer>
</body>

</html>