<html>
<head>
<title>Admin Login - TSF Basic Bank System Project </title>
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
  $v3=$_POST['text3'];
  $v4=$_POST['text4'];
  
  $sqlvar="insert into actypeTab values('$v1','$v2','$v3',$v4)";
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
?>

<form name=form1 method="post" action="adminacdet.php">

<table width=80% border=5 cellspacing=10 cellpadding=8 align=center>
<tr> <td colspan=2><h3> A/c Type Registration </h3></td> </tr>
<tr> <td> A/c Type </td> <td> <input type=text name=text1> </td> </tr>
<tr> <td> savings / current / trinity </td> <td> <input type=text name=text2> </td> </tr>
<tr> <td> Facilities </td> <td> <input type=text name=text3> </td> </tr>
<tr> <td> Min Balance </td> <td> <input type=text name=text4> </td> </tr>
<tr> <td> <a href=adminmainpage.php> Previous </a> </td> <td> <input type=submit name=Login style="height: 50px; width: 200px"> </td> </tr>
<tr> <td colspan=2> <?php echo $res; ?> </td> </tr>
</table>
</form>

<table width=100%>
    <tr height=200> <td> </td> </tr>
</table>

</body>
</html>