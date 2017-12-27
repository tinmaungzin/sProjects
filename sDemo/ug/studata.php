

<!DOCTYPE html>
<html>
<head>
	<title>Student Affairs Demo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	 <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
          

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/components/form.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/components/form.min.js"></script>



<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/components/dropdown.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/components/dropdown.min.js"></script>

</head>
<link rel="stylesheet" type="text/css" href="../style.css">

<body>


  <?php
include '../database.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database) or die("Couldn't connect to server.");




$id=mysqli_real_escape_string($conn,$_POST['id']);



$query= "select * from data,ac_info where data.id='$id' and data.id=ac_info.id";

$result = mysqli_query($conn,$query)
or die ("Couldn’t execute query.");






?>





<div class="columns ">
  <div class="column is-one-fifth has-text-centered">
  	
<a href="../index.html"><img src="../images/mtu.png"></a>

<br>
<br>
<br>



  </div>
  <div class="column">
  	
  </div>


  <div  class="column is-one-quarter">
  	<br>
  	
<div id="icons" class="columns">
  	<div class="column is-2">
  	<a title="MTU" href="#"><i class="small material-icons white-text text-darken-4">home</i></a>
  </div>
  <div class="column is-2">
  	<a title="Library" href="#"><i class="small material-icons white-text text-darken-4">library_books</i></a>
  </div>
  <div class="column is-2">
  	<a title="Login" href="Login.html"><i class="small material-icons white-text text-darken-4">portrait</i></a>
  </div>
  <div class="column is-2">
  	<a title="Help" href="#"><i class="small material-icons white-text text-darken-4">live_help</i></a>
  </div>
  
  <div class="column is-2">
  	<a title="Contact Us" href="#"><i class="small material-icons white-text text-darken-4">sms</i></a>
  </div>

  </div>

  
 


</div>

</div>





<div id="name" class="columns">
  
  <div class="column"></div>
  <div class="column is-four-fifths">
  	<h1 class="title is-1">Mandalay Technological University</h1>
  	<br>

	<h2 class="title is-2">Student Affairs</h2>
<br>
<br>





  </div>
  <div class="column">
  	
  	

  </div>
</div>




<div class="columns has-text-centered ">
  
  
    <div class="column"></div>

  <div id="sdata" class="column is-half" >

<?php  


while($row = mysqli_fetch_assoc($result))
{
extract($row);
    
if($major==='CE'){
  $s_major='Civil Engineering';
}
if($yrs==='1st'){

  $s_yrs='I';
}
if($yrs==='2nd'){

  $s_yrs='II';
}


echo "


<form  action='to_next_yrs.php' method='post'>
<p class='has-text-weight-bold' style='display:inline' >Academic Year - </p> <code style='display:inline'>$ac_yrs</code>
<br><br>

  <div style='display:inline;'> 
 <img src='../images/mtu.png' alt='Girl in a jacket' width='150' height='160' style='float:left'> 
 <br><br><br>
 <h1 class='is-size-2'><input type='hidden' name='name' value='$name'>$name</h1>

 </div>









<br><br><br><br>
<p class='has-text-weight-bold' style='display:inline' >Student's ID - </p> <code style='display:inline'><input type='hidden' name='id' value='$id'>$id</code>
<br><br>
<p class='has-text-weight-bold' style='display:inline' >Major - </p> <code style='display:inline'>$s_major</code>
<br><br>
<p class='has-text-weight-bold' style='display:inline' >Roll Number - </p> <code style='display:inline'>$s_yrs BE $major - $roll_no</code>
<br><br>
<p class='has-text-weight-bold' style='display:inline' >Year - </p> <code style='display:inline'>$yrs</code>
<br><br>
<p class='has-text-weight-bold' style='display:inline' >Gender - </p> <code style='display:inline'>$gender</code>
<br><br>
<p class='has-text-weight-bold' style='display:inline' >Father's Name - </p> <code style='display:inline'>$d_name</code>
<br><br>
<p class='has-text-weight-bold' style='display:inline' >Mother's Name - </p> <code style='display:inline'>$m_name</code>
<br><br>
<p class='has-text-weight-bold' style='display:inline' >Address - </p> <code style='display:inline'>$address</code>
<br><br>
<p class='has-text-weight-bold' style='display:inline' >Phone Number - </p> <code style='display:inline'>$phone</code>
<br><br>
<p class='has-text-weight-bold' style='display:inline' >NRC Number - </p> <code style='display:inline'>$nrc_no</code>
<br><br>
<hr size='10'>
   ";

   
}
?>

<br><br><br>
  <button class="button is-success is-outlined is-medium" type="submit">To Next Academic Year</button>
            <br><br>
</form>

  </div>
  <div class="column"></div>
    

</div>





<footer class="footer">
  <div class="container">
    <div class="content has-text-centered">
      <p>
        <strong>MTU Student Affairs</strong> by <a href="http://jgthms.com">Department of CEIT</a>. The source code is licensed
        <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
        is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
      </p>
    </div>
  </div>
</footer>
 
            

</body>
</html>