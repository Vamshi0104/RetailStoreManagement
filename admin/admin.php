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
      <title>Admin Page</title>
      <style>
	  body{
color:black;
	  }.required{color: #FF0000;}
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
      <div class="container">
<br><br><h1 style="color:black;font-family:cursive;" class="card-title text-center">Hello Admin !!</h1><br><br>
  &emsp;<a href="user.php">&#127968; HOME</a>
<br><br>
<h2 style="color:black;font-family:cursive;" class="card-title text-center">&raquo;This is Product Management Page &laquo;</h2>
		<div class="center">
  			<button onclick="window.location.href='add_products.php';" type="button" id="Append" class="buttona" value=""><b>ADD<b></button>&nbsp;
			<button onclick="window.location.href='remove_products.php';" type="button" id="Remove" class="buttonr" value=""><b>REMOVE</b></button>
			<button onclick="window.location.href='editing-products.php';" type="button" class="buttonam" value=""><b>EDIT</b></button>
			<button onclick="window.location.href='menu-card1.php';" type="button" class="buttonm" value=""><b>MENU</b></button>
		</div>
      </div>
   </body>
</html>