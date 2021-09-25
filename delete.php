<?php include('connection.php'); ?>
<?php
$conn = mysqli_connect('localhost','root','','fame_technologies_assignment');
$em=$_SESSION['email'];
$id=$_SESSION['id'];
$sql="UPDATE register SET img='nopic.png' where id='$id'";
$query=mysqli_query($conn,$sql);
header("location:profile.php")
?>