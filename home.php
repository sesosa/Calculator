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
	<div id="tabs" style="width: 480px; height: 500px; color: white;">
		<h3> When you have completed adding your tasks, please press submit. </h3>
		<div id="inner">
		<select class="first-choice">
			<option selected value="base">Please select a category: </option>
			<option value="teachingTb">Teaching</option>
			<option value="researchTb">Research</option>
			<option value="serviceTb">Service</option>
		</select><br>
		<select class="second-choice">
			<option>Please select a task</option>
		</select><br>	
		<input type="button" onclick="moreFields();" id="moreFieldsButton" value="Give me more fields!" />
		 <input type="button" value="Remove task" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" />
		
		</div><br><br>
		
	<div id="newTabs"><br><br></div><br><br>
	
	<input type="submit" value="Send form" />
	</div>
	<script>
		
		$(".first-choice").change(function() {
			$(".second-choice").load("getter.php?choice=" + $(".first-choice").val());
		
		});
		
		
		var counter = 0;
		
		function moreFields() {
			counter++;
			var newFields = document.getElementById('inner').cloneNode(true);
			newFields.id = '';
			newFields.style.display = 'block';
			var newField = newFields.childNodes;
			for (var i = 0; i < newField.length; i++) {
				var theName = newField[i].name
				if (theName) newField[i].name = theName + counter;
    		}
			var insertHere = document.getElementById('newTabs');
			insertHere.parentNode.insertBefore(newFields, insertHere);
		}

		window.onload = moreFields(); 

		
	</script>
</body>
