<?php 
$hn = 'localhost';
$db = 'publications';
$un = 'root';
$pw = 'root';

//require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die("fatal error");

/*function mysql_fatal_error()
{
	echo <<< _END

	<p> Fatal error </p>

}
$query = "SELECT * FROM classics";
$result = $conn->query($query);
if(!$result) die("error");

$rows = $result->num_rows;
// echo $rows;die;
// $results = $result->fetch_array(MYSQLI_BOTH);
// echo "<pre>";print_r($results);die;
for($j=0; $j < $rows; $j++)
{
	echo $j;
	echo "<br/>";
   /* $result->data_seek($j);
    echo 'Author: '.htmlspecialchars($result->fetch_assoc()['author'])."<br>";
    echo "<br>";
    $result->data_seek($j);
    echo 'Title: '.htmlspecialchars($result->fetch_assoc()['title'])."<br>";
    echo "<br>";
    $result->data_seek($j);
    echo 'Category: '.htmlspecialchars($result->fetch_assoc()['category'])."<br>";
    echo "<br>";
    $result->data_seek($j);
    echo 'Year: '.htmlspecialchars($result->fetch_assoc()['year'])."<br>";
    echo "<br>";
    $result->data_seek($j);
    echo 'Isbn: '.htmlspecialchars($result->fetch_assoc()['isbn'])."<br>";
    echo "<br>";*/
    // $MYSQI_BOTH= array();

    /*$x = $result->fetch_array(MYSQLI_BOTH);
    // echo "<pre>";print_r($x);
    echo 'Author:' .htmlspecialchars($x['author']) .'<br>';
    echo 'Title:' .htmlspecialchars($x['title']) .'<br>';
    echo 'Category:' .htmlspecialchars($x['category']) .'<br>';
    echo 'Year:' .htmlspecialchars($x['year']) .'<br>';
    echo 'Isbn:' .htmlspecialchars($x['isbn']) .'<br>';

}
echo "<br>";*/

?>