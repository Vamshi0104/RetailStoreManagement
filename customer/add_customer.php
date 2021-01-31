<!DOCTYPE html>
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
	textarea{
	resize: none;
	}
</style>
</head>

<body>

<form action="adding_customer.php" method="post"><br><br><br><br>
  &emsp;&emsp;&emsp;&emsp;<a href="user.php">&#127968; HOME</a>
  <div class="tab" align="centre">

<h1 align="center"><b>Customer Register</b></h1><br><br>
<b>Customer Account Number</b><br>
<input type="text" name="t1" autofocus placeholder="@Customer Account Number" required><br>
   <b>Customer Name</b></p><input type="text" name="t2" autofocus placeholder="@CustomerName" pattern=".{4,}"maxlength="24" size="24" required><br>
 <b>Phone Number</b><br>
<input type="tel" name="t3" autofocus placeholder="@CustomerNumber" required><br>
<b>Route Number</b><br>
<input type="text" name="t4" autofocus placeholder="@RouteNumber" required><br>
<b>Stop Number</b><br>
<input type="text" name="t5" autofocus placeholder="@StopNumber" required><br>
 <b>Address</b><br>
 <textarea id="w3review" name="t6" placeholder="  @Customer Address"rows="4" cols="24" maxlength="90" required>
</textarea>

   <br><br>
<button type="submit" name="save">ADD</button><br><br>
</div>
  </form>
</body>
<script>
var maxLength = 90;
$('textarea').keyup(function() {
  var textlen = maxLength - $(this).val().length;
  if(textlen==0){
alert("Oops!! Maximum Limit for Customer Address is '90' ");
}
});
</script>
</html>
