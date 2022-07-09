<?php
include_once 'db.php';
$id = $_POST['id'];
$fn = $_POST['title'];
$ln = $_POST['body'];
$em = $_POST['author'];
$od = $_POST['odate'];
$cd = $_POST['cdate'];
$chkcount = count($id);

{
	$MySQLi_CON->query("UPDATE camps SET title='$fn[$i]', body='$ln[$i]', author='$em[$i]', 
	odate='$od[$i]', cdate='$cd[$i]' WHERE id=".$id[$i]);
}
header("Location: managecamps.php");
?>