<?php
session_start();
$_SESSION['username']= $username; 
$_SESSION['password']= $password; 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Affairs Demo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>



	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	 <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
          

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">

    <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css">

</head>
<link rel="stylesheet" type="text/css" href="../style.css">

<body>

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
  	<a title="Login" href="#"><i class="small material-icons white-text text-darken-4">portrait</i></a>
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




<div class="columns has-text-centered">
  <div class="column "></div>
  <div id="loginform" class="column is-one-fifth">


    <form  action="loginauth.php" method="post">
  


<div class="field">
  <label class="label has-text-white">Username</label>
  <div class="control">
    <input class="input has-text-white" type="text" name="username" placeholder="Username" required>
  </div>
</div>

<div class="field">
  <label class="label has-text-white">Password</label>
  <div class="control">
    <input class="input has-text-white" type="password" name="password" placeholder="Password" required>
  </div>
</div>
  <button class="button is-success is-inverted is-outlined is-medium" type="submit">Login</button>
</form>
    

<br>
<br>
<br>
<br>
<br>
<br>
<br>

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
 




      

  <script>



</script>
        

</body>
</html>