<?php
$con = mysqli_connect("localhost","root","","ecommerce_users");
$qury = mysqli_query($con, "select * from users");
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
    if(isset($_POST['sub'])){
      $name=$_POST['Name'];
      $email=$_POST['Email'];
      $num=$_POST['Number'];
      $pass=$_POST['Password'];

      $urname = substr($name, 0, 3);
      $uremail = substr($email, 0, 5);
      $urpass = substr($pass, 0, 2);
      $urnum = substr($num, 0, 2);
      $username = $urname . $uremail . $urpass . $urnum;

       mysqli_query($con, " INSERT INTO users (Name,,Email,Number,Password,username ) values('$name','$email','$num','$pass','$username')" );
    }
    ?>
    <div class="signup-form">
<form action="" class="form" method="POST" >
    <p class="title">Register </p>
    <p class="message">Signup now and get full access to our app. </p>
        
    <label>
            <input required="" name="Name" placeholder="" type="text" class="input">
            <span>Name</span>
  </label>  
            
    <label>
        <input required="" name="Email" placeholder="" type="email" class="input">
        <span>Email_id</span>
    </label> 
    <label>
            <input required="" name="Number" placeholder="" type="text" class="input">
            <span>Number</span>
  </label> 
    <label>
        <input required="" name="Password" placeholder="" type="password" class="input">
        <span>Password</span>
    </label>
        <button class="submit" name="sub">Submit</button>
    <p class="signin">Already have an acount ? <a href="logging.php">Login</a> </p>
</form>
    </div>
</body>
</html>  
