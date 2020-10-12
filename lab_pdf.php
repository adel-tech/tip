<?php
/*
include 'connection.php';

require 'fpdf182/fpdf.php';

if (isset($_GET['lab_pdf'])) {
  $no=$_GET['lab_pdf'];
  $res=mysqli_query($conn,"SELECT * FROM lab WHERE no='$no'");
  $row=mysqli_fetch_array($res);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",20);
$pdf->Cell(100,20,"Dr. Ajayakumar's Clinic",0,1,"C");
$pdf->Cell(80,10,"Lab Reports",0,1,"C");

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

$pdf->Cell(50,10,"Lab Report:",0,1);
$pdf->line(5,80,205,80);
$pdf->ln(5);
$pdf->Cell(50,10,$row['lab'],0,0);
$pdf->line(5,200,205,200);
$pdf->Output();


}
*/
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>DR. AJAYAKUMAR'S CLINIC, HOMOEOPATHY, ALLOPATHY, AYURVEDAM, X-RAY, ECG, ICU & LABORATORY, PUNALUR</title>
        <link rel="stylesheet" href="style_result.css" media="all" />
    </head>
    <body>
        <div id="container">
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
                        <strong>Ref: By Dr:</strong> AJAYAKUMAR <br>
                    </p>
                </div>

                <?php include 'connection.php';

                require 'fpdf182/fpdf.php';

                if (isset($_GET['lab_pdf'])) {
                  $no=$_GET['lab_pdf'];
                  $res=mysqli_query($conn,"SELECT * FROM lab WHERE no='$no'");
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
                        <th>Test Name</th>
                        <th>Result</th>
                        <th>Unit</th>
                        <th>Normal Value</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th><span>Lab Reports</span></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><?php
                          echo $row['lab'];}
                         ?>
                       </td>
                        <td>65</td>
                        <td>mg%</td>
                        <td>90-140 mg%</td>
                    </tr>
                  <!--  <tr>
                        <th></th>
                        <th><span>HAEMOTOLOGY</span></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Hb%</td>
                        <td>11.1</td>
                        <td>gm%</td>
                        <td>Male (12-16) <br> Female (11.5-13.0)</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>TLC</td>
                        <td>11,800</td>
                        <td>Cumm</td>
                        <td>/Cumm(5000-10000)</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>ESR</td>
                        <td>60</td>
                        <td>mm/hr</td>
                        <td>Male (1-5)mm/hr<br> Female (3-9)mm/hr</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Polymorph</td>
                        <td>61</td>
                        <td>%</td>
                        <td>(45-75%)</td>
                    </tr>-->
                    <tr style="height: 9cm;">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>

            <div id="summary">
                <div id="note" style="">
                    <h4>Senior Lab Technician</h4>
                </div>
            </div>

            <div id="footer">
                <p>DR. AJAYAKUMAR'S CLINIC HOMOEOPATHY, ALLOPATHY, AYURVEDAM, X-RAY, ECG, ICU & LABORATORY, PUNALUR<br>
                    PHONE: 0475 - 2222399, E-MAIL: stthomashospitalpunalur@gmail.com</p>
            </div>
        </div>

    </body>
</html>
