<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="blogdetail.css">
	<title>Blog Detail Page</title>
	<script>
	
	</script>
</head>
<body>
	<img src="images/blogimage.jpeg" class="responsive">

<?php 
include_once("login1.php"); 
   // $resultid= "SELECT ID from author";
$blog_id = $_GET['id'];
    $result = "SELECT author.title, author.content, author.picture, authordet.name FROM author LEFT JOIN authordet ON author.ID=authordet.ID where author.id = $blog_id";
    // echo $result;	
   
		
    $db = mysqli_connect($hn, $un, $pw, $db); 
	if(!$db)
	{
		die("Connection failed: " . mysqli_connect_error());
	}
    $records = mysqli_query($db,$result);
     	
    if (!$records) {
        die("error");
    }
    $data = mysqli_fetch_array($records);
		
		  //die("sdf");	
			//if($resultid){
         //echo "<pre>";
         //print_r($data);
         //die("sdf");

		
        ?>
   
	<div class="container" >
		<div class="left">
			<h1><?php echo $data['title']; ?></h1>
			<h3><?php echo $data['name']; ?></h3>
		    <p><?php echo $data['content'];?> </p>
		</div>
		<div class="right">
			<img src="images/<?php echo $data['picture']; ?>" width="100" height="100">
		</div>
	</div>

    <?php
    //die(" ");
	
		//}
	   //}
    ?>

</body>
</html>