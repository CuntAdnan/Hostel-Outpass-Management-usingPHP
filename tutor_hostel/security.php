<!DOCTYPE html>
<html>
<form action="authentication2.php" method="POST" >
<head>
	<title>security</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<style>
        body {
            background-image: url("https://th.bing.com/th?q=Dark+Pink+Background&w=120&h=120&c=1&rs=1&qlt=90&cb=1&dpr=1.5&pid=InlineBlock&mkt=en-IN&cc=IN&setlang=en&adlt=moderate&t=1&mw=247");
            background-size: cover;
        }
        
        #frm {
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 20px;
            border-radius: 5px;
            margin: auto;
            width: 50%;
            margin-top: 10%;
            text-align: center;
        }
        
        #frm h1 {
            margin-top: 0;
        }
        
        input[type="text"], input[type="password"] {
            padding: 10px;
            border-radius: 5px;
            border: none;
            margin: 10px;
            width: 70%;
            background-color: rgba(255, 255, 255, 0.8);
        }
        
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style> 
</head>

<body style="background-color:white;" >
<center>
	<h1 style="color: white">Security Check</h1>
	<tr><td>Rollno
		<input type="integer" name="rollno">
	</td></tr>
	<tr>
	<td><input type="submit" name="check" value="check"></td>
</tr>
</center>	

</body>
</form>
</html>