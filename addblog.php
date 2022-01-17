<?php 
require_once 'login.php';

// echo $upload_dir;die;
// echo "<pre>";print_r($_FILES['picture']);
// echo $tmp_img;

if(isset($_POST['title']) &&
   isset($_POST['content'])  &&
   isset($img_name) )

{
	$img_name = basename($_FILES["picture"]["name"]);
$img_name = str_replace(" ", "_", $img_name);
$tmp_img = $_FILES['picture']['tmp_name'];
$upload_dir = __DIR__.'/images/'.$img_name;

  	$title = $_POST['title'];
  	$content = $_POST['content'];
    
    move_uploaded_file($tmp_img, $upload_dir);

   
  	$query = "INSERT INTO author(title, content, picture) VALUES" . "('$title','$content','$img_name')";
  	
    $result = $conn->query($query);
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="addblog.css">
	<title>ADD NEW BLOG PAGE</title>
</head>
<body>
	<h1 align="center">ADD YOUR BLOG HERE</h1>
    <div class="blog">
    <form method="POST" enctype="multipart/form-data">
	<pre>
		<label>Title</label>
		<input type="title" name="title" id="title"><br>
		<label>Content</label>
		<textarea name="content" id="content" rows="5" cols="20"></textarea><br>
		<label>Picture</label>
		<input type="file" name="picture">
		<br>
		<input type="submit" name="submit" onsubmit="addblog.php">
	</pre>
    </form>
</div>
</body>
</html>
<?php 
?>