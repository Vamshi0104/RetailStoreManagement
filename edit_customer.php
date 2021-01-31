<?php
session_start();
include_once 'config.php';
if(count($_POST)>0) {
mysqli_query($connection,"UPDATE tbl_customer set CustomerAccountNumber='" . $_POST['t1'] . "', CustomerName='" . $_POST['t2'] . "', Contact='" . $_POST['t3'] . "',RouteNumber='" . $_POST['t4'] . "',StopNumber='" . $_POST['t5'] . "',Address='" . $_POST['t6'] . "' WHERE CustomerName='" . $_SESSION['cname'] . "'");
header("Refresh:0; url= http://localhost/Roma/editing_customer.php");
}
?>
<html>
<head>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
color: black;
}
b
{
color: black;
}
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid black;
  box-sizing: border-box;
}

input[type=tel] {
  width: 70%;
  padding: 10px 10px;
  margin: 8px 0;
  display: inline-block;
border: 1px solid black;
  box-sizing: border-box;
}
button {
  background-color: green;
border-radius:0;
  padding: 15px 0;
  margin: 8px 0;
  border: 0;
  cursor: pointer;
  width: 50%;
font-size: 1.2rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: .1em;
  background: black;
  color:white;
  transition: all 0.5s ease;
  -webkit-appearance: none;
}
button:hover, button:focus {
  background: green;
}
div
{
 text-align: center;
   position: absolute;
  padding: 20px;
  margin: 25px;
 max-width: 500px;
  top: 65%;
    left: 50%;
color:black;
    margin-right: -50%;
 border-radius: 4px;
box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
    transform: translate(-50%, -50%)
}

input:focus, textarea:focus {
  outline:0;
  border-color:green;
}


canvas{
  /*prevent interaction with the canvas*/
  pointer-events:none;
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
	textarea {
  padding:10px;
  width:300px;
  font-size:14px;
  margin:10px auto;
  display:block;
  border: 1px solid black;
  box-sizing: border-box;
}
</style>
</head>
<body>
<form action="" method="post"><br><br><br><br>
  &emsp;&emsp;&emsp;&emsp;<a href="shop.php">BACK &larrhk;</a>
  <div class="tab" align="centre">
<h1 align="center"><b>Update Customer Details</b></h1><br><br>
<b>Customer Account Number</b><br>
<input type="text" name="t1" value="<?php echo $_SESSION["cacc"];?>" autofocus placeholder="@Customer Account Number" required><br>
 <b>Customer Name</b></p><input type="text" value="<?php echo $_SESSION["cname"];?>" name="t2" autofocus placeholder="@CustomerName" pattern=".{4,}"maxlength="24" size="24" required><br>
 <br>
 <b>Customer Phone Number</b><br>
<input type="tel" name="t3" value="<?php echo $_SESSION["contact"];?>" autofocus placeholder="@CountryCode+Number" pattern="[0-9]{10,}" required><br><br>
<b>Route Number</b><br>
<input type="text" name="t4" value="<?php echo $_SESSION["routeno"];?>" autofocus placeholder="@RouteNumber" required><br>
<b>Stop Number</b><br>
<input type="text" name="t5" value="<?php echo $_SESSION["stopno"];?>" autofocus placeholder="@StopNumber" required><br>
 <b>Customer Address</b><br>
 <textarea id="w3review" name="t6" autofocus placeholder="  @Customer Address" rows="4" cols="24" maxlength="80" required>
<?php echo htmlspecialchars($_SESSION["address"]); ?>
</textarea>
<button type="submit" name="save">UPDATE</button><br><br>
</div>
  </form>
</body>
<script>
var textarea = document.querySelector('textarea');

textarea.addEventListener('keydown', autosize);
             
function autosize(){
  var el = this;
  setTimeout(function(){
    el.style.cssText = 'height:auto; padding:0';
    // for box-sizing other than "content-box" use:
    // el.style.cssText = '-moz-box-sizing:content-box';
    el.style.cssText = 'height:' + el.scrollHeight + 'px';
  },0);
}
var maxLength = 80;
$('textarea').keyup(function() {
  var textlen = maxLength - $(this).val().length;
  if(textlen==0){
alert("Oops!! Maximum Limit for Customer Address is '80' ");
}
});
</script>
</html>
