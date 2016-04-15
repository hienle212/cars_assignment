<!DOCTYPE html>
<html>
<head>
	<title>Survey Form</title>
	<style type="text/css">
form{
	width:350px;
	height:260px;
	border:2px solid black;
	padding:30px;
	margin-top: 30px;
	margin-left:80px;
}
textarea{
	width:360px;
	height:50px;
	margin-top: 10px;
	border: 2px solid black;
}
label{
	margin-top: 25px;
	margin-bottom: 25px;
}
input, select{
	margin-top:10px;
	margin-bottom: 10px;
	border: 2px solid black;	
}
#input0{
	margin-left: 60px;

}
#input1{
	margin-left: 40px;
}
#input2{
	margin-left: 14px;
}
#button{
	margin-top: 20px;
	margin-left: 290px;
	border:2px solid black;
	background-color: blue;
	color:white;
	width:61px;
	height:20px;
}

	</style>
</head>
<body>
	<div id="container">
		<form action="/survey/form" method="post">
			<label for="name">Your Name</label>
			<input id="input0" type="text" name=" name"/>
			<br>
			<label id ="location">Dojo Location</label>
			<select id="input1" name = "location">
				<option>Seattle</option>
				<option>Silicon valley</option>
				<option>Los Angeles</option>
				<option >Chicago</option>
			</select>
				<br>

			<label id ="language">Favorite Language</label>
			<select id="input2" name ="language">
				<option>SQL</option>
				<option>JAVA</option>
				<option>PYTHON</option>
				<option>PHP</option>
			</select>			
			<br>
			<label for ="comment">Comment (optional)</label>
			<br>
			<textarea name="comment" placeholder=" "></textarea>
			<br>
			<input id="button" type="submit" value="Submit">
		</form>		
	</div>
	
</body>
</html>