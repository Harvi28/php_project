<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="audashboard.css">
	<title>DashBoard Page</title>
</head>
<body>
	<div class="block">
	<span class="a"><a href="addblog.php">Add New Blog</a></span>
	<span class="a"><a href="aulogin.php">Logout</a></span>
	</div>
    <?php
    include_once("login1.php"); 
    //$sql = "select title, content, picture from author";	
	$sql= "SELECT author.title, author.content, author.picture, authordet.name FROM author LEFT JOIN authordet ON author.ID=authordet.ID";
	
		
    $db = mysqli_connect($hn, $un, $pw, $db); 
	if(!$db)
	{
		die("Connection failed: " . mysqli_connect_error());
	}
    $records = mysqli_query($db,$sql);
    //$data = mysqli_fetch_row($records);

		while($data = mysqli_fetch_array($records))
		{
			// echo "<pre>";print_r($data);echo "</pre>";
			
		?>
		  <!--<tr>
		    <th>TITLE</th>
		    <th>CONTENT</th>
		    <td>PICTURE</td>
		  </tr>	
		  <tr>
		    <td><?php echo $data['title']; ?></td>
		    <td><?php echo $data['content']; ?></td>
		    <td><?php echo $data['picture']; ?></td>
		  </tr>	-->
		  
		 <div onclick="blogdetail.php">
		  <label>Name:</label><br>
		  <?php echo $data['name']; ?><br><br>
		  <label>Title:</label><br>
		  <?php echo $data['title']; ?><br><br>
		  <label>Content:</label><br>
		  <?php echo $data['content']; ?><br><br>
          <label>Picture:</label><br>
		  <img src="images/<?php echo $data['picture']; ?>" width="100" height="100"><br>
		 </div>
   
		<?php
		}
        ?>

</body>
</html>