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
include_once 'database.php';
$result = mysqli_query($conn,"SELECT rollno FROM requestform");
$fetch = mysqli_fetch_array($result);
$rollno = $fetch['rollno'];

    $sql = "INSERT INTO security SELECT rollno FROM requestform WHERE rollno='$rollno' && DELETE FROM requestform WHERE rollno ='$rollno'";
   
     if (mysqli_query($conn, $sql)) {
        echo "New record created successfully !";


     } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
     }
     mysqli_close($conn);

?>
</body>
</html>
