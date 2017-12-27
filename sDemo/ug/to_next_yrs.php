

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

echo "

  <div style='display:inline;'> 
 <img src='../images/mtu.png' alt='Girl in a jacket' width='150' height='160' style='float:left'> 
 <br><br><br>
 <h1 class='is-size-2'>$name</h1>

 </div>





<form action='edit_insert.php' method='post'>



<br><br><br><br>
<p class='has-text-weight-bold' style='display:inline' >Student's ID - </p> <code style='display:inline'><input type='hidden' name='id' value='$id'>$id</code>
<br><br><br>



  <div class='field'>
  <label class='label has-text-black'>Academic Years</label>
  <div class='control'>
    <div class='select is-fullwidth'>
      <select required name='ac_yrs'>
        <option value='2012-2013'>2012-2013</option>
        <option value='2013-2014'>2013-2014</option>
        <option value='2014-2015'>2014-2015</option>
        <option value='2015-2016'>2015-2016</option>
        <option value='2016-2017'>2016-2017</option>
        <option value='2017-2018'>2017-2018</option>
        <option value='2018-2019'>2018-2019</option>
        

        
      </select>
    </div>
  </div>
</div>
<br>
<div class='field'>
  <label class='label has-text-black'>Year</label>
  <div class='control'>
    <div class='select is-fullwidth'>
      <select required name='yrs'>
        <option value='1st'>1st Year</option>
        <option value='2nd'>2nd Year</option>
        <option value='3rd'>3rd Year</option>
        <option value='4th'>4th Year</option>
        <option value='5th'>5th Year</option>
        <option value='6th'>6rh Year</option>
        
        
      </select>
    </div>
  </div>
<br>

<div class='field'>
  <label class='label has-text-black'>Roll Number</label>
  <div class='control'>
    <input class='input has-text-black' type='text' name='roll_no' placeholder='Roll Number' required>
  </div>
</div>
<br>
</div>


   ";
}
?>

<br><br>
  <button class="button is-success is-outlined is-medium" type="submit">Done</button>
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