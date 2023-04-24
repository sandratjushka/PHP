<?php
include_once 'database.php';
if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE ISIKUD SET Nimi='" . $_POST['Nimi'] . "', sugu='" . $_POST['sugu'] . "', pikkus='" . $_POST['pikkus'] . "', kaal='" . $_POST['kaal'] . "', synniaeg='" . $_POST['synniaeg'] . "' WHERE Isikud_id='" . $_POST['Isikud_id'] . "'");
    $message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM ISIKUD WHERE Isikud_id='" . $_GET['Isikud_id'] . "'");
$row= mysqli_fetch_array($result);
?>

<html>
<head>
<title>Update ISIKUD Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="update.php">Isikud</a>
</div>
Nimi: <br>
<input type="hidden" name="Isikud_id" value="<?php echo $row['Isikud_id']; ?>">
<input type="text" name="Nimi" class="txtField" value="<?php echo $row['Nimi']; ?>">
<br>
Sugu: <br>
<input type="text" name="sugu" class="txtField" value="<?php echo $row['sugu']; ?>">
<br>
Pikkus: <br>
<input type="text" name="pikkus" class="txtField" value="<?php echo $row['pikkus']; ?>">
<br>
Kaal: <br>
<input type="text" name="kaal" class="txtField" value="<?php echo $row['kaal']; ?>">
<br>
Sünniaeg: <br>
<input type="date" name="synniaeg" class="txtField" value="<?php echo $row['synniaeg']; ?>">
<br><br>
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>