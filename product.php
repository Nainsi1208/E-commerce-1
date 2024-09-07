<?php
session_start();
$con = mysqli_connect("localhost","root","","e_commerce");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PAGE</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
   *{
    margin: 0;
    padding: 0%;
    text-decoration: none;
   }
   header h1{
    background-color: black;
    text-align: center;
    color: white;
    padding: 0.5rem;
   }
   .main-container{
    display: flex;

   }
   #sidebar{
    background-color: rgb(32, 48, 57);
    height: 100vh;
    padding: 2rem 5rem 2rem 2rem    ;
  }
  #sidebar ul{
    list-style: none;
  }
#sidebar ul li{
  padding-top: 2.5rem;
}
  #sidebar ul li a{
     color: white;
     font-size: 1.2rem;
   }
   #sidebar h1{
     color: rgb(196, 193, 232);
     font-size: 2.5rem;
   }
   .head{
    display: flex;
    align-items: center;
    justify-content: space-between;
   }
  .first a{
    font-size: 2rem;
    color: black;
    padding-left: 1.5rem;
   }
   .first input{
    padding:  0.7rem 4rem 0.7rem 0.7rem ;
    border-radius: 0.5rem;
    border-color: gray;
    margin: 1rem;
   }
   .second a{
    font-size: 2rem;
    color: black;
    padding-left: 1.5rem;
   }
   .pdct{
    display: flex;
    justify-content: space-between;
   }
   form{
    padding-left: 8rem;
    padding-top: 6rem;

   }
   input{
    display: flex;
    padding: 0.5rem;
    margin: 1rem;
    border-radius: 0.5rem;
   }
   
   </style>
<body>
  <!-- <h1><?php echo $_SESSION['name'];?></h1> -->
  <header>
    <h1>Product PAGE</h1>
  </header>
      <div class="main-container">
        <aside id="sidebar">
             <h1> MENU</h1> 
               <ul>
                <li><a href="Admin.php"><i class='bx bx-home'></i>DASHBOARD</a></li>
                <li><a href=""><i class='bx bx-user-circle' ></i>USERS</a></li>
                <li><a href=""><i class='bx bxl-product-hunt' ></i>PRODUCT</a></li>
                <li><a href=""><i class='bx bx-bar-chart' ></i>CHARTS</a></li>
                <li><a href=""><i class='bx bx-log-out' ></i>LOGOUT</a></li>
               </ul>
        </aside>
        <div class="container">
          <div class="head">
            <div class="first">
         <a href=""> <i class='bx bx-menu'></i></a>
         <input placeholder="Search">
        </div>
           <div class="second">
           <a href=""><i class='bx bx-bell'></i></a>
           <a href=""><i class='bx bxs-user-circle'></i></a>
           </div>
         </div>
         <div class="pdct">
          <form class="form1" method="post" enctype="multipart/form-data">
           <input type="text" name='name' placeholder="Product Name">
           <input type="text" name='price' placeholder="Price">
           <input type="text" name='dis' placeholder="Discription">
           <input type="file" name='file' placeholder="Image">
           <button type='submit' name='sub'>Submit</button>
          </form>
           <!-- <form class="form2">
             <input type="file" >
             <input type="file" >
             <input type="file" >
             <button>Submit</button>
           </form> -->
         </div>
         <?php
         $con = mysqli_connect('localhost','root','','product');
         if(isset($_POST['sub'])){
          $name = $_POST['name'];
          $price = $_POST['price'];
          $dis = $_POST['dis'];
           // $file = $_POST['file'];
           if(isset($_FILES['file'])){
            $img = $_FILES['file']['name'];
            $img_tmp =$_FILES['file']['tmp_name'];
             move_uploaded_file($img_tmp,'./images/'.$img);
           }else{
             echo'no';
           }
           mysqli_query($con,"INSERT INTO prdt (name,about,category,img,price) VALUES ('$name','$dis','$img','$price' )");
         }
         ?>
        </div>
        </div>
    </body>
</html>  