<?php
$conn = mysqli_connect("localhost", "root", "", "tester");
if(isset($_POST['save']))
{	 
	 $psn = $_POST['t1'];	
	 $sql = "DELETE FROM tbl_products WHERE id='". $psn."'";
	 if (mysqli_query($conn, $sql)) {
		echo "<br><br><br><h1 align='center'> <font color=red  size='14pt'>Product Removed Successfully !!</font> </h1>";
		header("Refresh:1; url= http://localhost/Roma/admin.php");
	 } else {
		echo "<br><br><br><h1 align='center'> <font color=red  size='14pt'>Check the Details Properly !!</font> </h1>";
		header("Refresh:1; url= http://localhost/Roma/remove_products.php");
	 }
	 mysqli_close($conn);
}
?>