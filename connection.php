<?php
error_reporting(0);
?>
<?php
session_start();
$name = "";
$email = "";
$errors = array();
$conn = mysqli_connect('localhost', 'root', '', 'fame_technologies_assignment');

if (isset($_POST['register'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phno = $_POST['phno'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    //$filename = $_FILES["uploadfile"]["name"];
    //$tempname = $_FILES["uploadfile"]["tmp_name"];    
    //$folder = "image/".$filename;
    $image = $fname . $_FILES['image']['name'];
    $target = "images/" . basename($image);

    $regex_email = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
    $regex_name = '/^[(A-Z)?(a-z)?(0-9)?\s*]+$/';
    //$regex_ph = "/^[0-9]*$/";

    if (empty($fname)) {
        array_push($errors, "Firstname cannot be empty");
    }
    if (empty($lname)) {
        array_push($errors, "Lastname cannot be empty");
    }
    if (empty($email)) {
        array_push($errors, "Email cannot be empty");
    }

    $query = "SELECT email from register where email='$email'";
    $res = mysqli_query($conn, $query);

    if (mysqli_num_rows($res) == 1) {
        array_push($errors, "Email Already exist.");
    }
    if (empty($phno)) {
        array_push($errors, "Phone number is empty");
    }
    if (!preg_match($regex_email, $email) || strlen($phno)<10) {
        array_push($errors, "Invalid phone number or email");
    }

    if ($password != $confirm_password) {
        array_push($errors, "Password doesn't match Try Again!!");
    }

    if (strlen($password) <= 6) {
        array_push($errors, "Weak password Make it Stronger");
    }
    if (!move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        array_push($errors, "Image not uploaded");
    }
    if (count($errors) == 0) {
        $sql1 = "INSERT INTO register VALUES (NULL,'$fname','$lname','$email','$phno','$image')";
        $sql2 = "INSERT INTO login1  VALUES('$email','$password')";
        mysqli_query($conn, $sql1);
        mysqli_query($conn, $sql2);
        header("location: home.php");
    }
}
if (isset($_POST['upload'])) {
    $id = $_SESSION['id'];
    $conn = mysqli_connect('localhost', 'root', '', 'fame_technologies_assignment');
    $image = $fname . $_FILES['image']['name'];
    $target = "images/" . basename($image);
    if (!move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        array_push($errors, "Image not uploaded");
    }
    $sql3 = "UPDATE register SET img='$image' WHERE id='$id'";
    mysqli_query($conn, $sql3);
    header("location:profile.php");
}
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (empty($email)) {
        array_push($errors, "Email cannot be empty");
    }
    if (empty($password)) {
        array_push($errors, "Password cannot be empty");
    }
    if (count($errors) == 0) {
        $query = "SELECT * FROM login1 where email='$email' AND pd='$password'";
        $query2 = "SELECT * FROM register where email='$email'";
        $result = mysqli_query($conn, $query);
        $result2 = mysqli_query($conn, $query2);
        $rows = mysqli_num_rows($result);
        $rows2 = mysqli_num_rows($result2);
        if ($rows == 1) {
            if ($rows2 == 1) {
                $row = mysqli_fetch_array($result2);
                $_SESSION['fname'] = $row['firstname'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['email'] = $email;
                header("location: profile.php");
            }
        } else {
            array_push($errors, "Username does not exit or password doesn't match");
            header("location: home.php");
        }
    }
}
if (isset($_POST['cancel'])) {
    header("location:profile.php");
}
if (isset($_POST['update'])) {
    $email1 = $_SESSION['email'];
    $id = $_SESSION['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phno = $_POST['phno'];
    $email = $_POST['email'];
    $regex_email = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
    $regex_name = '/^[(A-Z)?(a-z)?(0-9)?\s*]+$/';
    //$regex_ph = "/^[0-9]*$/";
    if (empty($fname)) {
        array_push($errors, "Firstname cannot be empty");
    }
    if (empty($lname)) {
        array_push($errors, "Lastname cannot be empty");
    }
    if (empty($email)) {
        array_push($errors, "Email cannot be empty");
    }
    if (empty($phno)) {
        array_push($errors, "Phone number is empty");
    }
    if (!preg_match($regex_email, $email) || strlen($phno)<10) {
        array_push($errors, "Invalid phone number or email");
    }
    if (count($errors) == 0) {
        $sql31 = "UPDATE register SET firstname='$fname',lastname='$lname',email='$email',contact='$phno' WHERE id='$id'";
        $sql32 = "UPDATE login1 SET email='$email' WHERE email='$email1'";
        $query33 = "SELECT * FROM register where email='$email'";
        mysqli_query($conn, $sql31);
        mysqli_query($conn, $sql32);
        $result33 = mysqli_query($conn, $query33);
        $row = mysqli_fetch_array($result33);
        $_SESSION['email'] = $email;
        $_SESSION['fname'] = $row['firstname'];
        header("location: profile.php");
    }
}
if (isset($_POST['change'])) {
    $phno = $_POST['phno'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $regex_email = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
    $regex_name = '/^[(A-Z)?(a-z)?(0-9)?\s*]+$/';
    //$regex_ph = "/^[0-9]*$/";
    if (empty($phno)) {
        array_push($errors, "Phone number is empty");
    }
    if (!preg_match($regex_email, $email) || strlen($phno)<10) {
        array_push($errors, "Invalid phone number or email");
    }

    if ($password != $confirm_password) {
        array_push($errors, "Password doesn't match Try Again!!");
    }
    if (strlen($password) <= 6) {
        array_push($errors, "Weak password Make it Stronger");
    }
    if (count($errors) == 0) {
        $sql6 = "SELECT * FROM register WHERE email='$email' AND contact='$phno'";
        $query6 = mysqli_query($conn, $sql6);
        $rows6 = mysqli_num_rows($query6);
        if ($rows6 == 1) 
        {
            $sql7 = "UPDATE login1 SET pd ='$password' WHERE email='$email'";
            mysqli_query($conn, $sql7);
            header("location:home.php");
        }
        else{
            header("location:changepassword.php");
        }
    }
}
?>