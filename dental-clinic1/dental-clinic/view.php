<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/JannaLTRegular.css">
</head>
<body>
</html>
<div class="book">
            <p>Welcome in our clinic ..please enter your email to login  </p>
            <br><br>
            <form action="" method="post">
                <input type="text" placeholder=" email " name="email"/>
                <input type="password" name="password" placeholder=" password "/>
                <input type="submit" value="login  " name="login"   />
            </form>

        
 <?php
session_start();
            // الاتصال بالسيرفر او قاعدة
            $host               = "localhost";
            $user               = "root";
            $password      = "";
            $dbName       = "hospital";
        
            $conn = mysqli_connect($host, $user, $password,$dbName);

            
            
            if(isset($_POST['login'])){
            	$email = htmlentities(mysqli_real_escape_string($conn, $_POST['email']));
		$pass = htmlentities(mysqli_real_escape_string($conn, $_POST['password']));
        $select_user = "select * from admin where email='$email' AND password='$pass'";
		$query= mysqli_query($conn, $select_user);
		$check_user = mysqli_num_rows($query);
        if($check_user == 1){
			$_SESSION['user_email'] = $email;

			echo "<script>onclick=window.open('admin.php','_self')</script>"  ;        
             
		}else{
			echo"<script>alert('Your Email or Password is incorrect')</script>";
		}
        
            }
          


            ?> 


        </div> 
</body>
