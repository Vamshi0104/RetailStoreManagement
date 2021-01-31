<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
</head>
<style> 
input[type=button]  {
  padding: 9px 0;
  border: 0;
  cursor: pointer;
  padding: 0px;
font-size: 1rem;
width:120px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: .01em;
  background: black;
  color:white;
  transition: all 0.5s ease;
  -webkit-appearance: none;
}
input[type=button]:hover, input[type=button]:focus {
	 background: green;
}
</style>
<body>
<?php
$connect = mysqli_connect("localhost", "root", "", "tester");
$output = '';
$count=0;
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM tbl_products
	WHERE pid LIKE '%".$search."%'
	OR name LIKE '%".$search."%' 
	";
}
else
{
	$query = "
	SELECT * FROM tbl_products order by name LIMIT 10";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th style="width:100px;font-weight:900;font-family:arial;">Product Code</th>
							<th style="font-weight:900;font-family:arial;">Product Name</th>
							<th style="width:8px;font-weight:900;font-family:arial;">Quantity</th>
							<th style="font-weight:900;font-family:arial;">Action</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{	
	$output .= '
		<tr>
		<td><b>'.$row["pid"].'</b></td>
		<td><b>'.$row["name"].'<b></td>
		<td><input type="number" name="quantity" min="0" id="quantity'.$row["id"].'" class="form-control" value="1" /></td> 
		<input type="hidden" name="hidden_name" id="name'.$row["id"].'" value="'.$row["name"].'" /> 
		<input type="hidden" name="hidden_name1" id="idnum'.$row["id"].'" value="'.$row["id"].'" />	
		<input type="hidden" name="hidden_name2" id="pid'.$row["id"].'" value="'.$row["pid"].'" />
		<td><input type="button" name="add_to_cart" id="'. $row["id"].'" style="margin-top:5px;" class="btn btn-warning form-control add_to_cart"  value="Add to Cart" /></td>
		</tr>
		';
	}
	
echo $output;
	
}
else{
echo '<br><br><h1 align="center" style="color:red;font-family:cursive;">Oops!! Product is not available</h1>';
}
?>
<script>
$('.add_to_cart').click(function(obj){  
           var product_id = $(this).attr("id");  
           var product_name = $('#name'+product_id).val(); 
           var product_quantity = $('#quantity'+product_id).val();
		   var product_idnum= $('#idnum'+product_id).val();	
		   var product_pid= $('#pid'+product_id).val();	   
           var action = "add";  
           if(product_quantity > 0)  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{  
                          product_id:product_id,   
                          product_name:product_name,      
                          product_quantity:product_quantity,
						 product_idnum:product_idnum,
						 product_pid:product_pid,
                          action:action  
                     },  
                     success:function(data)  
                     {  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                     }  
                });  
           }  
           else  
           {  
                alert("Please Enter Number of Quantity")  
           }  
      });
</script>
</body>
</html>