<html>
<head>
<title>Customer - TSF Basic Bank System Project </title>
<link rel="stylesheet" href="styles.css">
</head>
<body bgcolor=skyblue>

<table align=center border=5 width=80% cellpadding=8 cellspacing=10>
<tr><td colspan=4 align=left> <h3><a href=custlogin.php>Click here to login!</a></h3> </td></tr>
<tr><td colspan=4> <h3>Please select the A/c type and then sign up</h3> </td></tr>
<tr><td><h3> A/c Name </h3> </td><td> <h3>Details</h3> </td><td> <h3>Facilities</h3> </td><td> <h3>Min Bal</h3></td></tr>


<?php
include("connfile.php");

  $sqlvar="select * from actypeTab order by actypename";
  $result=$conn -> query($sqlvar);

  while($row=$result->fetch_row()) {
    echo("<tr><td> <a href=custsignup.php?actype=".$row[0].">".$row[0]."</a></td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>");
  }

?>
</table>
<h2><a href=mainpage.php> Previous </a></h2>

<table width=100%>
    <tr height=200> <td> </td> </tr>
</table>

</body>
</html>