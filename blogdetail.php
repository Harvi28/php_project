<?php 
include_once("login.php"); 
    $result = "select title, content, picture from author";		
		
    $db = mysqli_connect($hn, $un, $pw, $db); 
	if(!$db)
	{
		die("Connection failed: " . mysqli_connect_error());
	}
    $records = mysqli_query($db,$result);
    if (!$records) {
        die("eror");
    }
    while($data = mysqli_fetch_array($records))
		{
		  //die("sdf");	
		
?>

s<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blog Detail Page</title>
</head>
<body>
   <label>Title:</label><br>
	  <?php echo $data['title']; ?><br><br>
	  <label>Content:</label><br>
	  <?php echo $data['content']; ?><br><br>
	  <label>Picture:</label><br>
	  <?php echo $data['picture']; ?><br><br>
	  <label>Name:</label><br>
	  <?php echo $data['name']; ?><br><br>
		  

    <?php
		}
    ?>

</body>
</html>