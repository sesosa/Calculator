<head> 
	<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/login.css">
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
	<div id="tabs" style="width: 480px; height: 500px; color: white; ">
		<h3> When you have completed adding your tasks, please press submit. </h3>
		<select class="first-choice">
			<option selected value="base">Please select a category: </option>
			<option value="teachingTb">Teaching</option>
			<option value="researchTb">Research</option>
			<option value="serviceTb">Service</option>
		</select><br>
		<select class="second-choice">
			<option>Please select a task</option>
		</select><br>	
		<input id="addTask" type="button" value="Add" />
	</div>
	<script>
		
		
		
		$(".second-choice").change(function() {
                 $('#tabs').append(
            '<br>' +
            '<select class="first-choice">' +
			'<option selected value="base">Please select a category: </option>' +
			'<option value="teachingTb">Teaching</option>' +
			'<option value="researchTb">Research</option>' +
			'<option value="serviceTb">Service</option>' +
		'</select><br>' +
		'<select id="second-choice">' +
			'<option>Please select a task</option>' +
		'</select><br>' +	
		'<input type="button" value="Add" onclick="AddRow()" />');
    		
		}); 
		
		$(".first-choice").change(function() {
			$(".second-choice").load("getter.php?choice=" + $(".first-choice").val());
		
		});
		
		
		
	</script>
</body>
