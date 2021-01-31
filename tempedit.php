<?php
session_start();
include_once 'config.php';
if(isset($_POST['save'])){
    if(!empty($_POST['t1'])) {
        $pcode = $_POST['t1'];
		$_SESSION["prcode"]=$pcode;
	}
	if(!empty($_POST['t2'])) {
        $prid = $_POST['t2'];
		$_SESSION["pridonly"]=$prid;
	}
	}
	$sql = "SELECT name FROM tbl_products WHERE pid='". $_SESSION["prcode"]. "' and id='". $_SESSION["pridonly"]. "'";
	$result = mysqli_query($connection, $sql);
	if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
	$pname=$row["name"];	
	$_SESSION["prname"]=$pname;
		}
	}
header("Refresh:0; url= http://localhost/Roma/edit_products.php");
?>
