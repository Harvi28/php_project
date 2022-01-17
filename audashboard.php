<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="audashboard.css">
	<title>DashBoard Page</title>
</head>
<body>
	<div>
	<span class="a"><a href="addblog.php">Add New Blog</a></span>
	<span class="a"><a href="aulogin.php">Logout</a></span>
	</div>
    <?php
    include_once("login.php"); 
    //$sql = "select title, content, picture from author";	
		//$sql= "SELECT author.title, author.content, author.picture, authordet.image FROM author INNER JOIN authordet ON author.ID=authordet.ID";
	
		
    $db = mysqli_connect($hn, $un, $pw, $db); 
	if(!$db)
	{
		die("Connection failed: " . mysqli_connect_error());
	}
    $records = mysqli_query($db,$sql);
    //$data = mysqli_fetch_row($records);

		while($data = mysqli_fetch_array($records))
		{
			
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
		  
		  <label>Title:</label><br>
		  <?php echo $data['title']; ?><br><br>
		  <label>Content:</label><br>
		  <?php echo $data['content']; ?><br><br>
          <label>Picture:</label><br>
		  <img src="/var/www/html/project/images" <?php echo $data['picture']; ?> width="100" height="100"><br>
		 
   
		<?php
		}
        ?>

</body>
</html>