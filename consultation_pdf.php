<!--
<?php
/*
include 'connection.php';

require 'fpdf182/fpdf.php';

if (isset($_GET['consultation_pdf'])) {
  $no=$_GET['consultation_pdf'];
  $res=mysqli_query($conn,"SELECT * FROM daily WHERE no='$no'");
  $row=mysqli_fetch_array($res);



$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",20);
$pdf->Cell(100,20,"Dr. Ajayakumar's Clinic",0,1,"C");
$pdf->SetFont("Arial","B",12);
$pdf->Cell(50,10,"Name :",0,0);
$pdf->Cell(50,10,$row['name'],0,1);
$pdf->Cell(50,10,"Place :",0,0);
$pdf->Cell(50,10,$row['place'],0,1);
$pdf->Cell(50,10,"Age :",0,0);
$pdf->Cell(50,10,$row['age'],0,1);
$pdf->Cell(50,10,"Date :",0,0);
$pdf->Cell(50,10,$row['date'],0,1);
$pdf->Cell(50,10,"Token :",0,0);
$pdf->Cell(50,10,$row['code'],0,1);
$pdf->Cell(50,10,"Consultation Details:",0,1);
$pdf->line(5,80,205,80);
$pdf->ln(5);
$pdf->Cell(50,10,$row['consultation'],0,0);
$pdf->line(5,200,205,200);
$pdf->Output();

}
*/
?>
<a class="float-right" href="logout.php">Logout</a>
-->

 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>DR. AJAYAKUMAR'S CLINIC</title>
        <link rel="stylesheet" href="style-new.css" media="all" />
    </head>
    <body>
    <h1>  <a title="print" alt="print" onclick="window.print();" target="_blank" style="cursor:pointer;"> Print </a> </h1>
        <div id="container" style="height: 21cm;">
            <div id="header">
                <div id="logo">
                    <img src="images.jfif" alt="ST. THOMAS HOSPITAL" height="90px" width="100%">
                    <!--<img src="http://placehold.it/230x70&text=logo" alt="">-->
                </div>
                <div id="reference">
                    <h1 onclick="window.print();"><strong>DR. AJAYAKUMAR'S CLINIC</strong></h1>
                    <h3><strong>HOMOEOPATHY, ALLOPATHY, AYURVEDAM, X-RAY, ECG, ICU & LABORATORY, PUNALUR</strong></h3>
                    <p><strong>PHONE: 0475 - 2222399, E-MAIL: stthomashospitalpunalur@gmail.com</strong></p>

                </div>
            </div>
            <div style="padding: 1px;"></div>
            <div id="fromto" class="heading_style">
                <div id="from">
                    <p>
                        <strong>Ref No:</strong> 10-2522<br>
                        <strong>Bill No:</strong> 85858<br>
                        <strong>Ref: By Dr:</strong>Ajayakumar <br>
                    </p>
                </div>


<?php include 'connection.php';

require 'fpdf182/fpdf.php';

if (isset($_GET['consultation_pdf'])) {
  $no=$_GET['consultation_pdf'];
  $res=mysqli_query($conn,"SELECT * FROM daily WHERE no='$no'");
  $row=mysqli_fetch_array($res);


 ?>

                <div id="to">
                    <p>
                        <strong>Date:</strong> <?php echo $row['date']; ?><br>
                        <strong>Patient Name:</strong> <?php echo $row['name'];  ?><br>
                        <strong>Gender:</strong> <?php //
                        if (!empty($row['gender'])) {
                          echo $row['gender'];
                      } else {
                          echo "__";
                        }
                         ?><br>
                        <strong>Age:</strong> <?php echo $row['age'];  ?> Yrs<br>
                        <strong>Token:</strong> <?php echo $row['code'];  ?> <br>
                    </p>
                </div>
            </div>

            <div id="items">
                <table>
                    <tr>
                        <th>S. No.</th>
                        <th>Particular</th>
                        <th>Total</th>
                        <!--<th>P.U. HT</th>-->
                        <!--<th>Qté</th>-->
                        <!--<th>Total HT</th>-->


                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Doctor Consulting <br> <?php echo $row['consultation']; }?></td>
                        <td>150.00</td>
                        <!--<td>1</td>-->
                        <!--<td>3,99</td>-->
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Medicine Charge</td>
                        <td>250.00</td>
<!--                        <td></td>
                        <td></td>-->
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Injection</td>
                        <td>50.00</td>
<!--                        <td></td>
                        <td></td>-->
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
<!--                        <td></td>
                        <td></td>-->
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
<!--                        <td></td>
                        <td></td>-->
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
<!--                        <td></td>
                        <td></td>-->
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
<!--                        <td></td>
                        <td></td>-->
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
<!--                        <td></td>
                        <td></td>-->
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
<!--                        <td></td>
                        <td></td>-->
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
<!--                        <td></td>
                        <td></td>-->
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
<!--                        <td></td>
                        <td></td>-->
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
<!--                        <td></td>
                        <td></td>-->
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
<!--                        <td></td>
                        <td></td>-->
                    </tr>
                    <tr style="height: 7cm">
                        <td></td>
                        <td></td>
                        <td></td>
<!--                        <td></td>
                        <td></td>-->
                    </tr>

                </table>
            </div>

            <div id="summary">
                <div id="note">
                    <h4>Note :</h4>
                    <p></p>
                </div>
                <div id="total">
                    <table border="1">
                        <tr>
                            <td>TOTAL AMOUNT :</td>
                            <td>450.00</td>
                        </tr>
<!--                        <tr>
                            <td>Total TVA 20%</td>
                            <td>0,80</td>
                        </tr>
                        <tr>
                            <td>Total TTC</td>
                            <td>4,79</td>
                        </tr>-->
                    </table>
                </div>
            </div>

            <div id="footer">
                <p>DR. AJAYAKUMAR'S CLINIC, ALLOPATHY, AYURVEDAM, X-RAY, ECG, ICU & LABORATORY, PUNALUR<br>
                    PHONE: 0475 - 2222399, E-MAIL: stthomashospitalpunalur@gmail.com</p>
            </div>
        </div>

    </body>
</html>
