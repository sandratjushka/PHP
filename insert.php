<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="style.css">
	<title>Sisesta andmed</title>
</head>

<body>
	<h1>Sisesta ISIKUD andmed</h1>
	<form method="post" action="process.php">
		<table>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td>Nimi <input type="text" name="Nimi" required /></td>
			</tr>
			<tr>
				<td>sugu <input type="text" name="sugu" required /></td>
			</tr>
			<tr>
				<td>pikkus <input type="int" name="pikkus" required /></td>
			</tr>
			<tr>
				<td>kaal <input type="int" name="kaal" required /></td>
			</tr>
			<tr>
				<td>synniaeg <input type="date" name="synniaeg" required /></td>
			</tr>
			<tr>
				<td><button type="submit" name="submit"><strong>SAVE</strong></button></td>
			</tr>
		</table>
	</form>
</body>

</html>