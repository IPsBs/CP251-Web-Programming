<?php 
    session_start(); 
    include("server.php"); 

    
    $sql_student = "SELECT * from students"; 

    
    $result =  mysqli_query($conn,$sql_student); 
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="./css/page_style.css">

    <script src="./js/tableSort.js"></script>
    
    <!-- เอาไว้ดึง icon -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> 

</head>
<body>
    <div>
    <p style = "color:black; text-align: right; font-size:20px;">
        Welcome <?php echo $_SESSION['username']?>
        (You have <b><?php echo $_SESSION['role']?></b> rights) |

        <span>
            <a href="index.php?logout='1'">Logout</a>
        </span>
    </p>  

    <h1 style = "text-align: center;">List of all students</h1>
    <br>
    <center>
        <table width = "75%"; id="myTable">

            
            <tr>
                <th onclick="sortTable(0)">id<i class="fa fa-fw fa-sort"></i></th>
                <th onclick="sortTable(1)">name<i class="fa fa-fw fa-sort"></i></th>
                <th onclick="sortTable(2)">Lastname<i class="fa fa-fw fa-sort"></i></th>
                <th onclick="sortTable(3)">Major<i class="fa fa-fw fa-sort"></i></th>
                <th onclick="sortTable(4)">dob<i class="fa fa-fw fa-sort"></i></th>
                <th onclick="sortTable(4)">email<i class="fa fa-fw fa-sort"></i></th>
                <th onclick="sortTable(5)">Phone<i class="fa fa-fw fa-sort"></i></th>
            </tr>

            
            
            <?php while ($row = mysqli_fetch_array($result)) { ?> 

             
            <tr>            
                <td><?php echo $row['id'] ?></td> 
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['lastname'] ?></td>
                <td><?php echo $row['major'] ?></td>
                <td><?php echo $row['dob'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['phone'] ?></td>
            </tr>

            <?php } ?>

        </table>
    </center>

    </div>
</body>
</html>