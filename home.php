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
        <div class="divf">
            <center><i  class="fa fa-user-o fa-10x"></i></center>
            <form class="form" action="home.php" method="POST">
            <?php include('errors.php'); ?>  
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" >Email</label>
                    &emsp;<div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password </label>
                    &emsp;<div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" name="login" class="btn btn-primary">Login</button>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">Don't have an account?<br>
                    <a class="link" href="register.php">  Register Now</a>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                    <a class="link" href="changepassword.php">Forgot Password</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>