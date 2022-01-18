<?php 
require_once 'login1.php';
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die("fatal error");
/*$query = "CREATE TABLE authordet(Name VARCHAR(32) NOT NULL,
                            Email VARCHAR(32) NOT NULL,
                            password VARCHAR(32) NOT NULL,
                            Gender CHAR(5) NOT NULL,
                            Intro VARCHAR(128) NOT NULL,
                            image VARCHAR(255) NOT NULL)"; */


if(isset($_POST['name']) &&
   isset($_POST['email'])  &&
   isset($_POST['pass'])  &&
   isset($_POST['gender'])  &&
   
   isset($_POST['image'])) 

{
  	$name = $_POST['name'];
  	$email = $_POST['email'];
   $password = $_POST['pass'];
   $hash = password_hash($password, PASSWORD_DEFAULT);
  	$gender = $_POST['gender'];
  	//$intro = $_POST['intro'];
  	$image = $_POST['image'];
  	$query = "INSERT INTO authordet(Name, Email, Password, Gender, image) VALUES" . "('$name','$email','$hash','$gender','$image')";
  
    $result = $conn->query($query);
    //if(!$result) echo "error<br><br>";

	if($result)
	{
		header('Location: audashboard.php ');
	}
} 




?>
<html>
<head>
	<link rel="stylesheet" href="authhor.css">
	<script type="text/javascript">
		function validate1(){
			
            name = document.getElementById("name").value
            email = document.getElementById("email").value
            password = document.getElementById("pass").value
            gender = document.getElementById("gender").value
            //intro = document.getElementById("intro").value
            image = document.getElementById("image").value
            
            if(name=="" || email=="" || password=="" || gender==""|| image=="")
            {
            	alert("Enter all the details");
            	return;
            }
            else if(password!==cpassword)
            {
            	alert("password is not maching")
            }
           
            

		}
	
	</script>
	<title>
		BAELDUNG
	</title>
</head>
<body>
	<h1 align="center"> WELCOME TO BAELDUNG</h1>
	<div class="frm">
		<h4 align="center">Register</h4><br>
		<form method="POST" onsubmit="validate1()">
    		<label>NAME</label><br>
			<input type="text" id="fname" name="name" size="100px" required><br><br>
			<label> EMAIL</label><br>
			<input type="Email" id="email" name="email" size="100px" required><br><br>
			<label> PASSWORD</label><br>
			<input type="Password" id="pass" name="pass" size="100px" required=""><br><br>
			<label>GENDER</label><br>
		    <div>
		    	<label for="male">Male</label>
				<input type="radio" id="male" name="gender" value="Male" checked>
			</div>
			<div>
				<label for="female">Female</label>
				<input type="radio" id="female" name="gender" value="Female">
			</div>
			<br/>
			
			<label>PROFILE PIC</label>
			<input type="file" name="image" width="50px" height="50px"><br>
			<h6><a href="aulogin.php" target="_blank"><< back to login </a></h6><br>
			<input type="submit" id="register" name="register" onsubmit="author.php">
</div>
</body>
</html>

<?php 
?>