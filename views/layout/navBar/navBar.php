<!DOCTYPE html>
<html>
<head>
    <title>BAIUST</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="shortcut icon" href="../../../resources/image/2.gif" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none;background-color:#2C5E1A" id="leftMenu">
  <button onclick="closeLeftMenu()" class="w3-bar-item w3-button w3-large" style="background-color:orange;border-radius :15px;margin-top:5px;margin-bottom:5px">Close &times;</button>
  <?php 
  if($_SESSION['user_type'] == "std")
  { ?>
    <a href="../dashboard/dashboard-student.php" class="w3-bar-item w3-button" style="background-color:orange;border-radius :15px;margin-bottom:5px">Dashboard</a>
 <?php } 
  if($_SESSION['user_type'] == "tea")
  { ?>
    <a href="../dashboard/dashboard-teacher.php" class="w3-bar-item w3-button" style="background-color:orange;border-radius :15px;margin-bottom:5px">Dashboard</a>
 <?php } ?>
  <!-- <a href="../dashboard/admin.php" class="w3-bar-item w3-button" style="background-color:orange;border-radius :15px;margin-bottom:5px">Dashboard</a> -->
  <a href="../teachers/index.php" class="w3-bar-item w3-button" style="background-color:orange;border-radius :15px;margin-bottom:5px">Teachers List</a>
  <a href="../students/index.php" class="w3-bar-item w3-button" style="background-color:orange;border-radius :15px">Students List</a>
  <a href="../courses/courses.php" class="w3-bar-item w3-button" style="background-color:orange;border-radius :15px;margin-top:5px">Courses</a>
  <a href="../login/logout.php" class="w3-bar-item w3-button" style="background-color:orange;border-radius :15px;margin-top:5px">Log Out</a>
  <a href="../Cancel/show.php" class="notification" style="background-color:orange;border-radius :15px;margin-top:5px"> <span>Inbox</span>
  <span class="badge">3</span></a>
</div>

<div style="display:flex;background-color: #2C5E1A">
<div>
  <button  class=" w3-xxlarge w3-left"  onclick="openLeftMenu()" style="background-color:#2C5E1A;border-radius:5px">&#9776;</button>
</div>
<div style="display:flex;margin-bottom:-100px;margin-top:-10px">
  <img src="../../resources/image/2.gif" alt="" style="height:35%;width:7%;margin-top:25px;margin-left:7px">
    <h1 style="font-weight:50;margin-top:25px;margin-left:30px;margin-right:10px;color:orange">Bangladesh Army International University of Science & Technology (BAIUST)</h1>
  </div>
</div>
<div>
<h1 style="text-align: center;background-color:#e6ac00;padding-top:10px;padding-bottom:15px"><?= $_SESSION['user_name'] ?> - <?= $_SESSION['uni_id'] ?> [<?=   $_SESSION['user_designation'] ?>]</h1>
</div>
     
<script>
function openLeftMenu() {
  document.getElementById("leftMenu").style.display = "block";
}

function closeLeftMenu() {
  document.getElementById("leftMenu").style.display = "none";
}

</script>

<style>
  /* Bordered form */
form {
    border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text],
input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
    opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
    width: 40%;
    border-radius: 50%;
}

/* Add padding to containers */
.container {
    padding: 16px;
}

/* The "Forgot password" text */
span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
        display: block;
        float: none;
    }

    .cancelbtn {
        width: 100%;
    }
}

.notification {
  background-color: orange;
  color: white;
  text-decoration: none;
  color:black;
  text-align:center;
  padding-top:6px;
  padding-bottom:6px;
  position: relative;
  display: inline-block;
  border-radius: 10px;
  width:100%;
}

.notification:hover {
  background: red;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: 1px;
  padding: 5px 10px;
  border-radius: 50%;
  background: red;
  color: black;
}

</style>
     
</body>
    
</body>
</html>