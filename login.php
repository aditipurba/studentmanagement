<?php

    session_start();
    
    if(isset($_SESSION['uid']))
            {
                 header('location:admin/admindash.php'); 
            }
            
?>


<!DOCTYPE HTML>
<html lang="en_US">
    <head>
        
        <title>Admin Login</title>
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

                        <li><h2 align="left"><a href="index.php"  style= "margin-left:10px; font-size: 25px; color: brown">Home</a></h2></li>
                    </ul>
                </div>
            </div>
        </nav>
        <h1 align="center"><b>Admin Login</b></h1>
        
        
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-xs-4 col-xs-push-4">
                        <div class="panel panel-info">
                            <div class="panel-body">
            <form action="login.php" method="post" align="center" >
                
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Your Username" name="uname" required>
                    </div>
                
                     <div class="form-group">
                        <input type="password" class="form-control" placeholder="Enter Your Password" name="pass">
                     </div>
                        <input type="submit" class="btn btn-primary" name="login" value="Login">
            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


<?php

    include('dbcon.php');
    
    if (isset($_POST['login']))
    {
        $username = $_POST['uname'];
        $password = $_POST['pass']; 
        
        $qry = "SELECT * FROM `admin` WHERE username='$username' AND password='$password'";
        $run = mysqli_query($con, $qry);
        $row = mysqli_num_rows($run);
        
        if ($row < 1)
        {
?>
            <script>
            alert ('Username or Password doesnot match !!! ');
            window.open('login.php','_self');
            </script>

<?php
        }
        else
        {
            
            $data = mysqli_fetch_assoc($run);
            
            $id = $data['id'];
            
            
            $_SESSION['uid'] = $id;
            header('location:admin/admindash.php');
        }
        
    }
    ?>



            
            
   