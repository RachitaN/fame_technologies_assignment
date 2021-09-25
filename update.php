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
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="container">
                        <h1>Update details</h1>
                        <div class="form-c">
                            <form class="form" action="update.php" method="post" enctype="multipart/form-data">
                                <?php include('errors.php'); ?>
                               <?php 
                               $email=$_SESSION['email'];
                               $query2="SELECT * FROM register where email='$email'";
                               $result2=mysqli_query($conn,$query2);
                               $row = mysqli_fetch_array($result2);
                               echo '<br><a href="profile.php" class="btn btn-warning">'.$_SESSION['fname'].'</a>
                               <a href="logout.php" class="btn btn-danger">Logout</a>
                               <div class="form-group">
                                <img class="profilepic" src="images/'.$row["img"].'" height="250" width="250"/><br>
                                <a class="link" href="delete.php" style="color:#05386B;font-weight:bold"><i class="fas fa-trash-alt"></i>&nbsp;Delete Profile picture</a><div class="form-group">
                                    <br><label for="phno">Profile pic</label>
                                    <input type="file" name="image" value="'.$row["img"].'"/><button class="btn btn-primary" href="upload.php" name="upload" type="submit">Upload</button>
                                </div>
                                    <label for="name">First Name</label>
                                    <input type="text" name="fname" class="form-control" id="fname" value="'.$row["firstname"].'">
                                </div>
                                <div class="form-group">
                                    <label for="name">Last Name</label>
                                    <input type="text" name="lname" class="form-control" id="lname"
                                    value="'.$row["lastname"].'">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        aria-describedby="emailHelp" value="'.$row["email"].'">
                                </div>
                                <div class="form-group">
                                    <label for="phno">Phone number</label>
                                    <input type="tel" name="phno" class="form-control" id="phno"
                                        placeholder="Enter your phone number" value="'.$row["contact"].'">
                                </div>
                                <button class="btn btn-primary " name="update" type="submit">Update</button>
                                <button class="btn btn-danger " name="cancel" type="submit">Cancel</button>
                                <br />';?>
</form>
                        </div></div></div></div></div></section></body></html>