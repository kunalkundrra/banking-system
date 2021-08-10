<html>
<head>
<title>Transactions List - TSF Basic Bank System Project </title>
<link rel="stylesheet" href="styles.css">
</head>
<body bgcolor=skyblue>

<table align=center border=2 width=90% cellpadding=5 cellspacing=5>
<tr><td colspan=6><h3> Transactions List </h3> </td></tr>
<tr><td><h3> Transaction No. </h3> </td><td> <h3>Date</h3> </td><td> <h3>A/c No.</h3> </td><td> <h3>Debited Amount</h3></td><td> <h3>Credited Amount</h3></td><td> <h3>Details</h3></td></tr>

<?php
include("connfile.php");

  $sqlvar="select * from TranTab order by TranNo desc";
  $result=$conn -> query($sqlvar);

  while($row=$result->fetch_row()) {
    echo("<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td></tr>");
  }

?>
</table>
<h2><a href=adminmainpage.php> Previous </a></h2>

<table width=100%>
    <tr height=200> <td> </td> </tr>
</table>

</body>
</html>