<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>insert_status</title>
   <style>
      body{
            background-image: url("https://th.bing.com/th?q=Dark+Pink+Background&w=120&h=120&c=1&rs=1&qlt=90&cb=1&dpr=1.5&pid=InlineBlock&mkt=en-IN&cc=IN&setlang=en&adlt=moderate&t=1&mw=247");
            color: white;
            background-size: cover;
      }
   </style>
</head>
<body>
<?php
include_once 'connectrform.php';
if(isset($_POST['Request']))
{    
     $name = $_POST['name'];
     $rollno = $_POST['rollno'];
     $roomno = $_POST['roomno'];
     $outpasstype= $_POST['outpasstype'];
     $outdate= $_POST['odate'];
     $indate= $_POST['idate'];
     $outtime= $_POST['otime'];
     $intime= $_POST['itime'];
     $place= $_POST['place'];
     $sql = "INSERT INTO requestform(name,rollno,roomno,outpasstype,outdate,indate,outtime,intime,place)
     VALUES ('$name', '$rollno', '$roomno', '$outpasstype', '$outdate', '$indate', '$outtime',  '$intime', '$place')";
     if (mysqli_query($conn, $sql)) {
        echo "successful";

     } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
</body>
</html>