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
                        <h1>Register</h1>
                        <div class="form-c">
                            <form class="form" action="register.php" method="post" enctype="multipart/form-data">
                                <?php include('errors.php'); ?>
                                <div class="form-group">
                                    <label for="name">First Name</label>
                                    <input type="text" name="fname" class="form-control" id="fname"
                                        placeholder="Enter your First Name">
                                </div>
                                <div class="form-group">
                                    <label for="name">Last Name</label>
                                    <input type="text" name="lname" class="form-control" id="lname"
                                        placeholder="Enter your Last Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="phno">Phone number</label>
                                    <input type="tel" name="phno" class="form-control" id="phno"
                                        placeholder="Enter your phone number" value="">
                                </div>
                                <div class="form-group">
                                    <label for="phno">Profile pic</label>
                                    <input type="file" name="image" value="" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                        aria-describedby="emailHelp" placeholder="Enter Password">
                                </div>
                                <div class="form-group">
                                    <label for="confirm_password">Confirm password</label>
                                    <input type="password" name="confirm_password" id="confirm_password"
                                        class="form-control" aria-describedby="emailHelp"
                                        placeholder="Re-enter Password">
                                </div>
                                <button class="btn btn-primary " name="register" type="submit">Register</button>
                                <br />
                                <div>
                                    <h6>Already have an account ?<a class="link" href="home.php"> Login</a></h6>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>