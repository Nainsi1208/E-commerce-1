<?php
session_start();
$con = mysqli_connect("localhost","root","","e_commerce");
if(isset($_POST['sub'])){
    $email_id=$_POST['Email_id'];
    $pass=$_POST['Password'];
    $qurry= mysqli_query($con, "select * from admin where Email_id = '$email_id' and Password = '$pass'");
    $query= mysqli_query($con, "select * from user where Email_id = '$email_id' and Password = '$pass'");
    if($query || $qurry){
     if($exe = mysqli_fetch_array($query)){
        $_SESSION['name']= $exe['Name'];
        echo"<script>alert('user found')</script>";
        header("location: index.php");
     
      } else if ($axa = mysqli_fetch_array($qurry)){
        $_SESSION['name']= $axa['Name'];
        echo"<script>alert('user found')</script>";
        header("location: dashboard.php");
    }else {
        echo"<script>alert('user not found')</script>";
    }
}else{
    echo"<script>alert('Something Went Wrong')</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
.form_main {
    margin:8rem 30rem;
  width: 300px;
  display: flex;
  flex-direction: column;
  
  align-items: center;
  justify-content: center;
  background-color: rgb(255, 255, 255);
  padding: 3rem 3rem;
  box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.062);
  position: relative;
  overflow: hidden;
}

.form_main::before {
  position: absolute;
  content: "";
  width: 300px;
  height: 300px;
  background-color: rgb(209, 193, 255);
  transform: rotate(45deg);
  left: -180px;
  bottom: 30px;
  z-index: 1;
  border-radius: 30px;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.082);
}

.heading {
  font-size: 2em;
  color: #2e2e2e;
  font-weight: 700;
  margin: 5px 0 10px 0;
  z-index: 2;
}

.inputContainer {
  width: 100%;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 2;
  height:15vh;
}

.inputIcon {
  position: absolute;
  left: 3px;
}

.inputField {
  width: 100%;
  height: 30px;
  background-color: transparent;
  border: none;
  border-bottom: 2px solid rgb(173, 173, 173);
  margin: 10px 0;
  color: black;
  font-size: .8em;
  font-weight: 500;
  box-sizing: border-box;
  padding-left: 30px;
}

.inputField:focus {
  outline: none;
  border-bottom: 2px solid rgb(199, 114, 255);
}

.inputField::placeholder {
  color: rgb(80, 80, 80);
  font-size: 1em;
  font-weight: 500;
}

#button {
  z-index: 2;
  position: relative;
  width: 100%;
  border: none;
  background-color: rgb(162, 104, 255);
  height: 30px;
  color: white;
  font-size: .8em;
  font-weight: 500;
  letter-spacing: 1px;
  margin: 10px;
  cursor: pointer;
}

#button:hover {
  background-color: rgb(126, 84, 255);
}

.forgotLink {
  z-index: 2;
  font-size: .7em;
  font-weight: 500;
  color: rgb(44, 24, 128);
  text-decoration: none;
  padding: 8px 15px;
  border-radius: 20px;
}


</style>
<body>
<form action="" class="form_main" method="POST">
    <p class="heading">Login</p>
    <div class="inputContainer">
        <svg class="inputIcon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2e2e2e" viewBox="0 0 16 16">
        <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"></path>
        </svg>
    <input type="text" name="Email_id" class="inputField" id="Email_id" placeholder="Email_id">
    </div>
    
<div class="inputContainer">
    <svg class="inputIcon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2e2e2e" viewBox="0 0 16 16">
    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
    </svg>
    <input type="password" name="Password" class="inputField" id="Password" placeholder="Password">
</div>
              
           
<button id="button" name="sub">Submit</button>
    <a class="forgotLink" href="#">Forgot your password?</a>
</form>
<!-- <a href="./index.html"></a> -->

    <!-- <script src="scripts.js"></script> -->
</body>
</html>
