<?php
include_once 'config.php';
$result = mysqli_query($connection,"SELECT * FROM tbl_customer");
?>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <script src="js/jquery.min.js"></script>
      <script src="js/select2.min.js"></script>
      <link rel="stylesheet" href='css/bootstrap.min.css'>
      <link rel="stylesheet" href='css/select2.min.css'>
      <title>Roma Wholesale Mart</title>
      <style>
	  body{
		  background-color:white;
		  color:black;
	  }
	.required{color: #FF0000;}
         .flag{background-color: #ff884b;padding: 10px;border-radius: 20px;color: white}
         #submitBtn{
         background-color: green;
         border-radius:0;
         padding: 8px 0;
         margin: 8px 0;
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
         #submitBtn:hover, #submitBtn:focus {
         background: green;
         }
         option:nth-child(N) {
         font-weight:bold;
         }
         span{
         font-weight:600;
         }
         .card-body
         {
         width:65%;
         margin:0 auto;
         }
		 .center {
  				margin:14.5% ;
				display: flex;
  				justify-content: center;
  				align-items: center;
  				text-align: center;
				}
			.buttona {
				width: 100px;
				margin: 10px;
				padding: 10px ;
  				text-align: center;
  				display: inline-block;
  				font-size: 16px;
  				cursor: pointer;
				}
			.buttona:hover { background-color: #2ECC40;			
  					color: white; }
			.buttonr {
				width: 100px;
				margin: 10px;
				padding: 10px ;
  				text-align: center;
  				display: inline-block;
  				font-size: 16px;
  				cursor: pointer;
				}
			.buttonr:hover { background-color: #FF4136;			
  					color: white; }
			.buttonm {
				width: 100px;
				margin: 10px;
				padding: 10px;
  				text-align: center;
  				display: inline-block;
  				font-size: 16px;
  				cursor: pointer;
				}
				.buttonm:hover { background-color: green;			
  					color: white; }
.buttonam {
				width: 100px;
				margin: 10px;
				padding: 10px;
  				text-align: center;
  				display: inline-block;
  				font-size: 16px;
  				cursor: pointer;
				}
				.buttonam:hover { background-color:blue;			
  					color: white; }
      </style>
   </head>
   <body>
      <div class="container">
         <?php
            include "config.php";
            $query = "SELECT CustomerName,CustomerAccountNumber FROM tbl_customer";
            $countries = $connection->query($query);
            ?>
         <div class="card-body">
            <br><h1 style="color:black;font-family:cursive;" class="card-title text-center">Roma Wholesale Mart</h1>
			<br><br><br>
            <form action="shop.php" method="post">
               <div class="form-label-group">
                  <label for="inputEmail"><b style="color:black;">Customer Name </b><span class="required">*</span></label>
                  <select name="select2" id="select2" class="form-control" required>
                     <option value=""  placeholder="Enter Customer Name">Enter Customer Name</option>
                     <?php
                        if ($countries->num_rows>0){
                            while ($i = $countries->fetch_object()){ ?>
                     <option value="<?php echo $i->CustomerName;?> ">&#10148; <span>Name :</span> <?php echo $i->CustomerName;?> |  Account Number : <?php echo $i->CustomerAccountNumber;?></option>
                     <?php  }
                        }
                        ?>
                  </select>
               </div>
               <br/><br/>
               <center><button type="submit" name="submitBtn" id="submitBtn" class="btn btn-md btn-primary btn-block text-uppercase" >PROCEED</button> </center>
			</form>
         </div>
		<div class="center">
  			<button onclick="window.location.href='add_customer.php';" type="button" id="Append" class="buttona" value=""><b>ADD<b></button>&nbsp;
			<button onclick="window.location.href='remove_customer.php';" type="button" id="Remove" class="buttonr" value=""><b>REMOVE</b></button>
			<button onclick="window.location.href='menu-card.php';" type="button" class="buttonm" value=""><b>MENU</b></button>
			<button onclick="window.location.href='admin.php';" type="button" class="buttonam" value=""><b>ADMIN</b></button>
		</div>
      </div>
      <script type="text/javascript">
         $("#select2").select2({
             templateResult: formatState
         });
         function formatState (state) {
             if (!state.id) {
                 return state.text;
             }
             var baseUrl = "flags";
             var $state = $(
                 '<span>' + state.text + '</span>'
             );
             return $state;
         }
      </script>
   </body>
</html>