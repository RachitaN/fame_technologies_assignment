<?php include('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/home.css">
    <title>Web Project</title>
    <script src="https://kit.fontawesome.com/a5c7a9953a.js" crossorigin="anonymous"></script>
</head>

<body>
    <section>
        <div style="position:fixed;top:10px">
                   <?php
                   if (isset($_SESSION['email'])) {
                    $email=$_SESSION['email'];
                    echo '<a href="profile.php" class="btn btn-warning">Hi, '.$_SESSION['fname'].'</a>
                     <a href="logout.php" class="btn btn-danger">Logout</a>';
                     $query2="SELECT * FROM register where email='$email'";
        $result2=mysqli_query($conn,$query2);
        $row = mysqli_fetch_array($result2);
    
        echo '<div class="container1" style="position="relative";left:20px;top:10px">
                    <br><h3>PROFILE DETAILS</h3>
                    <img class="profilepic" src="images/'.$row["img"].'" height="250" width="250"/>
            <div class="row1">First name : '.$row["firstname"].'</div>
            <div class="row1">Last name : '.$row["lastname"].'</div>
            <div class="row1">email : '.$row["email"].'</div>
            <div class="row1">phone number : '.$row["contact"].'</div></div><div class="row2" style="float:right"><a class="link" href="update.php" style="color:#05386B;font-weight:bold"><i class="fa fa-pencil" aria-hidden="true"></i>Edit Profile</a>
            &emsp;<div class="row2" style="float:right"><a class="link" href="changepassword.php" style="color:#05386B;font-weight:bold"><i class="fa fa-key" aria-hidden="true"></i>
            Change Password</a>
            </div>';
                    } else {
                    echo '<h4>Welcome,Please login or register to view your profile details</h4><br><center><a href="home.php" class="btn btn-success" data-target="modal1">Login</a>
                    <a href="register.php" class="btn btn-success" data-target="modal2">Register</a></center>
                    <br><center><img src="https://images.unsplash.com/photo-1543874820-ff63f2f70135?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=387&q=80" height="400" width="400"></center>';
                    }?>
        </div>
    </section>
                </body>
                </html>