<?php
    include_once('../config.php');
    include_once(CON_FRONT . 'CancelController.php');
    $cancel = index();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbox</title>
    <link rel="shortcut icon" href="../../../resources/image/2222.png" type="image/x-icon">
    <!-- links -->
    <?php include_once('../layout/links.php'); ?>
    <!-- end of links -->
</head>

<body>
    <!-- navBar -->
    <?php include_once('../layout/navBar/navBar.php'); ?>
    <!-- end of navBar -->
    <div class="container-fluid mt-3">
        <table class="table table-hover table-dark table-striped">
            <thead>
            <tr> 
                <!-- <th>ID</th> -->
                <th>DATE</th>
                <th>COURE CODE</th>
                <th>COURSE TITLE</th>
                <th>DESCRIPTION</th>
            </tr>
            </thead>
            <tbody>
                <?php 
            foreach($cancel as $c)
            {
                ?>
            <tr style="color:red">
                <td><?= $c->date ?></td> 
                <td><?= $c->course_code ?></td>
                <td><?= $c->course_title ?></td>
                <td><?= $c->description ?></td>

                <!-- <td><a class="btn btn-sm btn-warning float" href="show.php?id=<?= $s->id ?>">Details</a></td> -->
           
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