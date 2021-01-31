<?php  
 //action.php  
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "tester"); ?>
 <?php
 if(isset($_POST["product_id"]))  
 {  
      $order_table = '';
	  $order_table1 = '';	  
      $message = '';  
      if($_POST["action"] == "add")  
      {  
           if(isset($_SESSION["shopping_cart"]))  
           {  
                $is_available = 0;  
                foreach($_SESSION["shopping_cart"] as $keys => $values)  
                {  
                     if($_SESSION["shopping_cart"][$keys]['product_id'] == $_POST["product_id"])  
                     {  
                          $is_available++;  
                          $_SESSION["shopping_cart"][$keys]['product_quantity'] = $_SESSION["shopping_cart"][$keys]['product_quantity'] + $_POST["product_quantity"];  
                     }  
                }  
                if($is_available < 1)  
                {  
                     $item_array = array(  
                          'product_id'               =>     $_POST["product_id"],  
                          'product_name'               =>     $_POST["product_name"],
                          'product_idnum'               =>     $_POST["product_idnum"],  
						  'product_pid'               =>     $_POST["product_pid"],
                          'product_quantity'          =>     $_POST["product_quantity"]  
                     );  
                     $_SESSION["shopping_cart"][] = $item_array;  
                }  
           }  
           else  
           {  
                $item_array = array(  
                     'product_id'               =>     $_POST["product_id"],  
                     'product_name'               =>     $_POST["product_name"],  
                     'product_idnum'               =>     $_POST["product_idnum"],
					'product_pid'               =>     $_POST["product_pid"],					 
                     'product_quantity'          =>     $_POST["product_quantity"]  
                );  
                $_SESSION["shopping_cart"][] = $item_array;  
           }  
      }  
  
      if($_POST["action"] == "remove")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["product_id"] == $_POST["product_id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     $message = '<h3 align="center" style="color:red;font-weight:600;font-family:serif;"class="text-success">Product Removed</h3><br>';			
                }  
           }  
      }  
      if($_POST["action"] == "quantity_change")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($_SESSION["shopping_cart"][$keys]['product_id'] == $_POST["product_id"])  
                {  
                     $_SESSION["shopping_cart"][$keys]['product_quantity'] = $_POST["quantity"];  
                }  
           }  
      }
      $order_table .= '  
           '.$message.'  
           <table style="border:1px solid black;font-family: arial, sans-serif;font-weight:600;">  
                <tr>  
				<th width="20%">Product Code</th>
                     <th width="40%">Product Name</th>  
                     <th width="10%">Quantity</th>   
                     <th width="5%">Action</th>  
                </tr>  
           ';
	$order_table1 .= '  
           <center> 
           <table style="border-collapse:collapse;font-family:arial,sans-serif;">  
                <tr> 
					<th style=" border:1px solid black;text-align:center;padding:4px;">&emsp;&emsp;&emsp;&emsp;&emsp;</th>
					<th style=" border:1px solid black;text-align:center;padding:4px;">Product Code</th>
                     <th style=" border:1px solid black;text-align:center;padding:4px;">Quantity</th>  
                     <th style=" border:1px solid black;text-align:center;padding:4px;">Product Name</th>    
                </tr>  
           ';
      if(!empty($_SESSION["shopping_cart"]))  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                $order_table .= '  
                     <tr>  
					 
					 <td>'.$values["product_pid"].'</td> 
                          <td>'.$values["product_name"].'</td>
						  						  
                          <td><input type="number" min="1" name="quantity[]" id="quantity'.$values["product_id"].'" value="'.$values["product_quantity"].'" class="form-control quantity" data-product_id="'.$values["product_id"].'" disabled/></td>  
                          <td><button name="delete" class="btn btn-danger btn-xs delete" id="'.$values["product_id"].'">Remove</button></td>  
                     </tr>  
                ';  
				$order_table1 .= '  
                     <tr>  
					 <td style=" border:1px solid black;text-align:center;padding:4px;"> </td>
						  <td style=" border:1px solid black;text-align:center;padding:4px;">'.$values["product_pid"].'</td> 
						  <td style=" border:1px solid black;text-align:center;padding:4px;">'.$values["product_quantity"].'</td>						                         						  
						<td style=" border:1px solid black;text-align:center;padding:4px;">'.$values["product_name"].'</td> 						  
                     </tr>  					 
                ';				
           }  
      }  
      $order_table .= '</table>';
	  $order_table1 .= '</table></center>';
	  $_SESSION["table"]=$order_table1;
           $order_table = $order_table.'   
                     <br><center> 
                          <form method="post" action="printingbill.php">					  
                               <input type="submit" id="value1" name="place_order" class="btn btn-warning" value="Print Bill" />  
                          </form>  
					<center><br><br><br><br>  						  
           ';
      $output = array(  
           'order_table'     =>     $order_table,  
           'cart_item'          =>     count($_SESSION["shopping_cart"])  
      );  
      echo json_encode($output);  
 }
 ?>