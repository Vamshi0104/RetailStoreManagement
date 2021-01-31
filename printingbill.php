<?php
session_start();
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html>
<head>
<title>Printing Bill Page</title>
<style>
.footer {
   position:fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   padding:2px;
   background-color: #ccc;
   color: white;
   text-align: center;
}
#roma {
  width: 272px;
  border: 1.5px solid black;
  padding: 10px;
  margin: 20px;
  font-size:15px;
}
#customer{
  width: 272px;
  border: 1.5px solid black;
  padding: 10px;
  margin: 20px;
  font-size:15px;
  position:absolute;
   top:20px;
   right:0;
   -webkit-hyphens: auto;
  -moz-hyphens: auto;
  -ms-hyphens: auto;
  hyphens: auto;
}
#routestop{
  width: 120px;
  border: 1.5px solid black;
  padding: 1px;
  font-size:15px;
  position:absolute;
  top:0.5px;
  right:0.5px;
  -webkit-hyphens: auto;
  -moz-hyphens: auto;
  -ms-hyphens: auto;
  hyphens: auto;
}
#date{
position: absolute;
    bottom: 7px;
    right: 0;
}
</style>
</head>
<body style=" font-family: "Times New Roman", Times, serif;" onload="window.print()">
<a href="shop.php" title="Back">&larr;</a>
<?php 
$timestamp = time();  
date_default_timezone_set('Asia/Kolkata');
$datetime=date("F d, Y h:i:s A", $timestamp); 
?>



<div id="roma">
<b>Roma WholeSale</b><br>
50 S FOSTARIA AVE<br>
SPRINSFILD,OH 45505<br>
Phone: 937-325-9040; Fax: 937-325-2022
</div>
<div id="customer">
12132<br>
<?php echo $_SESSION["cname"];?><br>
<div id="routestop">
&nbsp;ROUTE : <?php echo $_SESSION["routeno"];?> <br>
&nbsp;STOP : <?php echo $_SESSION["stopno"];?>
</div>
<?php
echo $_SESSION["address"];
?>
<br>
Contact: <?php echo $_SESSION["contact"];?>
</div>
<br><br>
<?php
echo $_SESSION["table"];
?>
</div>
<br><br><br><p id="date" style="font-weight:600;"align="right"><?php echo $datetime;?></p><br>
<div class="footer">

  <footer style="color:black;font-weight:600;"><span>&#128591;&#127995;</span> Thank You & Visit Again <span>&#128591;&#127995;</span> </footer>
</div>
<script>
window.onbeforeunload = function() { alert("hello"); };
</script>
</body>
</html>