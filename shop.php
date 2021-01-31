<?php   
 session_start();  
error_reporting(E_ERROR | E_PARSE);
 $connect = mysqli_connect("localhost", "root", "", "tester");  
 include "config.php";
    if(isset($_POST['submitBtn'])){
    if(!empty($_POST['select2'])) {
        $cname = $_POST['select2'];
		$_SESSION["cname"]=$cname;
        #echo 'Customer Name : ' . $cname.'<br><br>';
	}
	else {
        #echo 'Please select the value.';
    }
	}
	$sql = "SELECT Contact FROM tbl_customer WHERE CustomerName='". $_SESSION["cname"]. "'";
	$result = mysqli_query($connection, $sql);

	if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    #echo "Contact : " . $row["Contact"]. "<br>";
	$contact=$row["Contact"];	
	$_SESSION["contact"]=$contact;
		}
	}
	#echo "Contact : " . $contact. "<br>";
	$sql1 = "SELECT Address FROM tbl_customer WHERE Contact='". $_SESSION["contact"]. "'";
	$result1 = mysqli_query($connection, $sql1);

	if (mysqli_num_rows($result1) > 0) {
  while($row1 = mysqli_fetch_assoc($result1)) {
	$address=$row1["Address"];	
	$_SESSION["address"]=$address;
		}
	}
	$sql2 = "SELECT CustomerAccountNumber FROM tbl_customer WHERE Contact='". $_SESSION["contact"]. "'";
	$result2 = mysqli_query($connection, $sql2);

	if (mysqli_num_rows($result2) > 0) {
  while($row2 = mysqli_fetch_assoc($result2)) {
	$cacc=$row2["CustomerAccountNumber"];	
	$_SESSION["cacc"]=$cacc;
		}
	}
	$sql3 = "SELECT StopNumber FROM tbl_customer WHERE Contact='". $_SESSION["contact"]. "'";
	$result3 = mysqli_query($connection, $sql3);

	if (mysqli_num_rows($result3) > 0) {
  while($row3 = mysqli_fetch_assoc($result3)) {
	$stopno=$row3["StopNumber"];	
	$_SESSION["stopno"]=$stopno;
		}
	}
	$sql4 = "SELECT RouteNumber FROM tbl_customer WHERE Contact='". $_SESSION["contact"]. "'";
	$result4 = mysqli_query($connection, $sql4);

	if (mysqli_num_rows($result4) > 0) {
  while($row4 = mysqli_fetch_assoc($result4)) {
	$routeno=$row4["RouteNumber"];	
	$_SESSION["routeno"]=$routeno;
		}
	}
?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Shopping Cart</title>  
          <script src="js/sjquery.min.js"></script>
<script src="js/sbootstrap.min.js"></script>
<link rel="stylesheet" href='css/sbootstrap.min.css'>
<link rel="stylesheet" href='css/sw3.css'>
 <link rel="stylesheet" href='fonts/font-awesome.min.css'>
 <link rel="stylesheet" href='css/font-awesome.min.css'>
<style>
body{

	  }
.buttone {
				width: 160px;
				margin-right:10px;
				margin: 10px;
				padding: 10px ;
  				text-align: center;
  				display: inline-block;
  				font-size: 16px;
  				cursor: pointer;
				position:absolute; top:0; right:0;
				}
			.buttone:hover { background-color: #0074D9;			
  					color: white; }
.buttone1 {
				width: 160px;
				margin-right:0px;
				margin: 130px 10px;
				padding: 10px ;
  				text-align: center;
  				display: inline-block;
  				font-size: 16px;
  				cursor: pointer;
				position:absolute; top:0; right:0;
				}
			.buttone1:hover { background-color: red;			
  					color: white; }	
#home{
margin-top: 10px;
     margin-right: 2px;
}
#home:link,#home:visited
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
    #home:hover,#home:active{
        background-color: green;
    }					
	table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
	  }
	  td, th {
  border: 2.5px solid black;
  text-align: center;
  padding: 8px;
}
#value1 {
  background-color: green;
border-radius:0;
  padding: 9px 0;
  margin: 0px 0;
  border: 0;
  cursor: pointer;
  width: 50%;
font-size: 1.3rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: .1em;
  background: black;
  color:white;
  transition: all 0.5s ease;
  -webkit-appearance: none;
}
#value1:hover, #value1:focus {
	 background: green;
}
input[type=number]
{
	text-align:center;
	width:80px;
}
#delete
{
}
#delete:hover
{
	background-color:red;
	color:white;
}
.material-icons
{
vertical-align:-14%;
}
</style>		   
      </head>  
      <body>
	  
