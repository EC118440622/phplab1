
<?php
session_start();
$fullNameValue = "";
$num1="";
$totalValue2 = "";
/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;
$_SESSION['txtNum'] = $num1;
 

?>

<!DOCTYPE html>
<html>
    <head>
            
        <style>
            ul {
              list-style-type: none;
              margin: 0;
              padding: 0;
              overflow: hidden;
              background-color: #333;
            }

            li {
              float: left;
            }

            li a {
              display: block;
              color: white;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
            }

            li a:hover {
              background-color: #111;
            }
    </style>
        <title>eBusiness 2</title>
        
     


    </head>
    <body>    <ul>
            <li><a class="active" href="index.php">Main Index</a></li>
            <li><a href="consultingserviceshomepage.html">Homepage</a></li>
            <li><a href="consultingservicesabout.html">About</a></li>
            <li><a href="ebus1.php">Services</a></li>
      </ul>
        <div class="form">
            <form name="Details" method="post" action="eBus3.php">
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b>Enter in your details below</b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value="" /></td>
                        </tr>
                        <tr>
                            <td>Phone number</td>
                            <td><input type="text" id="txtNum" name="txtNum" value="" /></td>
                        </tr>

                        <tr>
                            <td>Pin</td>
                            <td><input type="text" id="txtPin" name="txtPin" value=""  /></td>
                        </tr>
                        <tr>
   
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                        </tr>
                    </table>
                </center>
   
        <center>
                <input type="submit" name="btnCheck" id="btnCheck" onclick="" value="Proceed with Purchase"/>
                <input type="button" name="btnContinue" id="btnCalc" onclick="" value="Validate"/>
                
        </center
        </div>
        </form>
    </body>
</html>
