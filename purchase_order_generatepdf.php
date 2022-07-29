<?php
require('fpdf184/fpdf.php');
$pdf = new FPDF();


$pdf ->AddPage();
$pdf-> SetFont('Arial', 'B',20);
$pdf->SetFillColor(83, 198, 83);
$pdf->Cell(190,20,'PURCHASE ORDER',0,0,'C',true);

$pdf->Ln(20);
$pdf-> SetFont('Arial', 'B',10);
$pdf->Cell(190,5,'Company LOGO',10,10,'C');
$pdf->Ln(10);

$pdf-> SetFont('Arial', 'B',10,);
$pdf->Cell(29,5,'Company Name:',0,0,'L');
$pdf->Cell(50,5,'Bulffffafala',0,0);
$pdf->Cell(55,5,'PO Number:',0,0,'R');
$pdf->Cell(50,5,'55222255',0,0);
$pdf->ln();

$pdf->Cell(16,5,'Address:',0,0,'L');
$pdf->Cell(50,5,'Quezon',0,0,'L');
$pdf->Cell(68,5,'PO Date:',0,0,'R');
$pdf->Cell(50,5,'5525252252222255',0,0);
$pdf->ln();

$pdf->Cell(9,5,'City:',0,0,'L');
$pdf->Cell(50,5,'Quezon',0,0,'L');
$pdf->Cell(75,5,'Vendor ID:',0,0,'R');
$pdf->Cell(50,5,'8545555',0,0);
$pdf->ln(10);

$pdf->SetFillColor(45, 134, 45);
$pdf->Cell(118,5,'Purchase From',0,0,'L',true);
$pdf->Cell(70,5,'Ship To',0,0,'C',true);
$pdf->ln();
$pdf->Cell(25,5,'Vendor Name:',0,0,'L');
$pdf->Cell(50,5,'Bulffffafala',0,0);
$pdf->Cell(59,5,'Company Name:',0,0,'R');
$pdf->Cell(50,5,'Bulffffafala',0,0);
$pdf->ln(5);

$pdf->Cell(16,5,'Address:',0,0,'L');
$pdf->Cell(50,5,'55222255',0,0);
$pdf->Cell(68,5,'Address:',0,0,'R');
$pdf->Cell(50,5,'5525',0,0);
$pdf->ln();
$pdf->Cell(9,5,'City:',0,0,'L');
$pdf->Cell(50,5,'dddd',0,0);
$pdf->Cell(75,5,'City:',0,0,'R');
$pdf->Cell(50,5,'dhhhd',0,0);
$pdf->ln(10);

$pdf->Cell(65,5,'Shipping Method',1,0,'C',true); 
$pdf->Cell(70,5,'Payment Terms',1,0,'C',true);
$pdf->Cell(48,5,'Required By Date',1,0,'C',true);
$pdf->ln();
$pdf->Cell(65,5,'Credihhshshhst Card',1,0);//para sa shipping method
$pdf->Cell(70,5,'Bahhhhhsshhnk',1,0);//para sa payment terms
$pdf->Cell(48,5,'50-50hhhhh-555',1,0);//para sa required date
$pdf->ln(10);


$pdf->Cell(60,5,'Item Description',1,0,'C',true); 
$pdf->Cell(41,5,'Quantity',1,0,'C',true);
$pdf->Cell(40,5,'Unit Price',1,0,'C',true);
$pdf->Cell(42,5,'Amount',1,0,'C',true);
$pdf->ln();
$pdf->Cell(60,5,'Computer',1,0);//para sa item description
$pdf->Cell(41,5,'5',1,0);//para sa quantity
$pdf->Cell(40,5,'8',1,0);//para sa unit price
$pdf->Cell(42,5,'10',1,0);//para sa amount
$pdf->ln(15);


$pdf->Cell(25,5,'Receive by:',0,0,'C');
$pdf->Cell(40,5,'Roge',0,0);
$pdf->ln();
$pdf->Cell(130,5,'Sales Tax:',0,0,'R');
$pdf->Cell(42,5,'52222',0,0);
$pdf->ln();
$pdf->Cell(130,5,'Additiona Cost:',0,0,'R');
$pdf->Cell(42,5,'52222',0,0);
$pdf->ln();
$pdf->Cell(130,5,'Total Amount:',0,0,'R');
$pdf->Cell(42,5,'52222',0,0);
$pdf->ln();


$pdf->Output();
?>



<?php
require('fpdf184/fpdf.php');
$pdf = new FPDF();

