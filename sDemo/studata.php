

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
</head>
<link rel="stylesheet" type="text/css" href="../style.css">

<body>


  <?php
include '../database.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database) or die("Couldn't connect to server.");




$id=mysqli_real_escape_string($conn,$_POST['id']);
$name=mysqli_real_escape_string($conn,$_POST['name']);


$query= "select * from data where id='$id' and name='$name'";

$result = mysqli_query($conn,$query)
or die ("Couldn’t execute query.");






?>





<div class="columns ">
  <div class="column is-one-fifth has-text-centered">
  	
<a href="index.html"><img src="../images/mtu.png"></a>

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

  <div class="column is-one-third" >

<?php  
while($row = mysqli_fetch_assoc($result))
{
extract($row);
    

    

echo "
<ul class='collection card-panel teal #c8e6c9 green lighten-4'>
    
    <li class='collection-item avatar #c8e6c9 green lighten-4'>
      <i class='material-icons circle red'>person_pin</i>
      <span class='title black-text text-darken-2'>Name</span>
      <p>$name 
         
      </p>
    </li>

    <li class='collection-item avatar #c8e6c9 green lighten-4'>
      <i class='material-icons circle red'>picture_in_picture</i>
      <span class='title black-text text-darken-2'>ID</span>
      <p>$id
         
      </p>
    </li>
    <li class='collection-item avatar #c8e6c9 green lighten-4'>
      <i class='material-icons circle red'>insert_chart</i>
      <span class='title black-text text-darken-2'>Year</span>
      <p>$year
         
      </p>
    </li>
    <li class='collection-item avatar #c8e6c9 green lighten-4'>
      <i class='material-icons circle red'>directions_bike</i>
      <span class='title black-text text-darken-2'>Major</span>
      <p>$major 
         
      </p>
    </li>
    <li class='collection-item avatar #c8e6c9 green lighten-4'>
      <i class='material-icons circle red'>wc</i>
      <span class='title black-text text-darken-2'>Gender</span>
      <p>$gender
         
      </p>
    </li>
    <li class='collection-item avatar #c8e6c9 green lighten-4'>
      <i class='material-icons circle red'>account_balance</i>
      <span class='title black-text text-darken-2'>Address</span>
      <p>$address 
      </p>
    </li>
    <li class='collection-item avatar #c8e6c9 green lighten-4'>
      <i class='material-icons circle red'>assignmen</i>
      <span class='title black-text text-darken-2'>Score</span>
      <p>$score
         
      </p>
    </li>
  </ul>";
}
?>


  <a class="waves-effect waves-light btn">Edit</a>
            


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