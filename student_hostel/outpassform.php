

<!DOCTYPE html>
<html>
<head>
	<title>Gatepass form</title>
    <!-- <link rel = "stylesheet" type = "text/css" href = "style.css">  -->
	<style>
		body {
            background-image: url("https://th.bing.com/th?q=Dark+Pink+Background&w=120&h=120&c=1&rs=1&qlt=90&cb=1&dpr=1.5&pid=InlineBlock&mkt=en-IN&cc=IN&setlang=en&adlt=moderate&t=1&mw=247");
			background-size: cover;
			color: #fff;
		}

		form {
			margin: 50px;
			padding: 20px;
			background-color: rgba(0,0,0,0.5);
			border-radius: 10px;
		}

		form input[type="text"],
		form input[type="integer"],
		form input[type="radio"],
		form input[type="date"],
		form input[type="time"] {
			padding: 10px;
			margin: 10px;
			border: none;
			border-radius: 5px;
			background-color: rgba(255,255,255,0.9);
			color: #000;
			font-size: 16px;
		}

		form input[type="submit"] {
			padding: 10px;
			margin: 10px;
			border: none;
			border-radius: 5px;
			background-color: #4CAF50;
			color: #fff;
			font-size: 16px;
			cursor: pointer;
		}

		form input[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<?php include('history_header.php')  ?>
<body >
	<form action="insert2.php" method="post">
		<table>
		<tr>
			<td>
				Name:
			</td>
			<td>
				<input type="text" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" name="name" required>
			</td>
		</tr>
		<tr>
			<td>
				Roll No:
			</td>
			<td>
				<input type="integer" name="rollno" required>
			</td>
		</tr>
		<tr>
			<td>
				Room no:
			</td>
			<td>
				<input type="integer" name="roomno" required>
			</td>
		</tr>
		<tr>
			<td>
				Outpass type :
			</td>
			<td>
				<input type="radio" name="outpasstype" value="hometown" required>Home town
				<input type="radio" name="outpasstype" value="od" required>ON Duty
				<input type="radio" name="outpasstype" valeu="localouting" required>Local Outing
			</td>
		</tr>
		<tr>
			<td>Out date:</td>
			<td><input type="date" name="odate" required></td>
			<td>In date:</td>
			<td><input type="date" name="idate" required></td>
		</tr>
		<tr>
			<td>Out time:</td>
			<td><input type="time" name="otime" required></td>
			<td>In time:</td>
			<td><input type="time" name="itime" required></td>
		</tr>
		<tr>
			<td>place:</td>
			<td><input type="text" name="place" required>
				
			
		</tr>
		<tr>
			<td><input type="submit" name="Request" value="Request"></td>
		</tr>
		

		</table>

	</form>


</body>
</html>