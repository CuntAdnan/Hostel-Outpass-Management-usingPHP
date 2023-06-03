<!DOCTYPE html>
<html>
<head>
	<title>header</title>
	    <!-- <link rel = "stylesheet" type = "text/css" href = "headerstyle.css"> -->
      <style>
  .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    color: white;
  }

  .header h1 {
    margin: 0;
    font-size: 28px;
    font-weight: bold;
  }

  .header a {
    color: white;
    text-decoration: none;
    /* margin-left: 0px; */
    font-size: 20px;
    padding: 10px;
		margin: 10px;
		border: none;
		border-radius: 5px;
		background-color: #4CAF50;
  }

  .header a:hover {
    text-decoration: underline;
  }
</style>
</head>
<body >
	<div class="header">
     <!-- <img src="logo.jpg" alt="logo" /> -->
     <h1> International Institute of Information Technology, Naya Raipur  </h1>
    <div class="header-right">
     <a class="active" href="history.php">History</a>
     <a href="https://www.iiitnr.ac.in/">About</a>
  </div>
</div>

</body>
</html>