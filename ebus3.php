<!DOCTYPE html>
<html>
<body>
<!--    //Starting the session to get the session variable from last page-->
<?php

session_start();
$totalValue2 = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];
$num1 = $_POST['txtNum'];
echo "The name is : ".$fullNameValue."."; 
echo " <br>";
echo "\r\n";
echo "The phone number is : ".$num1.".";
echo " <br>";
echo "The total value is : ".$totalValue2.".";

?>


</body>   <ul>
            <li><a class="active" href="index.php">Main Index</a></li>
            <li><a href="consultingserviceshomepage.html">Homepage</a></li>
            <li><a href="consultingservicesabout.html">About</a></li>
            <li><a href="ebus1.php">Services</a></li>
      </ul>
</html>
