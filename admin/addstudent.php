<?php
    session_start();
    
    if(isset($_SESSION['uid']))
    {
        echo "";
    }
    else
    {
        header('location: ../login.php');
    }

?>

<?php

include ('header.php');
include ('title.php');

?>
<html>
    <body>
<div class="dashboard" >
<form action="addstudent.php" method="post" enctype="multipart/form-data">
    <table align="center" border="1" style="width:70%; margin-top: 40px;">
        <tr>
            <th>Roll No</th>
            <td><input type="text" name="rollno" placeholder="Enter your rollno" required></td>
        </tr>
        <tr>
            <th>Full Name</th>
            <td><input type="text" name="name" placeholder="Enter your name" required></td>
        </tr>
        <tr>
            <th>City</th>
            <td><input type="text" name="city" placeholder="Enter your city" required></td>
        </tr>
        <tr>
            <th>Parents Contact No</th>
            <td><input type="text" name="pcon" placeholder="Enter your contact no of parents" required></td>
        </tr>
        <tr>
            <th>Standard</th>
            <td><input type="number" name="std" placeholder="Enter standard" required></td>
        </tr>
        <tr>
            <th>Image</th>
            <td><input type="file" name="simg" required></td>
        </tr>
        
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Submit" name="submit">
            </td>
        </tr>
    </table>
    
</form>
</div>
</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        
        include('../dbcon.php');
        $rollno=$_POST['rollno'];
        $name=$_POST['name'];
        $city=$_POST['city'];
        $pcon=$_POST['pcon'];
        $std=$_POST['std'];
        $imagename=$_FILES['simg']['name'];
        $tempname=$_FILES['simg']['tmp_name'];
        
        move_uploaded_file($tempname, "../dataimg/$imagename");
        
        $qry="INSERT INTO `student`(rollno, name, city, pcont, standard,image) VALUES ('$rollno','$name','$city','$pcon','$std','$imagename')";
        $run= mysqli_query($con, $qry);
        if($run == true)
        {
?>
        <script>
            alert('Data Inserted Successfully');
            window.open('addstudent.php','_self');
        </script>
<?php
        }
        
    }
        
        
?>