<?php 

include '../database.php';



$conn = mysqli_connect($servername, $username, $password,$database) or die("Couldn't connect to server.");

$username=mysqli_real_escape_string($conn,$_POST['username']);
$password=mysqli_real_escape_string($conn,$_POST['password']);

$sql = "SELECT * FROM logintable
WHERE username='$username'
AND password='$password' "; 
$result = mysqli_query($conn,$sql)
or die("Couldn’t execute query.");

	

	$num = mysqli_num_rows($result); 
if ($num > 0) 
{
	
  header('Location: v_a.html');
  exit;
}
else{

header('Location: login.html');
  exit;
	
}
?>

 ?>