<!-- หน้าจัดการหลังกด delete -->

<?php 
    include("server.php");
    $id = (int)$_GET["ID"]; //ดึงค่า id ที่ส่งมา
    $sql_delete = "DELETE from students WHERE id = $id"; 
    $result = mysqli_query($conn,$sql_delete); 
    if($result){
        header("Location:./admin_page.php"); 
    }
?>

