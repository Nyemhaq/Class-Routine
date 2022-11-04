<?php
    include_once('../config.php');
    include_once(CON_FRONT . 'studentController.php');
    $students = show();
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

  <!-- content -->
  <div class="container-fluid mt-3">
    <!-- edititable -->
    <div class="card">
      <div class="card-header">
        <h4><?= $students[0]->student_id ?></h4>
        <h4><b><?= $students[0]->name ?></b></h4>
        <h4><?= $students[0]->email ?></h4>
        <a href="tel:<?= $students[0]->phone ?>" class="btn btn-success"><?= $students[0]->phone ?></a>
        <h4><?= $students[0]->admission_semester ?></h4>
        <h4><?= $students[0]->address ?></h4>
       
      </div>
    </div>
  </div>
  <a class="btn btn-warning float-start" style="margin-left:12px; margin-top:12px;" href="../../views/students/index.php">Back to the list</a>



  <footer style="padding-left: 45%;margin-top:120px;">Created by Nyem & Sakib @2022</footer>
</body>

</html>