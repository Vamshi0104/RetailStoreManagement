<?php
$conn = mysqli_connect("localhost", "root", "", "tester");
if(isset($_POST['save']))
{	 
	 $contact = $_POST['t2'];	
	 $sql = "DELETE FROM tbl_customer WHERE Contact='". $contact."'";
	 if (mysqli_query($conn, $sql)) {
		echo "<br><br><br><h1 align='center'> <font color=red  size='14pt'>Customer Removed Successfully !!</font> </h1>";
		header("Refresh:1; url= http://localhost/Roma/user.php");
	 } else {
		echo "<br><br><br><h1 align='center'> <font color=red  size='14pt'>Fill the Details Properly !!</font> </h1>";
		header("Refresh:1; url= http://localhost/Roma/remove_customer.php");
	 }
	 mysqli_close($conn);
}
?>