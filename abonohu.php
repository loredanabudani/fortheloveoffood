<html>
<body>

<?php
if( isset ($_REQUEST ['email'])){
$emri=$_REQUEST['emri'];
$mbiemri=$_REQUEST['mbiemri'];
$email=$_REQUEST['email'];
mail("loredanabudani1@gmail.com","Subject:$subject",$message,"Form:$email");
echo "Thank you for using our email form! ";
}
else{
echo "<form method='post' action='mailform.php'>
Emri:<input name='emri' type='text'/> <br>
Mbiemri:<input name='mbiemri' type='text'/> <br>
Email:<input name='email' type='text'/> <br>

<input type='submit' value='Abonohu'>
</form>";
}
?>

</body>
</html>