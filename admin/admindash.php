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

?>

<nav class="navbar navbar-inverse">
            <div class="container">
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="nav navbar-nav navbar-left">

                        <li><h1 align="left" style= "margin-left:10px; float: left; color: brown; font-size: 25px;">Welcome to Admin Dashboard</h1></li>
                    </ul>
                
                    <ul class="nav navbar-nav navbar-right">

                        <li><h1 align="right" style= "margin-right:10px"><a href="../logout.php" style="float: right; margin-right: 30px; color: brown; font-size: 25px;">
                                    <span class="glyphicon glyphicon-log-out" style="margin-right: 10px"></span>Logout</a></h1></li>
                    </ul>
                </div>
            </div>
        </nav>
   
       
<div class="dashboard">
    <table  style="width: 50%; "  align="center">
        <tr>
            <td>1.</td>
            <td><a href="addstudent.php">Insert Student Details</a></td>
        </tr>
        <tr>
            <td>2.</td>
            <td><a href="updatestudent.php">Update Student Detail</a></td>
        </tr>
        <tr>
            <td>3.</td>
            <td><a href="deletestudent.php">Delete Student Detail</a></td>
        </tr>
        
    </table>
    
</div>
       </body>
</html>
 