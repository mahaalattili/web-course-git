<?php

    include "header.php";

?>

<table>
    <th>id</th>
    <th> patient name</th>
    <th> email</th>
    <th>date</th>
    <th> </th>

<?php

    $host               = "localhost";
    $user               = "root";
    $password      = "";
    $dbName       = "hospital";

    $conn = mysqli_connect($host, $user, $password,$dbName);

    // إستيراد معلومات المرضى من قاعدة البيانات

    $query = "SELECT * FROM patients";
    $result = mysqli_query($conn,$query);

    if ($result){
        while($row = mysqli_fetch_assoc($result)){
            $id=$row['id'];
            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['date'] . "</td><td>" . " <a href='update1.php?id=$id' name='update' class='btn btn-secondary' >edit</a>  <a class='btn btn-danger' href='delete.php?id=$id' name='delete' >delete</a>" . "</td></tr>";
        }
        echo "</table>";
    }
    else{
        echo "  there is a mistake";
    }
   echo "<br>";
    echo  '<a href="index.php">Go to home</a>';
?>

