

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




$yrs="1st";
$major="CE";
$ac_yrs="2012-2013";


$query= "select * from data,ac_info where data.major='$major' and ac_info.ac_yrs='$ac_yrs' and ac_info.yrs='$yrs' and data.id=ac_info.id";



$result = mysqli_query($conn,$query) or die ("Couldn’t execute query.");





?>





<div class="columns ">
  <div class="column is-one-fifth has-text-centered">
  	
<a href="../index.html">  <img src="../images/mtu.png">  </a>

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
  	<a title="Login" href="ug/Login.html"><i class="small material-icons white-text text-darken-4">portrait</i></a>
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

<table class="table is-narrow is-hoverable">
<tr>
<th>Student ID</th>
<th>Student Name</th>
<th></th>


</tr>


<?php  
while($row = mysqli_fetch_assoc($result))
{
extract($row);

echo "

<tr>



<td >$id</td> 

<td >$name</td>
<td> <button>View</button></td>




</tr>";

}




echo "</table>\n";


?>




<br>
<br>


  <a href="stuform.html" class="button is-success is-inverted is-outlined is-medium">Add Student</a>
            


  </div>

  <div class="column"></div>

  <form  action="list.php" method="post">

  <div class="colomn is-one-fifth">
  	

<div class="field">
  
  <div class="control">
    <div class="select is-fullwidth">
      <select name="ac_yrs">
        <option value="2012-2013">2012-2013</option>
        <option value="2013-2014">2013-2014</option>
        <option value="2014-2015">2014-2015</option>
        <option value="2015-2016">2015-2016</option>
        <option value="2016-2017">2016-2017</option>
        <option value="2017-2018">2017-2018</option>
        <option value="2018-2019">2018-2019</option>
        

        
      </select>
    </div>
  </div>
</div>




<div class="field">
 
  <div class="control">
    <div class="select is-fullwidth">
      <select name="major">
        <option value="CE">Civil Engineering</option>
        <option value="ME">Mechanical Engineering</option>
        <option value="EC">Electronic Engineering</option>
        <option value="EP">Electrical Power</option>
        <option value="IT">Computer Engineering</option>
        <option value="MECHA">Mechatronic Engineering</option>
        <option value="ARCHI">Archiological Engineering</option>
        <option value="CHEM">Chemical Engineering</option>

        
      </select>
    </div>
  </div>
</div>



<div class="field">
  
  <div class="control">
    <div class="select is-fullwidth">
      <select name="yrs">
        <option value="1st">1st Year</option>
        <option value="2nd">2nd Year</option>
        <option value="3rd">3rd Year</option>
        <option value="4th">4th Year</option>
        <option value="5th">5th Year</option>
        <option value="6th">6rh Year</option>
        
        
      </select>
    </div>
  </div>
</div>
<button class="button is-success is-inverted is-outlined is-small" type="submit">GO</button>

  </div>
</form>
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