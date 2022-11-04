<?php
    include_once('../config.php');
    include_once(CON_FRONT . 'ScheduleController.php');
    $schedule = index();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <link rel="shortcut icon" href="../../../resources/image/3.jpg" type="image/x-icon">
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
        <h1 style="text-align: center;background-color:#e6ac00;padding-top:10px;padding-bottom:15px">Class Schedule</h1>
        <table class="table table-hover table-dark table-striped">
            <thead>
            <tr> 
                <!-- <th>ID</th> -->
                <th>Day</th>
                <th>Start Time</th>
                <th>End Time</th>
            </tr>
            </thead>
            <tbody>
                <?php 
            foreach($schedule as $s)
            {
                ?>
            <tr>
                <!-- <td><?= $s->id ?></td> -->
                <td><?= $s->day?></td>
                <td><?= $s->start_time ?></td>
                <td><?= $s->end_time ?></td>
            </tr>
            <?php
            }
        ?>
            </tbody>
        </table>
        <a href="href=../../../dashboard/admin.php" class="btn btn-primary" style="margin-left:95.5%">Back</a>
    </div>
<footer style="text-align:center;margin-top:5%;margin-bottom:5%;">© Created By Nyem & Sakib @2022</footer>
</body>

</html>