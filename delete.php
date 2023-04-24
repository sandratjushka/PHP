<?php
include_once 'database.php';
$result = mysqli_query($conn, "SELECT * FROM ISIKUD");
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="style.css">
	<title>Kustuta isikute andmed</title>
</head>

<body>
	<table>
		<tr>
			<td>Isiku ID</td>
			<td>Nimi </td>
			<td>sugu </td>
			<td>pikkus </td>
			<td>kaal </td>
			<td>synniaeg </td>
			<td>Action</td>
		</tr>
		<?php
		$i = 0;
		while ($row = mysqli_fetch_array($result)) {
		?>
			<tr class="<?php if (isset($classname)) echo $classname; ?>">
				<td><?php echo $row["Nimi"]; ?></td>
				<td><?php echo $row["sugu"]; ?></td>
				<td><?php echo $row["pikkus"]; ?></td>
				<td><?php echo $row["kaal"]; ?></td>
				<td><?php echo $row["synniaeg"]; ?></td>
				<td><a href="delete-process.php?id=<?php echo $row["Isikud_id"]; ?>">Kustuta</a></td>
			</tr>
		<?php
			$i++;
		}
		?>
	</table>
</body>

</html>