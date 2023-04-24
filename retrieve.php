<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM ISIKUD");
?>
<!DOCTYPE html>
<html>
 <head>
 <link rel="stylesheet" href="style.css">
 <title> Retrieve data</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
  <td>Isiku ID </td>
    <td>Nimi </td>
    <td>sugu </td>
    <td>pikkus </td>
    <td>kaal </td>
	<td>synniaeg </td>
	<td>Action </td>
	<td>Action </td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["Isikud_id"]; ?></td>
    <td><?php echo $row["Nimi"]; ?></td>
    <td><?php echo $row["sugu"]; ?></td>
    <td><?php echo $row["pikkus"]; ?></td>
    <td><?php echo $row["kaal"]; ?></td>
	<td><?php echo $row["synniaeg"]; ?></td>
	<td><a href = "update-process.php?Isikud_id=<?php echo $row["Isikud_id"]; ?>">Update</a></td>
	<td><a href="delete-process.php?Isikud_id=<?php echo $row["Isikud_id"]; ?>">Delete</a></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>