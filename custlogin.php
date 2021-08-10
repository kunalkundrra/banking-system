<html>
<head>
<title>Customer Login - TSF Basic Bank System Project </title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
include("connfile.php");
session_start();
$_SESSION['acno']=00;
if($_SERVER['REQUEST_METHOD']=='POST')
{

  $v1=$_POST['email'];
  $v2=$_POST['password'];

  $sqlvar="select * from CustAcTab where acno=$v1 and pword='$v2' and custapp='Y'";
  $result=$conn -> query($sqlvar);

  if($result -> num_rows > 0)
  {
    $_SESSION['acno']=$v1;
    header('location: custmainpage.php');
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
		<h1 class="label">Customer Panel</h1>
		<form class="login_form" action="custlogin.php" method="post" name="form1">
			<div class="font">A/c Number</div>
			<input autocomplete="off" type="text" name="email">
			<div id="email_error">Please fill up your correct credentials</div>
			<div class="font font2">Password</div>
			<input type="password" name="password">
			<div id="pass_error">Please fill up your Passcode</div>
			<button type="submit">Login</button>
		</form>
	</div>	
	<script src="valid.js"></script>

</body>
</html>