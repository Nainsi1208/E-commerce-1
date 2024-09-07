<?php
$con = mysqli_connect("localhost","root","","e_commerce");
$qury = mysqli_query($con, "select * from user");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<style>
  .signup-form{
   
  }
.form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  max-width: 350px;
  background-color: #fff;
  padding: 20px;
  border-radius: 20px;
  position: relative;
}

.title {
  font-size: 28px;
  color: royalblue;
  font-weight: 600;
  letter-spacing: -1px;
  position: relative;
  display: flex;
  align-items: center;
  padding-left: 30px;
}

.title::before,.title::after {
  position: absolute;
  content: "";
  height: 16px;
  width: 16px;
  border-radius: 50%;
  left: 0px;
  background-color: royalblue;
}

.title::before {
  width: 18px;
  height: 18px;
  background-color: royalblue;
}

.title::after {
  width: 18px;
  height: 18px;
  animation: pulse 1s linear infinite;
}

.message, .signin {
  color: rgba(88, 87, 87, 0.822);
  font-size: 14px;
}

.signin {
  text-align: center;
}

.signin a {
  color: royalblue;
}

.signin a:hover {
  text-decoration: underline royalblue;
}

.flex {
  display: flex;
  width: 100%;
  gap: 6px;
}

.form label {
  position: relative;
}

.form label .input {
  width: 100%;
  padding: 10px 10px 20px 10px;
  outline: 0;
  border: 1px solid rgba(105, 105, 105, 0.397);
  border-radius: 10px;
}

.form label .input + span {
  position: absolute;
  left: 10px;
  top: 15px;
  color: grey;
  font-size: 0.9em;
  cursor: text;
  transition: 0.3s ease;
}

.form label .input:placeholder-shown + span {
  top: 15px;
  font-size: 0.9em;
}

.form label .input:focus + span,.form label .input:valid + span {
  top: 30px;
  font-size: 0.7em;
  font-weight: 600;
}

.form label .input:valid + span {
  color: green;
}

.submit {
  border: none;
  outline: none;
  background-color: royalblue;
  padding: 10px;
  border-radius: 10px;
  color: #fff;
  font-size: 16px;
  transform: .3s ease;
}

.submit:hover {
  background-color: rgb(56, 90, 194);
}

@keyframes pulse {
  from {
    transform: scale(0.9);
    opacity: 1;
  }

  to {
    transform: scale(1.8);
    opacity: 0;
  }
}
</style>
<body>
<?php
    if(isset($_POST['Sub'])){
      $fname=$_POST['first_Name'];
      $lname=$_POST['last_Name'];
      $email=$_POST['Email_id'];
      $pass=$_POST['Password'];
      $cpass=$_POST['confrim_password'];
       mysqli_query($con, "insert into user (first_Name,last_Name,Email_id,Password,confrim_password ) values('$fname','$lname','$email','$pass','$cpass')" );
    }
    ?>
    <div class="signup-form">
<form action="" class="form" method="POST" >
    <p class="title">Register </p>
    <p class="message">Signup now and get full access to our app. </p>
        <div class="flex">
        <label>
            <input required="" name="first_Name" placeholder="" type="text" class="input">
            <span>first_Name</span>
        </label>

        <label>
            <input required=""  name="last_Name" placeholder="" type="text" class="input">
            <span>last_Name</span>
        </label>
    </div>  
            
    <label>
        <input required="" name="Email_id" placeholder="" type="email" class="input">
        <span>Email_id</span>
    </label> 
        
    <label>
        <input required="" name="Password" placeholder="" type="password" class="input">
        <span>Password</span>
    </label>
    <label>
        <input required="" name="confrim_password" placeholder="" type="password" class="input">
        <span>Confrim_password</span>
    </label>
    <button class="submit" name="Sub">Submit</button>
    <p class="signin">Already have an acount ? <a href="logging.php">Login</a> </p>
</form>
    </div>
</body>
</html>  
