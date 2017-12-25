<?php
include '../database.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database) or die("Couldn't connect to server.");



$name=mysqli_real_escape_string($conn,$_POST['name']);
$id=mysqli_real_escape_string($conn,$_POST['id']);
$major=mysqli_real_escape_string($conn,$_POST['major']);
$gender=mysqli_real_escape_string($conn,$_POST['gender']);
$d_name=mysqli_real_escape_string($conn,$_POST['d_name']);
$m_name=mysqli_real_escape_string($conn,$_POST['m_name']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$nrc_no=mysqli_real_escape_string($conn,$_POST['nrc_no']);
$address=mysqli_real_escape_string($conn,$_POST['address']);

$ac_yrs=mysqli_real_escape_string($conn,$_POST['ac_yrs']);
$yrs=mysqli_real_escape_string($conn,$_POST['yrs']);
$roll_no=mysqli_real_escape_string($conn,$_POST['roll_no']);




// $query= "insert into data (name,id,major,gender,d_name,m_name,phone,nrc_no,address) VALUES ('$name','$id','$major','$gender','$d_name','$m_name','$phone','$nrc_no','$address') ";


// $query1= "insert into ac_info (id,ac_yrs,yrs,roll_no) VALUES ('$id','$ac_yrs','$yrs','$roll_no') ";



 //  if ($conn ->query($query) === TRUE) {
//	if($conn ->query($query1)===TRUE){


	
//  header('Location: major.html');
 // exit;
// }
 // }
//else{

 // header('Location: stuform.html');
 // exit;
 // }

$msg="not Okay";
function phpAlert($msg) {

    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    
}



$sel_user = "SELECT * FROM data WHERE id='$id'";
$run_user = mysqli_query($conn, $sel_user);
$check_user = mysqli_num_rows($run_user);

if ($check_user > 0){
     phpAlert(   "Hello world!\\n\\nPHP has got an Alert Box"   ); 
}
else{
    $query = "INSERT INTO data ". 
           "(name,id,major,gender,d_name,m_name,phone,nrc_no,address) ". 
        "VALUES('$name','$id','$major','$gender','$d_name','$m_name','$phone','$nrc_no','$address')";

    $query2= "INSERT INTO ac_info".
           "(id,ac_yrs,yrs,roll_no)".
        "VALUES('$id','$ac_yrs','$yrs','$roll_no')";

    
    $run_users_tb = mysqli_query( $conn,$query );
    $run_users_info_tb = mysqli_query( $conn,$query2 );

    if(!$run_users_tb || !$run_users_info_tb){
       // die('Could not enter data: ' . mysqli_error($conn));
    	header('Location: stuform.html');
    }
    else{
        header('Location: slist.php');
  exit;
    }

    mysqli_close($conn);
}



?>