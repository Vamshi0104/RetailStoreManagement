<?php
$conn = mysqli_connect("localhost", "root", "", "tester");
if(isset($_POST['save']))
{	 
	 $pcode = $_POST['t1'];
	 $pname = $_POST['t2'];
	 $sql = "INSERT INTO tbl_products (pid,name)
	 VALUES ('$pcode','$pname')";
	 if (mysqli_query($conn, $sql)) {
		echo "<br><br><br><h1 align='center'> <font color=green  size='14pt'>Product Added Successfully !!</font> </h1>";
		header("Refresh:1; url= http://localhost/Roma/admin.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>