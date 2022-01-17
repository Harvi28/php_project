<?php 
include_once("login1.php"); 
    $sql = "select title, content, picture from author";		

    $result = "select ID from author";
    //echo "<pre>";print_r($result);die("sdf");
		
    $db = mysqli_connect($hn, $un, $pw, $db); 
	if(!$db)
	{
		die("Connection failed: " . mysqli_connect_error());
	}
    $records = mysqli_query($db,$sql);
    //$data = mysqli_fetch_row($records);

    //$Authorid = $_POST['ID'];
   // if($Authorid)
    //{
   // 	echo("sdf");
    //}

?>
		<!DOCTYPE html>
		<html>
		<head>
			<link rel="stylesheet" href="blogs.css">
			<meta charset="utf-8">
			<title></title>

		</head>
		<body>
		
		
          <div class="container" onclick="redirect()">
          
          	<?php
      			while($data = mysqli_fetch_array($records))
					{
						
					?>    	
             	<div class="panel">
             	<img src="images/<?php echo $data['picture']; ?>" width="300px" height="300px">
             	<p><?php echo $data['content']; ?></p>
             	
             	<!--<div>
             		<span class="left"><p>sdf</p></span>
             		<span class="right"><p>ttyl</p></span>		
             	</div>
             	<div class="foot"><p>footer</p>-->
             	</div>
             	<?php
						}
			      ?>

		  </div>

   
		

</body>
</html>
