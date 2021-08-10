<html>
<head>
<title>Admin Login - TSF Basic Bank System Project </title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
include("connfile.php");
session_start();

if($_SERVER['REQUEST_METHOD']=='POST')
{
  $v1=$_POST['email'];
  $v2=$_POST['password'];
  
  $sqlvar="select * from logintab where userid='$v1' and pword='$v2'";
  $result=$conn -> query($sqlvar);

  if($result -> num_rows > 0)
  {
    header('location: adminmainpage.php');
  }
  else
  {
    echo('userid or password is not correct');
  }

}
?>

<div class="container">
  <img src="images/bank.jpg">
  <div class="centered"> <h1>TSF's Basic Banking System</h1> 
</div>

	<div class="container-two">
		<h1 class="label">Admin Login Panel</h1>
		<form class="login_form" action="adminlogin.php" method="post" name="form1">
			<div class="font">Email or Phone</div>
			<input autocomplete="off" type="text" name="email">
			<div id="email_error">Please fill up your correct credentials</div>
			<div class="font font2">Password</div>
			<input type="password" name="password">
			<div id="pass_error">Please fill up your Passcode</div>
			<button type="submit">Login</button>
		</form>
	</div>	
</body>
</html>