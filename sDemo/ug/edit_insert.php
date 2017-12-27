<?php
include '../database.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database) or die("Couldn't connect to server.");




$id=mysqli_real_escape_string($conn,$_POST['id']);


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




    
    $query2= "INSERT INTO ac_info".
           "(id,ac_yrs,yrs,roll_no)".
        "VALUES('$id','$ac_yrs','$yrs','$roll_no')";

    
    
    $run_users_info_tb = mysqli_query( $conn,$query2 );

    if( !$run_users_info_tb){
       // die('Could not enter data: ' . mysqli_error($conn));
    	header('Location: stuform.html');
    }
    else{
        header('Location: slist.php');
  exit;
    }

    mysqli_close($conn);




?>