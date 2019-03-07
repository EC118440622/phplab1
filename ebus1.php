<!--Creating a session variable and assigning it to txtTotal-->

<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>

<!DOCTYPE html>
<html lang="en" xmlns="http.//www.w3.org/1999/xhtml">
<head><style>
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
    <meta charset="utf-8" />
    <title>Ebusiness 1</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>   <ul>
            <li><a class="active" href="index.php">Main Index</a></li>
            <li><a href="consultingserviceshomepage.html">Homepage</a></li>
            <li><a href="consultingservicesabout.html">About</a></li>
            <li><a href="ebus1.php">Services</a></li>
      </ul> 
    <div class="form">
            <form name="intCalc" method="post" action="eBus2.php">
        <h1>Consulting Services</h1>
        <hr />
        <center>
                    <table cellspacing="10">
            <tr>
                            <td><b> Services</b></td>
            </tr>
            <tr>
                            <td>BlockChain</td>
                            <td><input type="radio" id="Bc" name="rdoGroup" value="1000" /></td>
                        </tr>               
            <tr>
                            <td>Autonomous Things(Robots)</td>
                            <td><input type="radio" id="At" name="rdoGroup" value="2000" /></td>
                        </tr>               
            <tr>
                            <td>Immersive Experience</td>
                            <td><input type="radio" id="Ie" name="rdoGroup" value="3000" /></td>
                        </tr>   
                    </table>
                </center>
    <br />

        <center>
            <table cellspacing="10">
        <tr>
                    <td><b></b></td>
                    <td><b>Amount</b></td>
        </tr>
        <tr>
                    <td>Sub Total</td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
        </tr>
        <tr>
                    <td>-Discount @10%</td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
        </tr>
                <tr>
                    <td>+VAT @20%</td>
                    <td><input type="text" id="txtVat" name="txtVat" readonly /></td>
        </tr>
                <tr>
                    <td>Total</td>
                    <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly /></td>
                </tr>
            </table>
        </center>
   
    <br />
        <center> <input type="submit" name="btnProceed" id="btnProceed" onclick="" value="add to shopping cart"/>
            <br></br>
                    <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Cost"/>
                    <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
                   
        </center>
    </form>
</div>
       
       <script type="text/javascript">
        function calcSub() {
            //Assigning variables to the values
            var argSubTotal = parseFloat(document.getElementById('txtSubTot').value);
            var Bc = parseFloat(document.getElementById('Bc').value);
            var At = parseFloat(document.getElementById('At').value);
            var Ie = parseFloat(document.getElementById('Ie').value);
           
//            If radio buttons are clicked, values are assigned
            if (document.getElementById('Bc').checked) {
                document.intCalc.txtSubTot.value = Bc;
                argSubTotal = Bc;
                calcDiscVatTotal(argSubTotal);
               
            }
        else if (document.getElementById('At').checked) {
                document.intCalc.txtSubTot.value = At;
                argSubTotal = At;
                calcDiscVatTotal(argSubTotal);
              
            }
        else if (document.getElementById('Ie').checked) {
                document.intCalc.txtSubTot.value = Ie;
                argSubTotal = Ie;
                calcDiscVatTotal(argSubTotal);
            }
        }   
       
         //Function for calculating the values
        function calcDiscVatTotal(parmSTotal){
           var subTotal = parseFloat(parmSTotal);
           var discCalc = parseFloat(subTotal * .10);
           var vatCalc = parseFloat(subTotal * .20);
           var total = parseFloat(subTotal - discCalc + vatCalc);
          
           //Inserting them into the correct fields
           document.intCalc.txtDisc.value = discCalc; 
           document.intCalc.txtVat.value = vatCalc;
           document.intCalc.txtTotal.value = total;
         
        }
//     

    </script>
   
    <script>
    function AmountClear(){
        document.getElementById("txtSubTot").value="";
    document.getElementById("txtDisc").value="";
        document.getElementById("txtVat").value="";
    document.getElementById("txtTotal").value="";
}
    </script>
</body>
</html>