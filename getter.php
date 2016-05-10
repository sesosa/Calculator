
<?php
	
	$username = 'sesosac1_user';
	$password = 'p@s$word';
	$hostname = 'localhost';
	
	$dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
	$selected = mysql_select_db("sesosac1_Calculator", $dbhandle) or die("Could not select examples");
	$choice = mysql_real_escape_string($_GET['choice']);
	
	$query = "SELECT * FROM `{$choice}`;";	
	$result = mysql_query($query);
		
	while ($row = mysql_fetch_array($result)) {
   		echo "<option>" . $row{'taskName'} . "</option>";
	}
?>
