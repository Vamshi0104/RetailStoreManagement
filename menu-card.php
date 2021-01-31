<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="js/sjquery.min.js"></script>
<script src="js/sbootstrap.min.js"></script>
<link rel="stylesheet" href='css/sbootstrap.min.css'>
<link rel="stylesheet" href='css/sw3.css'>
 <link rel="stylesheet" href='fonts/font-awesome.min.css'>
 <link rel="stylesheet" href='css/font-awesome.min.css'>
<style>
table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
  text-align:center;
}
th, td {
  padding: 15px;
}
body{
		  background: url("images/whiteback.jpg");
	  }
a{
margin-top: 1px;
     margin-right: 2px;
}
a:link,a:visited
    {
        background-color: black;
        color:white;
        font-size: 16px;
        padding: 8px 16px;
         text-decoration: none;
        -webkit-transition-duration:0.4s;
        transition-duration:0.4s;
        cursor:pointer;
    }
    a:hover,a:active{
        background-color: green;
    }
</style>
</head>
<body>
<h1 align="center" style="color:green;">MENU CARD</h1><br>
&emsp;&emsp;&emsp;&emsp;<a href="user.php">&#127968; HOME</a><br><br>
<?php
$connect = mysqli_connect("localhost", "root", "", "tester");
$output = '';
$count=2;
echo '<h2 align="center" style="font-family:cursive;">&raquo; Products Page &laquo;</h2>';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM tbl_products";
}
else
{
	$query = "
	SELECT * FROM tbl_products";
}
$result = mysqli_query($connect, $query);
if((mysqli_num_rows($result) > 0))
{

	$output .= '<br><br>
<center>
					<table style="border: 2.5px solid black;">
						<tr>
							<th style="color:black;font-weight:900;font-family:arial;" width="10%">S.No</th>
							<th style="color:black;font-weight:900;font-family:arial;" width="30%">Product Code</th>
							<th style="color:black;font-weight:900;font-family:arial;" width="30%">Product Name</th></tr>';
	while(($row = mysqli_fetch_array($result)))
	{	
	$output .= '
		<tr>
		<td  style="color:black;font-weight:600;font-family:Times New Roman;" >'.$row["id"].'</td>
		<td  style="color:black;font-weight:600;font-family:Times New Roman;" >'.$row["pid"].'</td>
		<td  style="color:black;font-weight:600;font-family:Times New Roman;">'.$row["name"].'</td>	
		</tr>
		';
		$count++;
	}
}
else{
echo '<h2 align="center" style="color: black;">Data Not Found</h2>';
}
$output .='</table><br><br><br><br><br>';
echo $output;

?>
</body>
</html>