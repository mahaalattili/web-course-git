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
            <p>Welcome in our clinic ..please fill the form to register  </p>
            <form action="register.php" method="post">
                <input type="text" placeholder=" name" name="name"/>
                <input type="text" placeholder=" email " name="email"/>
                <input type="date" name="date"/>
                <input type="submit" value="Register Now " name="send"   />
            </form>

        
<?php

            // الاتصال بالسيرفر او قاعدة
            $host               = "localhost";
            $user               = "root";
            $password      = "";
            $dbName       = "hospital";
        
            $conn = mysqli_connect($host, $user, $password,$dbName);

            // ارسال المعلومات المُدخله بواسطة المريض الى قاعدة البيانات
            
            if(isset($_POST['send'])){
            
                $pName            = $_POST['name'];
                $pEmail           = $_POST['email'];
                $pDate            = $_POST['date'];            
                $query = "INSERT INTO patients(name,email,date) VALUE('$pName ','$pEmail ','$pDate ')";
                $result = mysqli_query($conn,$query);
                echo "<p style='color:green'>" . " success register" . "</p>";
                echo "<br>";
              echo  '<a href="clinic.php">View Clinic</a>';
            }
          


            ?>

        </div> 
</body>
