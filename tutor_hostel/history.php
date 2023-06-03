<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM backup");
?>
<!DOCTYPE html>
<html>
 <head>
   <!-- <link rel = "stylesheet" type = "text/css" href = "style2.css">    -->
   <style>
		body {
			background-image: url("https://th.bing.com/th?q=Dark+Pink+Background&w=120&h=120&c=1&rs=1&qlt=90&cb=1&dpr=1.5&pid=InlineBlock&mkt=en-IN&cc=IN&setlang=en&adlt=moderate&t=1&mw=247");
      background-size: cover;
      color: black;
		}

		table {
			border-collapse: collapse;
			width: 100%;
			/* font-family: Arial, sans-serif; */
			font-size: 16px;
			margin-top: 30px;
			margin-bottom: 30px;
      background-color:white;
		}

		th {
			background-color: #4CAF50;
			color: white;
			font-weight: bold;
			padding: 8px;
			text-align: left;
			border: 1px solid #ddd;
		}

		td {
			padding: 8px;
			text-align: left;
			border: 1px solid #ddd;
		}

		tr:nth-child(even) {
			background-color: rgba(0, 0, 0, 0.8);
      color: white;
		}
	</style>
 <title> Requests</title>
 </head>
 <<?php include('history_header.php') ?>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<form>
  <table>
  
  <tr>
    <td>Name</td>
    <td>rollno</td>
    <td>roomno</td>
    <td>outpasstype</td>
    <td>outdate</td>
    <td>indate</td>
    <td>outtime</td>
    <td>intime</td>
    <td>place</td>
    <td>status</td>

  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["rollno"]; ?></td>
    <td><?php echo $row["roomno"]; ?></td>
    <td><?php echo $row["outpasstype"]; ?></td>
    <td><?php echo $row["outdate"]; ?></td>
    <td><?php echo $row["indate"]; ?></td>
    <td><?php echo $row["outtime"]; ?></td>
    <td><?php echo $row["intime"]; ?></td>
    <td><?php echo $row["place"]; ?></td>
    <td><?php echo $row["status"]; ?></td>


</tr>
<?php
$i++;
}
?>
</table>
</form>
 <?php
}
else{
    echo "No result found";
}
?>
 
 </body>
</html>