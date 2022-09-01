
<?php
//$username=$_POST["username"];
//$password=$_POST["password"];
header('Cache-Control: no cache'); 
session_cache_limiter('private_no_expire'); 
session_start() ;

$username=$_SESSION["username"] = $_POST["username"];
$password=$_SESSION["password"] = $_POST["password"];

	
  $conn=mysqli_connect("localhost","root","a4a49c778b201dbbd9e43e7d7c@123","mahindra");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// echo "<br>connection success<br>";
    $sql="select username,password from login_details where username='".$username."' ";
  $result=mysqli_query($conn,$sql);
  if (!$result) {
    die("Query to show fields from table failed");
}

$row = mysqli_fetch_assoc($result);
 //print_r($row);
//echo $row["username"]."<br>";
//echo $row["password"]."<br>";

//if($username==$row["username"]&&$password==$row["password"])
	//base64_decode($row["password"])
if($username==$row["username"]&&$password==base64_decode($row["password"]))
{
	//echo "login success";
	include('./front_page.php');
}
else
{
	
	include('./login.php');
	echo '<h3 class="shz-error-msg">Enter a valid username and password</h3>';
}


/*
if($_POST["username"]=="mahindra"&&$_POST["password"]=="admin")
{
	//echo "login success";
	include('./front_page.php');
}
else 
{
	
	include('./login.php');
	echo '<h3 class="shz-error-msg">Enter a valid username and password</h3>';
}
*/
?>