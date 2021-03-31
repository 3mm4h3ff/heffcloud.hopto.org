<?php
require('db.php');
include("auth.php");
include("admin.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="index.php">Home</a>  
| <a href="logout.php">Logout</a></p>
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>ID</strong></th>
<th><strong>User Name</strong></th>
<th><strong>Email</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from users ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
	<tr><td align="center"><?php echo $count; ?></td>
	<td align="center"><?php echo $row["username"]; ?></td>
	<td align="center"><?php echo $row["email"]; ?></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>
