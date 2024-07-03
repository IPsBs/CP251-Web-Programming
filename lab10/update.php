<?php
    include("server.php"); 

    
    $id = (int)$_POST["ID"]; 
    $fn = $_POST["fn"]; 
    $ln = $_POST["ln"];
    $mj = $_POST["major"];
    $DOB = $_POST["dob"];
    $email = $_POST["email"];    
    $phone = $_POST["phone"];   

    
    $update = "UPDATE students SET name='$fn',lastname='$ln',major='$mj',DOB='$DOB',phone='$phone' WHERE id = $id";  

    
    $update_no_dob = "UPDATE students SET name='$fn',lastname='$ln',major='$mj',DOB=null,phone='$phone' WHERE id = $id"; 

    
    $update_no_phone = "UPDATE students SET name='$fn',lastname='$ln',major='$mj',DOB='$DOB',phone=null WHERE id = $id";

    
    $update_no_dob_and_phone = "UPDATE students SET name='$fn',lastname='$ln',major='$mj',DOB=null,phone=null WHERE id = $id";

    
    if($DOB == null){  
        $result_no_dob = mysqli_query($conn,$update_no_dob); 
    }
    
    elseif($phone == null) 
    {
        $result_no_phone = mysqli_query($conn,$update_no_phone);
    }
    
    elseif($DOB == null && $phone == null) 
    {
        $result_no_dob_and_phone = mysqli_query($conn,$update_no_dob_and_phone);
    }
    
    else 
    { 
        $result = mysqli_query($conn,$update);
    }




    
    if($result || $result_no_phone  || $result_no_dob || $result_no_dob_and_phone){
        header("Location:./admin_page.php");
    }else{ 
        echo "<script>alert('cannot be updated.')</script>";
    }
?>