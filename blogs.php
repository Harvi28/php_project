<?php 
include_once("login1.php"); 
    $sql = "SELECT author.title, author.content, author.picture, authordet.name FROM author LEFT JOIN authordet ON author.ID=authordet.ID";		

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
			<title>Blog Page</title>
            
		</head>
		<body>
		
		
          <div class="container" >
          
          	<?php
      			while($data = mysqli_fetch_array($records))
					{	
					?>
				   	
             	<div class="panel" id="panel">
             	<a href="blogdetail.php?id=<?php echo $data['id']; ?>"><img src="images/<?php echo $data['picture']; ?>" width="300px" height="300px" ></a>
             	<p><?php echo $data['content']; ?></p>
             	
             	<div>
             		<span class="left"><b><p><?php echo $data['title']; ?></p></b></span>
             		
             	</div>
             	
             	</div>
          
             	<?php
						}
			      ?>

		  </div>

   
		

</body>
</html>
