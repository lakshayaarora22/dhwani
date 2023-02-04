<?php
$server = "localhost:8809";
$username = "root";
$password = "";
$con = mysqli_connect($server, $username, $password,"spotify" );
if(!$con)
{
      die("connection to this database failed due to".mysqli_connect_error()); 
}
$feedback=$_POST['feedback'];
$sql = "INSERT INTO `spotify`.`feedback`(`feedback`) VALUES ('$feedback')";
mysqli_query($con,$sql);
echo "<br>";
header('Location: successfulll.html');
?>