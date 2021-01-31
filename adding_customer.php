<?php
$conn = mysqli_connect("localhost", "root", "", "tester");
if(isset($_POST['save']))
{	 
	 $cacc = $_POST['t1'];
	 $cname= $_POST['t2'];
	 $contact = $_POST['t3'];
	 $routeno = $_POST['t4'];
	 $stopno = $_POST['t5'];
	$address = $_POST['t6'];
	 $sql = "INSERT INTO tbl_customer (CustomerAccountNumber,CustomerName,Contact,RouteNumber,StopNumber,Address)
	 VALUES ('$cacc','$cname','$contact','$routeno','$stopno','$address')";
	 if (mysqli_query($conn, $sql)) {
		echo "<br><br><br><h1 align='center'> <font color=green  size='14pt'>Customer Registered Successfully !!</font> </h1>";
		header("Refresh:1; url= http://localhost/Roma/user.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>