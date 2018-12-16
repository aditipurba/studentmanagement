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



<table align="center">
<form method="post" action="updatestudent.php">
    
    <tr>
        <th>Enter standard</th>
        <td><input type="number" name="standard" placeholder="Enter standard" required="required"></td>
    </tr>
    
    <tr>
        <th>Enter Student Name</th>
        <td><input type="text" name="stname" placeholder="Enter Student name" required="required"></td>
    </tr>
    <tr>
    <td colspan="2"><input type="submit" name="submit" value="Search"></td>
    </tr>
    
</form>
</table>



<table align='center' width='100%' border='1' style="margin-top: 10px;">
    <tr>
        <th>NO</th>
        <th>IMAGE</th>
        <th>NAME</th>
        <th>ROLL NO</th>
        <th></th>
        
    </tr>
    <?php

    if(isset($_POST['submit']))
    {
        include('../dbcon.php');
        $standard = $_POST['standard'];
        $name = $_POST['stname'];

        $sql = "SELECT * FROM `student` WHERE standard='$standard' AND name='$name'";
        $run = mysqli_query($con, $sql);
        
        
        if(mysqli_num_rows($run) < 1)
        {
            echo "<tr><td colspan='5'>No Record Is Found</td></tr>";
        }
        else
        {
            $count = 0;
            while($data= mysqli_fetch_assoc($run))
            {
                
                $count++;
    ?>
                <tr align='center'>
                    <td><?php echo $count?></td>
                    <td><img src="../dataimg/<?php echo $data['image']; ?>" style="max-width: 100px;"></td>
                    <td><?php echo $data['name']?></td>
                    <td<?php echo $data['rollno']?></td>
                    <td><a href="updateform.php?sid=<?php echo $data['id'] ?>">Edit</a></td>

                </tr>
                <?php
            }
        }
    
    }
    ?>
</table>



