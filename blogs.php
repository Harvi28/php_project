<?php 
include_once("login.php"); 
    $sql = "select title, content, picture from author";		
		
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
		<<!DOCTYPE html>
		<html>
		<head>
			<link rel="stylesheet" href="blogs.css">
			<meta charset="utf-8">
			<title></title>
		</head>
		<body>
		
		
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
		  <?php echo $data['picture']; ?><br><br>
   
		<?php
		}
        ?>

</body>
</html>
