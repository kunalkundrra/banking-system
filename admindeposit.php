<html>
<head>
<title>Money Transfer By Bank - TSF Basic Bank System Project </title>
<link rel="stylesheet" href="styles.css">
</head>
<body bgcolor=skyblue>

<?php
include("connfile.php");
session_start();
$res="";
echo(date('Y/m/d'));

if($_SERVER['REQUEST_METHOD']=='POST')
{
  $v1=$_POST['text1'];
  $v2=$_POST['text2'];
  $v3=$_POST['text3'];
 
  $nvar=1001;
  $sqlvar="select max(tranno) + 1 from tranTab";
  $result=$conn -> query($sqlvar);

  if($row=$result->fetch_row())
  {
    $nvar=$row[0];
  }
  if($nvar===null){$nvar=01;}

  $d1=date('Y/m/d');

  $sqlvar="insert into tranTab values($nvar,'$d1',$v1,$v2,0,'$v3')";

  $result=$conn -> query($sqlvar);

  if($result)
  {
    $res="Transaction successful!";
  }
  else
  {
    $res="Sorry, Data not found!";
  }

}
?>

<form name=form1 method="post" action="admindeposit.php">

<table width=80% border=5 cellspacing=10 cellpadding=8 align=center>
<tr> <td colspan=2> <h3>Money Transfer</h3> </td> </tr>
<tr> <td> A/c No </td> <td> <input type=text name=text1> </td> </tr>
<tr> <td> Amount </td> <td> <input type=text name=text2> </td> </tr>
<tr> <td> A/c Details </td> <td> <input type=text name=text3> </td> </tr>

<tr> <td> <a href=adminmainpage.php> Previous </a> </td> <td> <input type=submit name=Login style="height: 50px; width: 200px"> </td> </tr>
<tr> <td colspan=2> <?php echo $res; ?> </td> </tr>
</table>
</form>

<table width=100%>
    <tr height=200> <td> </td> </tr>
</table>

</body>
</html>