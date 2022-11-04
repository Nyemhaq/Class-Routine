<!DOCTYPE html>
<html>
<head>
    <title>BAIUST</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="shortcut icon" href="../../../../resources/image/2.gif" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none;background-color:blue" id="leftMenu">
  <button onclick="closeLeftMenu()" class="w3-bar-item w3-button w3-large" style="background-color:white;border-radius :15px;margin-top:5px;margin-bottom:5px">Close &times;</button>
  <a href="../dashboard/admin.php" class="w3-bar-item w3-button" style="background-color:white;border-radius :15px;margin-bottom:5px">Dashboard</a>
  <a href="../teachers/index.php" class="w3-bar-item w3-button" style="background-color:white;border-radius :15px;margin-bottom:5px">Teachers List</a>
  <a href="../students/index.php" class="w3-bar-item w3-button" style="background-color:white;border-radius :15px">Students List</a>
  <a href="../courses/courses.php" class="w3-bar-item w3-button" style="background-color:white;border-radius :15px;margin-top:5px">Courses</a>
  <a href="../students/create.php" class="w3-bar-item w3-button" style="background-color:white;border-radius :15px;margin-top:5px;margin-bottom:5px"> Add Student</a>
  <a href="../teachers/create.php" class="w3-bar-item w3-button" style="background-color:white;border-radius :15px;margin-bottom:5px;margin-top:5px;margin-bottom:5px">Add Teacher</a>
  <a href="../courses/create.php" class="w3-bar-item w3-button" style="background-color:white;border-radius :15px;margin-top:5px;margin-top:5px;margin-bottom:5px">Add Courses</a>
  <a href="../routine/create.php" class="w3-bar-item w3-button" style="background-color:white;border-radius :15px;margin-top:5px;margin-top:5px;margin-bottom:5px">Add Routine</a>
  <a href="../login/login.php" class="w3-bar-item w3-button" style="background-color:white;border-radius :15px;margin-top:5px;margin-top:5px;margin-bottom:5px">Log Out</a>

</div>


<div style="display:flex;background-color: blue">
<div>
  <button  class=" w3-xxlarge w3-left"  onclick="openLeftMenu()" style="background-color:blue;border-radius:5px">&#9776;</button>
</div>
<div style="display:flex;margin-bottom:-100px;margin-top:-10px">
    <h1 style="font-weight:50;margin-top:25px;margin-left:30px;margin-right:10px;color:white">Bangladesh Army International University of Science & Technology (BAIUST)</h1>
  </div>
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

.notification {
  background-color: #555;
  color: white;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: red;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background: red;
  color: white;
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
</style>
     
</body>
    
</body>
</html>