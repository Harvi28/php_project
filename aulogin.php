<?php 
	include_once("login1.php");
	$valid = true;
	if(isset($_POST['email1']) && isset($_POST['pass1'])){
		
		//check in db
		$hash = password_hash($_POST['pass1'], PASSWORD_DEFAULT);
		$email = $_POST['email1'];
		$sql = "select Email, Password from authordet where Email = '$email'";		
		$db = mysqli_connect($hn, $un, $pw, $db); // 
		if(!$db)
		{
		    die("Connection failed: " . mysqli_connect_error());
		}
		$records = mysqli_query($db,$sql);
		$data = mysqli_fetch_row($records);
		

		if(isset($data[1]) == $hash && isset($data[0]) == $email){
			header('Location: audashboard.php ');
		}else{
			$valid = false;	
		}
		// header()
	}else{
		$valid = false;
	}
?>

<html>
<head>
	<link rel="stylesheet" href="aulogin.css">
	<!--<script type="text/javascript">
		function redirect()
		{
		    window.location.href = "audashboard.php";	
		}
	</script>-->
	<title>Login Page</title>
</head>
<body>
	<div class="login">
		<!--<?php 
		if($valid){
			//echo "Please enter valid user/password!";
            echo(redirect());
		}
		?>-->
		<h1>Login Form</h1>
		<form method="POST" action="aulogin.php">
		    <label>Email</label><br>
			<input type="email" name="email1" required><br><br>
			<label>Password</label><br>
			<input type="Password" name="pass1" requireds><br><br>
		   	<input type="submit" name="submit">
	    </form>
</div>
</body>
</html>