<button onclick="window.location.href='edit_customer.php';" name="saving" type="button" id="Append" class="buttone" value=""><b>EDIT PROFILE</b></button>&nbsp;
<button onclick='logout()' name="saving" type="button" id="Append" class="buttone1" value=""><b>LOGOUT</b></button>&nbsp;
<br>&emsp;&emsp;<a id="home" href="" onclick='home()'>&#127968; HOME</a>		  
           <br />  
		   
           <div class="container"  style="color:black;width:850px;">  
               <h2 align="center" style="color:black;font-family:cursive;font-weight:600">Roma Shopping Cart</h2><br><br />  
                <ul class="nav nav-tabs">  
                     <li class="active"><a data-toggle="tab" href="#products"><b style="color:green;font-weight:600;">Products</b></a></li>  
                     <li><a data-toggle="tab" href="#cart"><b style="color:green;font-weight:600;">Cart <span class="badge"><?php if(isset($_SESSION["shopping_cart"])) { echo count($_SESSION["shopping_cart"]); } else { echo '0';}?></span></b></a></li> 
                </ul> <br><br>
				<div class="tab-content"> 
				<div id="products" class="tab-pane fade in active">
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text" name="search_text" id="search_text" placeholder="Search by Product Code or Product Name" class="form-control" />
				</div>
			</div>
			<br />
			<div id="result"></div>				
			
			<div style="clear:both"></div>				
					 
            </div> 
			<div id="cart" class="tab-pane fadee"> <br> 
                          <div class="table-responsive" id="order_table">  
                               <table style="border: 2.5px solid black;">  
                                    <tr>  
									<th style="color:black;font-weight:900;font-family:arial;" width="20%">Product Code</th>
                                         <th style="color:black;font-weight:900;font-family:arial;" width="40%">Product Name</th>  
                                         <th style="color:black;font-weight:900;font-family:arial;" width="10%">Quantity</th>   
                                         <th style="color:black;font-weight:900;font-family:arial;" width="5%">Action</th>  
                                    </tr>  
                                    <?php  
                                    if(!empty($_SESSION["shopping_cart"]))  
                                    {  
                                         $total = 0;  
                                         foreach($_SESSION["shopping_cart"] as $keys => $values)  
                                         {                                               
                                    ?>  
                                    <tr> 
										<td style="color:black;font-weight:600;font-family:Times New Roman;"><?php echo $values["product_pid"]; ?></td>									
                                         <td style="color:black;font-weight:600;font-family:Times New Roman;" ><?php echo $values["product_name"]; ?></td>  
                                         <td style="color:black;font-weight:600;font-family:Times New Roman;"><input type="number" min="1" name="quantity[]" id="quantity<?php echo $values["product_id"]; ?>" value="<?php echo $values["product_quantity"]; ?>" data-product_id="<?php echo $values["product_id"]; ?>" class="form-control quantity" disabled/></td>   
                                         <td style="color:black;font-weight:600;font-family:Times New Roman;"><button name="delete" id="delete" class="btn btn-danger btn-xs delete" id="<?php echo $values["product_id"]; ?>">Remove</button></td>  
                                    </tr>  
                                    <?php  
                                         }  
                                    ?>     
                                    <?php  
                                    }  
                                    ?>  
                               </table>
<br> 
							   <center>
								<form method="post" action="printingbill.php">  
                                    <input type="submit" id="value1" name="place_order" class="btn btn-warning" value="Print Bill" />  
                                </form> 
								</center><br><br><br><br>								   
                          </div>  
                     </div>
			</div>
</div>			
      </body>  
 </html>  
 <script>
function home()
{
	if (window.confirm('Are your Sure? All the Data will be lost on clicking "YES" '))
	{
		window.setTimeout(function(){
        window.location.href = "logout.php";
    },0.0001);
	}
}
function logout()
{
	if (window.confirm('Are your Sure to Logout? All the Data will be lost on clicking "YES" '))
	{
		window.setTimeout(function(){
        window.location.href = "logout.php";
    },0.0001);
	}
}
 </script>
 <script>  
 $(document).ready(function(data){ 
load_data();
	function load_data(query)
	{
		$.ajax({
			url:"fetch.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	}); 
      $(document).on('click', '.delete', function(){  
           var product_id = $(this).attr("id");  
           var action = "remove";  
           $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                     }  
                }); 	  
      }); 
 });  
 </script>