$pdf ->AddPage();
$pdf-> SetFont('Arial', 'B',16);
$pdf->Cell(190,5,'PURCHASE ORDER',10,10,'C');
$pdf->Ln(5);
$pdf->Cell(190,5,'Company LOGO',10,10,'C');
$pdf->Ln(10);

$pdf-> SetFont('Arial', 'B',10,);
$pdf->Cell(29,5,'Company Name',1,0,'L');
$pdf->Cell(50,5,'Bulffffafala',1,0);
$pdf->Cell(55,5,'PO Number',1,0,'R');
$pdf->Cell(50,5,'55222255',1,0);
$pdf->ln();

$pdf->Cell(16,5,'Address',1,0,'L');
$pdf->Cell(50,5,'Quezon',1,0,'L');
$pdf->Cell(68,5,'PO Date',1,0,'R');
$pdf->Cell(50,5,'5525252252222255',1,0);
$pdf->ln();

$pdf->Cell(9,5,'City',1,0,'L');
$pdf->Cell(50,5,'Quezon',1,0,'L');
$pdf->Cell(75,5,'Vendor ID',1,0,'R');
$pdf->Cell(50,5,'8545555',1,0);
$pdf->ln();

$pdf->Cell(27,5,'Phone Number',1,0,'L');
$pdf->Cell(40,5,'08888',1,0);
$pdf->Cell(67,5,'Phone Number',1,0,'R');
$pdf->Cell(50,5,'08888',1,0);
$pdf->ln(10);

$pdf->Cell(66,5,'Purchase From',1,0,'L');
$pdf->Cell(70,5,'Ship To',1,0,'R');
$pdf->ln();
$pdf->Cell(25,5,'Vendor Name',1,0,'L');
$pdf->Cell(50,5,'Bulffffafala',1,0);
$pdf->Cell(59,5,'Company Name',1,0,'R');
$pdf->Cell(50,5,'Bulffffafala',1,0);
$pdf->ln();
$pdf->Cell(16,5,'Address',1,0,'L');
$pdf->Cell(50,5,'55222255',1,0);
$pdf->Cell(68,5,'Address',1,0,'R');
$pdf->Cell(50,5,'5525',1,0);
$pdf->ln();
$pdf->Cell(9,5,'City',1,0,'L');
$pdf->Cell(50,5,'dddd',1,0);
$pdf->Cell(75,5,'City',1,0,'R');
$pdf->Cell(50,5,'dhhhd',1,0);
$pdf->ln(10);

$pdf->Cell(28,5,'Contact Person',1,0,'L');
$pdf->Cell(40,5,'08888',1,0);
$pdf->Cell(66,5,'Contant Person',1,0,'R');
$pdf->Cell(40,5,'08888',1,0);   
$pdf->ln(15);

$pdf->Cell(65,5,'Shipping Method',1,0,'C'); 
$pdf->Cell(70,5,'Payment Terms',1,0,'C');
$pdf->Cell(48,5,'Required BY Date',1,0,'C');
$pdf->ln();
$pdf->Cell(65,5,'Credihhshshhst Card',1,0);//para sa shipping method
$pdf->Cell(70,5,'Bahhhhhsshhnk',1,0);//para sa payment terms
$pdf->Cell(48,5,'50-50hhhhh-555',1,0);//para sa required date
$pdf->ln(10);

$pdf->Cell(60,5,'Item Description',1,0,'C'); 
$pdf->Cell(41,5,'Quantity',1,0,'C');
$pdf->Cell(40,5,'Unit Price',1,0,'C');
$pdf->Cell(42,5,'Amount',1,0,'C');
$pdf->ln();
$pdf->Cell(60,5,'Computer',1,0);//para sa item description
$pdf->Cell(41,5,'5',1,0);//para sa quantity
$pdf->Cell(40,5,'8',1,0);//para sa unit price
$pdf->Cell(42,5,'10',1,0);//para sa amount
$pdf->ln(15);

$pdf->Cell(25,5,'Receive by:',1,0,'C');
$pdf->Cell(40,5,'Roge',1,0);
$pdf->ln();
$pdf->Cell(130,5,'Sales Tax:',1,0,'R');
$pdf->Cell(42,5,'52222',1,0);
$pdf->ln();
$pdf->Cell(130,5,'Additiona Cost:',1,0,'R');
$pdf->Cell(42,5,'52222',1,0);
$pdf->ln();
$pdf->Cell(130,5,'Total Amount:',1,0,'R');
$pdf->Cell(42,5,'52222',1,0);
$pdf->ln();


$pdf->Output();
?>