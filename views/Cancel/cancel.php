<?php
    include_once('../config.php');
    include_once(CON_FRONT . '../../app/controller/CancelController.php');;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancel class</title>
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
    <form action="" method="POST" class="form-control" style="width:50%;margin-left:25%;padding-left:5%;padding-right:5%;" enctype="multipart/form-data">
        <label for="date">DATE:</label>
        <input type="date" name="date" class="form-control" id="date" placeholder="YYYY-MM-DD"style="background-color:bbd0c9" required>

        <label for="course_code">COURSE CODE:</label>
        <input type="course_code" name="course_code" class="form-control" id="" placeholder="Course CODE"style="background-color:bbd0c9" required>

        <label for="course_title">COURSE TITLE:</label>
        <input type="course_title" name="course_title" class="form-control" id="" placeholder="COURSE TITLE"style="background-color:bbd0c9" required>
    
        <label for="description">DESCRIPTION :</label>
        <input type="description" name="description" class="form-control" id="" placeholder="DESCRIPTION"style="background-color:bbd0c9" required>
        <br>
    <!-- <label for="course_code">Course Code:</label> -->
        <!-- <br>
<select name="course_code" id="course_code" style="width:100%;padding:6px">
  <option value="">-Select an option-</option> 
  <option value="">CSE-410</option>
  <option value="">CSE-411</option>
  <option value="">CSE-412</option>
  <option value="">CSE-413</option>
  <option value="">CSE-414</option>
  <option value="">CSE-415</option>
  <option value="">CSE-417</option>
  <option value="">CSE-445</option>
  <option value="">CSE-446</option> 
</select>
<br>
<label for="course_title">Course Code:</label>
<br>
<select name="course_title" id="course_title" style="width:100%;padding:6px">
  <option value="">-Select an option-</option> 
  <option value="Software Development for Web App">Software Development for Web App</option>
  <option value="VLSI Design">VLSI Design</option>
  <option value="VLSI Design Sessonal">VLSI Design Sessonal</option>
  <option value="Computer Graphics">Computer Graphics</option>
  <option value="Computer Graphics Sessonal">Computer Graphics Sessonal</option>
  <option value="Enginnering Ethics & Management">Enginnering Ethics & Management</option>
  <option value="Pattern Recognition">Pattern Recognition</option>
  <option value="Pattern Recognition Sessonal">Pattern Recognition Sessonal</option>
  <option value="Financial & Managerial Accounting">Financial & Managerial Accounting</option> 
</select>
<br> -->

        <a href="..//Cancel/show.php" class="btn btn-warning">BACK TO LIST</a>
        <input class="btn btn-success float-end" type="submit" name="save" id="" value="save" class="float-right"
            class="rounded-circle">
        <br>
        <br>
    </form>

    </form>
</body>