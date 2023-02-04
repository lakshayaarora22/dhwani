<?php
$server = "localhost:8809";
$username = "root";
$password = "";
$con = mysqli_connect($server, $username, $password,"spotify" );
if(mysqli_connect_errno())
{
      die("connection to this database failed due to".mysqli_connect_error()); 
}
$songname=$_POST['name'];
$rating=$_POST['number'];
$sql = "INSERT INTO `songrate`(`songname`,`rating`) VALUES ('$songname','$rating')";
mysqli_query($con,$sql);
echo "<br>";
header('Location: successfull.html');
?>