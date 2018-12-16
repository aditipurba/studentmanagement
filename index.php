 <!DOCTYPE html>

<html>
    <head>
        
        <title>Student Management System</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/css.css">
    </head>
    
    <body> 
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="nav navbar-nav navbar-left">

                        <li><h2 align="left"><a href="index.php" style= "margin-left:10px; font-size: 25px; color: brown">Home</a></h2></li>
                    </ul>
                
                    <ul class="nav navbar-nav navbar-right">

                        <li><h2 align="right"><a href="login.php"  style= "margin-right:10px; font-size: 25px; color: brown"><span class="glyphicon 
                        glyphicon-log-in" style="margin-right: 10px"></span>Admin Login</a></h2></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            
            <div class="banner-image">
                
        <h1 align="center">Welcome to Student Management System</h1>
           
  
            <center>
        <form method="post" action="index.php">
            <table style=" width: 60%; margin-top: 30px " align="center" border="5px solid black">
                <tr>
                
                    <td colspan="2" align="center"><h3><b>Student Information</b></h3></td>
                </tr>
                <tr>
                    <td align="center" style="padding-top:10px;padding-bottom: 10px;"><b>Choose Standard</b></td> 
                    <td style="padding-left:10px;">
                        <select name="std" required >
                            <option value="1">1st</option>
                            <option value="2">2nd</option>
                            <option value="3">3rd</option>
                            <option value="4">4th</option>
                            <option value="5">5th</option>
                            <option value="6">6th</option>
                            
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="center"style="padding-top:10px;padding-bottom: 10px;"><b>Enter Roll No</b></td>
                    <td style="padding-left:10px;"><input type="text" name="rollno" required></td>
                </tr>
                <tr>
                    <td colspan="10" align="center" style="padding-top:10px;padding-bottom: 10px;">
                        <input  class="button" type="submit" name="submit"  value="Show Info">
                    </td>
                </tr>
            </table>
        </form>
                </center>
        </div>
        </div>
        
       
    </body>
</html>


<?php
    
    if(isset($_POST['submit']))
    {
        $standard=$_POST['std'];
        $rollno=$_POST['rollno'];
        
        include('dbcon.php');
        include('function.php');
        
        
        showdetails($standard,$rollno);
    }

?>
