<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Poll</title>
	<link rel="stylesheet" type="text/css" href="general.css" />
</head>

<body>
<?php
$con = mysql_connect("localhost","<sql_user>","sql_password");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("<sql database>", $con);

$result = mysql_query("SELECT * FROM user");

//variables
$pop = 0;
$int = 0;
$rat = 0;
$oro = 0;
$ors = 0;
$mor = 0;
$pra = 0;
$fol = 0;
$inn = 0;

echo "<table border='1'>
<tr>
<th>population</th>
<th>intuitive</th>
<th>rational</th>
<th>oreint_others</th>
<th>orient_self</th>
<th>morality</th>
<th>pragmatic</th>
<th>follower</th>
<th>innovator</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
$pop++;
if($row['intuitive'] > $row['rational'])
$int++;
else
$rat++;
if($row['orient_others'] > $row['orient_self'])
$orot++;
else
$ors++;
if($row['morality'] > $row['pragmatic'])
$mor++;
else
$pra++;
if($row['follower'] > $row['innovator'])
$fol++;
else
$inn++;
  
/*echo  "<tr>";
echo  "<td>".$row['uid']."</td>";
echo  "<td>".$row['date_entered']."</td>";
echo  "<td>".$row['intuitive']."</td>";
echo  "<td>".$row['rational']."</td>";
echo  "<td>".$row['orient_others']."</td>";
echo  "<td>".$row['orient_self']."</td>";
echo  "<td>".$row['morality']."</td>";
echo  "<td>".$row['pragmatic']."</td>";
echo  "<td>".$row['follower']."</td>";
echo  "<td>".$row['innovator']."</td>";
echo "</tr>";*/
  }
echo "<tr>
<td>".$pop."</td>
<td>".$int."</td>
<td>".$rat."</td>
<td>".$oro."</td>
<td>".$ors."</td>
<td>".$mor."</td>
<td>".$pra."</td>
<td>".$fol."</td>
<td>".$inn."</td>
</tr>";
echo "</table>";

mysql_close($con);
?> 
</body>

</html>
