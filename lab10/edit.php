<?php
session_start(); 
include("server.php"); 
$students = "SELECT * from students";
$result = mysqli_query($conn, $students);
$ID = (int)$_GET["ID"];
$fn = $_GET["fn"];
$ln = $_GET["ln"];
$mj = $_GET["major"];
$DOB = $_GET["DOB"];
$email = $_GET["email"];
$phone = $_GET["phone"];

if (isset($_POST['insert'])) { //กรณีที่มีการเพิ่มข้อมูล

    if (!empty($_POST['phone']) && !empty($_POST['birthday'])) 
    {
        $sql_insert = "INSERT INTO students (firstname,lastname, major, DOB, phone) VALUES ('$_POST[fname]','$_POST[lastname]','$_POST[major]','$_POST[birthday]','$_POST[phone]')";
        $result_insert = mysqli_query($conn, $sql_insert);
    } else if (empty($_POST['phone']) && empty($_POST['birthday'])) 
    {
        $sql_insert = "INSERT INTO students (firstname,lastname, major, DOB, phone) VALUES ('$_POST[fname]','$_POST[lastname]','$_POST[major]',null,null)";
        $result_insert = mysqli_query($conn, $sql_insert);
    } else if (empty($_POST['birthday'])) 
    {
        $sql_insert = "INSERT INTO students (firstname,lastname, major, DOB, phone) VALUES ('$_POST[fname]','$_POST[lastname]','$_POST[major]',null,'$_POST[phone]')";
        $result_insert = mysqli_query($conn, $sql_insert);
    } else if (empty($_POST['phone'])) 
    {
        $sql_insert = "INSERT INTO students (firstname,lastname, major, DOB, phone) VALUES ('$_POST[fname]','$_POST[lastname]','$_POST[major]','$_POST[birthday]',null)";
        $result_insert = mysqli_query($conn, $sql_insert);
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
    <title>Edit Page</title>
    <link rel="stylesheet" href="./css/page_style.css">

    <script src="./js/tableSort.js"></script>

    <!-- เอาไว้ดึง icon -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <div>
        <p style="color:black; text-align: right; font-size:20px;">
            Welcome <?php echo $_SESSION['username'] ?>
            (You have <b><?php echo $_SESSION['role'] ?></b> rights) |

            <span>
                <a href="index.php?logout='1'">Logout</a>
            </span>
        </p>
        <center>
            <h1>Add a new students</h1>

            <!-- สร้าง form สำหรับเพิ่มข้อมูล -->

            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
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
                            <center><input type="date" id="birthday" name="birthday"><br /></center>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Phone number:
                        </td>

                        <td>
                            <center><input type="text" name="phone"><br /></center>
                        </td>

                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" value="insert" name="insert">
                            <input type="reset" value="Clear Form">
                        </td>
                    </tr>
                    <table>
            </form>
        </center>       
    </div>

    <br><br>

    <div>
        <h1 style="text-align: center;">List of all students</h1>
        <br>
        <center>
            <form action="./update.php" method="POST">
                <table>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>lastname</th>
                        <th>major</th>
                        <th>DOB</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td><input type="number" name="ID" value="<?php echo $ID ?>" readonly style="border: none;"></td>
                        <td><input type="text" name="fn" value="<?php echo $fn ?>"></td>
                        <td><input type="text" name="ln" value="<?php echo $ln ?>"></td>
                        <td style= "width: 100px;">
                        <center>
                            <select name="major" >
                                <option value="CS" <?php if ($mj == "CS") {
                                                        echo "selected";
                                                    } ?>>CS</option>
                                <option value="Math" <?php if ($mj == "Math") {
                                                            echo "selected";
                                                        } ?>>Math</option>
                                <option value="Stat" <?php if ($mj == "Stat") {
                                                            echo "selected";
                                                        } ?>>Stat</option>
                            </select>
                        </center>
                        </td>                        
                        <td><input type="date" name="dob" value =<?php echo $DOB ?>></td>
                        <td><input type="text" name="email" value = "<?php echo $email ?>" ></td>
                        <td><input type="text" name="phone" value = "<?php echo $phone ?>" ></td>
                        <td><input type="submit" name="update" value="update"></td>
                    </tr>
                    
                </table>
            </form>
        </center>
    </div>
    </body>
<html>
