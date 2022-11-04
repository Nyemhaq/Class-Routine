<?php
    include_once('../config.php');
    include_once(CON_FRONT . 'teacherController.php');
    $teachers = index();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher</title>
    <link rel="shortcut icon" href="../../../resources/image/4.png" type="image/x-icon">
    <!-- links -->
    <?php include_once('../layout/links.php'); ?>
    <!-- end of links -->
</head>

<body>
    <!-- navBar -->
    <?php include_once('../layout/navBar/navBar.php'); ?>
    <!-- end of navBar -->
    <div class="container-fluid mt-3">
    <h1 style="text-align: center;background-color:#e6ac00;padding-top:10px;padding-bottom:15px">TEACHERS LIST</h1>
        <table class="table table-hover table-dark table-striped">
            <thead>
            <tr> 
                <!-- <th>ID</th> -->
                <th>TEACHER ID</th>
                <th>NAME</th>
                <th>DEPARTMENT</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                <?php 
            foreach($teachers as $t)
            {
                ?>
            <tr>
                <!-- <td><?= $t->id ?></td> -->
                <td><?= $t->teacher_id ?></td>
                <td><?= $t->name ?></td>
                <td><?= $t->department ?></td>

                <td><a class="btn btn-sm btn-warning float" href="show.php?id=<?= $t->id ?>">Details</a></td>
           
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