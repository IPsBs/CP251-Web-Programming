<!-- ไฟล์นี้ใช้เชื่อมต่อกับ Database -->

<?php
    

     $servername = "10.1.3.40";
     $username = "64102010087";
     $password = "64102010087";
     $dbname = "64102010087";

    // Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if(!$conn){
        die("Connection failed" . mysqli_connect_errno());
    }
     else{
        echo "Connected with database successfully";
     }


?>