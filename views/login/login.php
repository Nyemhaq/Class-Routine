<?php
    include_once('../config.php');
    include_once(CON_FRONT . 'LoginController.php');
?>

<!DOCTYPE html>
<html>

<head>
  <title>login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="shortcut icon" href="../../../resources/image/2.gif" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
</head>

<body style="background-color:#E8E8E8">

  <div style="padding-left:33%;padding-right:33%;padding-top:5%;text-align:left">
    <form action="" method="post">

      <div class="container" style="background-color:white">
        <div style="display:flex">
          <h5 style="font-family: SourceSansPro,Helvetica,Arial,sans-serif;">BANGLADESH ARMY INTERNATIONAL UNIVERSITY OF
            SCIENCE & TECHNOLOGY</h5>
          <img src="../../resources/image/2.gif" style="height:75px;padding-left:10px" alt="logo">
        </div>
        <h6 style="font-size:14px;margin-top:-10px">- Knowledge, Wisdom and Technology</h6>
        <br>

        <h5 style="text-align:center">Sign in with your organizational id number.</h5>
        <input type="text" placeholder="Enter Username" name="username" required style="border-color:green">
        <input type="password" placeholder="Enter Password" name="password" required style="border-color:green">
        
        <button style="background-color:#003300" type="submit" name="submit" id="" value="LOGIN">Login</button>
        
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>

      <div class="container" style="background-color:white;">
        <button type="button" class="cancelbtn" style="border-radius:15px;background-color:red">Cancel</button>
        <span class="psw">Forgot <a href="../Forget/index.php">password?</a></span>
      </div>
    </form>
  </div>

  <footer style="text-align:center;margin-top:5%;margin-bottom:5%;">© Created By Nyem & Sakib @2022</footer>
  <style>
    h5 {
      font-size: 15px;
      padding-right: 10px;
      text-align: left;
    }
  </style>

</body>

</html>