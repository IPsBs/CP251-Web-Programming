<?php
    session_start();
    include("server.php"); 

    
    $sql_student = "SELECT * from students"; 

    
    $result =  mysqli_query($conn,$sql_student);

    if (isset($_POST['insert'])) { 

        if (!empty($_POST['phone']) && !empty($_POST['birthday'])) 
                {
                    $sql_insert = "INSERT INTO students (name,lastname, major, DOB, email ,phone) VALUES ('$_POST[fname]','$_POST[lastname]','$_POST[major]','$_POST[birthday]','$_POST[email]','$_POST[phone]')";
                    $result_insert = mysqli_query($conn,$sql_insert);
                }

        elseif(empty($_POST['phone']) && empty($_POST['birthday'])) 
                {
                    $sql_insert = "INSERT INTO students (name,lastname, major, DOB, email ,phone) VALUES ('$_POST[fname]','$_POST[lastname]','$_POST[major]',null,'$_POST[email]',null)";
                    $result_insert = mysqli_query($conn,$sql_insert);

                }

        else if(empty($_POST['birthday'])) 
                {
                    $sql_insert = "INSERT INTO students (name,lastname, major, DOB, email ,phone) VALUES ('$_POST[fname]','$_POST[lastname]','$_POST[major]',null,'$_POST[email]','$_POST[phone]')";
                    $result_insert = mysqli_query($conn,$sql_insert);

                }
        else if(empty($_POST['email'])) 
                {
                    $sql_insert = "INSERT INTO students (name,lastname, major, DOB, email ,phone) VALUES ('$_POST[fname]','$_POST[lastname]','$_POST[major]','$_POST[birthday]',null,'$_POST[phone]')";
                    $result_insert = mysqli_query($conn,$sql_insert);

                }

        else if(empty($_POST['phone'])) 
                {
                    $sql_insert = "INSERT INTO students (name,lastname, major, DOB, email ,phone) VALUES ('$_POST[fname]','$_POST[lastname]','$_POST[major]','$_POST[birthday]','$_POST[email]',null)";
                    $result_insert = mysqli_query($conn,$sql_insert);

                }
                
        
        
        header("Location: ./admin_page.php"); 
    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="./css/page_style.css">

    <script src="./js/tableSort.js"></script>
    
    
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/5.0.4/css/font-awesome.min.css" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
    <center>
        <h1>Add a new students</h1>

        <!-- สร้าง form สำหรับเพิ่มข้อมูล -->

        <form  action="<?=$_SERVER['PHP_SELF']?>" method="POST">
        <table>
            <tr>

            <label for="fname">
                <td>
                     *Name:
                </td>
            </label>
                <td>
                    <center><input type="text" name="fname" required></center>
                </td>
            </tr>

            <tr>
                <td>
                    *Last name:
                </td>

                <td>
                    <center><input type="text" name="lastname" required></center>
                </td>
            </tr>

            <tr>
                <td>
                    Major:
                </td>

                <td>
                    <center>
                        <select name="major">
                            <option value="Math">Math</option>
                            <option value="Stat">Stat</option>
                            <option value="CS" selected>CS</option>
                        </select>
                    </center>
                </td>
            </tr>

            <tr>
                <td>
                     Date of birth:
                </td>

                <td>
                    <center><input type="date" id="birthday" name="birthday"><br/></center>
                </td>
            </tr> 

            <tr>
                <td>
                    Email:
                </td>

                <td>
                    <center><input type="text" name="email"><br/></center>
                </td>

            </tr>

            <tr>

                <td>
                    Phone number:
                </td>

                <td>
                    <center><input type="text" name="phone"><br/></center>
                </td>

            </tr>

            <tr>                
                <td colspan="2">
                    <input type="submit" value="insert" name="insert" > 
                    <input type="reset" value="reset">
                </td>
            </tr>
        <table>
            </center>
        </form>
    </div>

    <br><br>

    <div>
        <h1 style = "text-align: center;">List of all students</h1>
        <br>
        <center>
            <table width = "75%"; id="myTable">

                
                <tr>
                    <th onclick="sortTable(0)">id<i class="fa fa-fw fa-sort"></i></th>
                    <th onclick="sortTable(1)">name<i class="fa fa-fw fa-sort"></i></th>
                    <th onclick="sortTable(2)">Lastname<i class="fa fa-fw fa-sort"></i></th>
                    <th onclick="sortTable(3)">Major<i class="fa fa-fw fa-sort"></i></th>
                    <th onclick="sortTable(4)">DOB<i class="fa fa-fw fa-sort"></i></th>
                    <th onclick="sortTable(4)">email<i class="fa fa-fw fa-sort"></i></th>
                    <th onclick="sortTable(5)">Phone<i class="fa fa-fw fa-sort"></i></th>
                    <th>Action</th>
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
                    <td>
                       
                        
                        

                        
                        <a href="./edit.php?
                            ID=<?php echo $row['id'] ?>
                            &fn=<?php echo $row['name']?>
                            &ln=<?php echo $row['lastname']?>
                            &major=<?php echo $row['major']?>
                            &DOB=<?php echo $row['dob']?>
                            &email=<?php echo $row['email']?>
                            &phone=<?php echo $row['phone']?>
                        ">

                        
                        <i class="fas fa-pen",></i>
                        </a> 

                        

                        <a href="./delete.php?ID=<?php echo $row['id']?>" 
                        onclick="return confirm('Are you sure you want to delete?')"> 
                        
                        
                        <i class="far fa-trash-alt"></i>
                        </a>

                       

                    </td>
                </tr>

                <?php } ?>

            </table>
        </center>    
    </div>