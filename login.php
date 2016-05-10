
<?php
	
	$conn = new mysqli('localhost', 'sesosac1_user', 'p@s$word', 'sesosac1_Calculator');
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
	session_start();
	if (isset($_POST['action'])) {          
		if ($_POST['action']=="login") {
			$username = mysqli_real_escape_string($conn,$_POST['username']);
			$password = mysqli_real_escape_string($conn,$_POST['password']);
			$sql = "SELECT name FROM userTb WHERE username = '".$username."' AND password = '".md5($password)."';";
			
			if ($conn->query($sql) == TRUE) {
				$message = $Results['name']." Login Successful!";
				$_SESSION["username"] = $username;
				echo "<script type='text/javascript'>
window.location = 'http://sesosa.com/Calculator/home.php';</script>";
    		} else {
				$message = "invalid username or password";
    		}        
		} elseif ($_POST['action']=="signup") {
			$username      = mysqli_real_escape_string($conn,$_POST['username']);
			$password   = mysqli_real_escape_string($conn,$_POST['password']);
			$query = "SELECT username FROM userTb where username='".$username."'";
			$result = mysqli_query($conn,$query);
			$numResults = mysqli_num_rows($result);
			if ($numResults>=1) {
				$message = $username."username already exists";
    		} else {
				$sql = "INSERT INTO userTb(username, password) values('".$username."','".md5($password)."');";
				$message = "sign up successful ";
				$_SESSION["username"] = $username;
				echo "<script type='text/javascript'>
window.location = 'http://sesosa.com/Calculator/home.php';</script>";
    		}
		}
	}
	
	if ($conn->query($sql) == TRUE) {
		echo ""; 
 	} else {
 	   echo "";
	}
	
?> 

<head> 
	<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/login.css">
	<script>
		$(function() {
		$( "#tabs" ).tabs();
		});
	</script>
	<style>
		
* {
	font-family: 'Roboto', sans-serif;
}

body {
	background-color: #003366
}
		
iframe {
    z-index : -9999;
    position: absolute;
    top : 0;
    left    : 0;
    width   : 100%;
    height  : 100%;
    margin  : 0;
    padding : 0;
}
#logo {
	padding: 20px; 
	padding-left:30px; 
	color: #F9F9F9;
}

#tabs {
	margin-left: auto;
	margin-right: auto;
	display: table; 
	padding: 30px; 
	border: 5px solid #E01E3C;

}


#tabs ul {
    margin-left: 20%; 
}
#tabs ul li {
	list-style: none; 
    display: inline;
    margin-left: 10px; 
}
#tabs ul li a{
	text-align: center; 
	text-decoration: none; 
	color: #F9F9F9;
	font-size: 20px; 
}

input[type="submit"] {

  background-color: #ffffff;
  font-size: 15px;
  font-weight: bold;
  text-color: black;
  width: 202px;
  height: 60px;
  border-color: black;
  margin-left: 139px;
  margin-top: 3px;
}
</style>

</head>
<body>
	<h1 id="logo">Columbus State University <br> LOW Calculator & Report Generator</h1>
	<div id="tabs" style="width: 480px;">
		<ul>
			<li><a href="#tabs-1">login</a></li>
			<li><a href="#tabs-2" class="active">signup</a></li>
		</ul>                 
		<div id="tabs-1">
			<form action="" method="post">
				<p><input id="username" name="username" type="text" placeholder="Username"></p>
				<p><input id="password" name="password" type="password" placeholder="Password">
					<input name="action" type="hidden" value="login" /></p>
				<p><input type="submit" value="Login" /></p>
				</form>
			</div>
			<div id="tabs-2">
				<form action="" method="post">
					<p><input id="username" name="username" type="text" placeholder="Username"></p>
					<p><input id="password" name="password" type="password" placeholder="Password">
  					<input name="action" type="hidden" value="signup" /></p>
  				<p><input type="submit" value="Signup" /></p>
				</form>
				
				
	
			</div>
			<?php
		echo '<b>'.$message.'</b>';
	?> 
	</div>
</body>
	
