<html>
<head>
<title>Sign up - TSF Basic Bank System Project </title>
<link rel="stylesheet" href="styles.css">
</head>
<body bgcolor=skyblue>

<?php
include("connfile.php");
session_start();
$res="";
if($_SERVER['REQUEST_METHOD']=='POST')
{
 
  $v1=$_POST['text1'];
  $v2=$_POST['text2'];
  $v3=$_POST['text4'];
  $v4=$_POST['text5'];
  $v5=$_POST['text6'];
  $v6=$_POST['text7'];
  $v7=$_SESSION['actype'];

  $sqlvar="insert into CustAcTab values($v1,'$v2','$v3','$v4',$v5,'$v6','$v7','N')";

  $result=$conn -> query($sqlvar);

  if($result)
  {
    $res="Details are registered successfully!";
  }
  else
  {
    $res="Sorry, Data not found!";
  }

}

else{
  $_SESSION['actype']=$_GET['actype'];
}

?>


<form name=form1 method="post" action="custsignup.php">

<table width=80% border=5 cellspacing=10 cellpadding=8 align=center>
<tr> <td colspan=2> <h3>Create a TSF's Bank account</h3> </td> </tr>
<tr> <td> A/c Number (10 Digits) </td> <td> <input type=text name=text1> </td> </tr>
<tr> <td> Password </td> <td> <input type=password name=text2> </td> </tr>
<tr> <td> Confirm Password </td> <td> <input type=password name=text3> </td> </tr>
<tr> <td> Name </td> <td> <input type=text name=text4> </td> </tr>
<tr> <td> Address </td> <td> <textarea name=text5 rows=4></textarea> </td> </tr>
<tr> <td> Mobile Number </td> <td> <input type=text name=text6> </td> </tr>
<tr> <td> Email Address</td> <td> <input type=text name=text7> </td> </tr>


<tr> <td> <a href=custacdetlist.php> Previous </a> </td> <td> <input type=submit name=Login style="height: 50px; width: 200px" onclick="return validate()"> </td> </tr>
<tr> <td colspan=2> <?php echo $res; ?> </td> </tr>
</table>
</form>

<table width=100%>
    <tr height=200> <td> </td> </tr>
</table>


<script src="valid.js"></script>
</body>
</html>