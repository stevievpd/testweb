<?php
require('fpdf184/fpdf.php');
$conn = new mysqli('localhost', 'root', '', 'growth');
if($conn->connect_error){
  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
}

$select = "SELECT * FROM purchase_order ORDER BY id";
$result = $conn->query($select);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
while($row = $result->fetch_object()){
    $id = $row->id;
  $product_name = $row->product_name;
  $quantity = $row->quantity;
  $price = $row->price;
  $total = $row->total;
  $purchase_date = $row->purchase_date;
  $expected_date = $row->expected_date;

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
$pdf->Cell(50,5,'',0,0);
$pdf->Cell(55,5,'PO Number:',0,0,'R');
$pdf->Cell(50,5,'',0,0);
$pdf->ln();

$pdf->Cell(16,5,'Address:',0,0,'L');
$pdf->Cell(50,5,'Quezon',0,0,'L');
$pdf->Cell(62,5,'PO Date:',0,0,'R');
$pdf->Cell(50,5,'',0,0);
$pdf->ln();

$pdf->Cell(9,5,'City:',0,0,'L');
$pdf->Cell(50,5,'',0,0,'L');
$pdf->Cell(72,5,'Supplier ID:',0,0,'R');
$pdf->Cell(50,5,'',0,0);
$pdf->ln(10);

$pdf->SetFillColor(45, 134, 45);
$pdf->Cell(118,5,'Purchase From',0,0,'L',true);
$pdf->Cell(70,5,'Ship To',0,0,'C',true);
$pdf->ln();
$pdf->Cell(30,5,'Supplier Name:',0,0,'L');
$pdf->Cell(50,5,'gsssssdssssggss',0,0);
$pdf->Cell(66,5,'Company Name:',0,0,'R');
$pdf->Cell(50,5,'',0,0);
$pdf->ln(5);

$pdf->Cell(16,5,'Address:',0,0,'L');
$pdf->Cell(50,5,'',0,0);
$pdf->Cell(62,5,'Address:',0,0,'R');
$pdf->Cell(50,5,'',0,0);
$pdf->ln();
$pdf->Cell(9,5,'City:',0,0,'L');
$pdf->Cell(50,5,'',0,0);
$pdf->Cell(62,5,'City:',0,0,'R');
$pdf->Cell(50,5,'',0,0);

$pdf->ln();
$pdf->Cell(9,5,'Zip:',0,0,'L');
$pdf->Cell(50,5,'',0,0);
$pdf->Cell(62,5,'Zip:',0,0,'R');
$pdf->Cell(50,5,'',0,0);
$pdf->ln(10);

$pdf->Cell(65,5,'Shipping Method',1,0,'C',true); 
$pdf->Cell(70,5,'Payment Terms',1,0,'C',true);
$pdf->Cell(48,5,'Required By Date',1,0,'C',true);
$pdf->ln();
$pdf->Cell(65,5,'',1,0);//para sa shipping method
$pdf->Cell(70,5,'',1,0);//para sa payment terms
$pdf->Cell(48,5,'',1,0);//para sa required date
$pdf->ln(10);


$pdf->Cell(60,5,'Item Description',1,0,'C',true); 
$pdf->Cell(41,5,'Quantity',1,0,'C',true);
$pdf->Cell(40,5,'Unit Price',1,0,'C',true);
$pdf->Cell(42,5,'Amount',1,0,'C',true);
$pdf->ln();
$pdf->Cell(60,5,$product_name,1,0);//para sa item description
$pdf->Cell(41,5,$quantity,1,0);//para sa quantity
$pdf->Cell(40,5,$price,1,0);//para sa unit price
$pdf->Cell(42,5,$total,1,0);//para sa amount
$pdf->ln(15);

$pdf->Cell(25,5,'Receive by:',0,0,'C');
$pdf->Cell(40,5,'',0,0);
$pdf->ln();
$pdf->Cell(140,5,'Sales Tax:',0,0,'R');
$pdf->Cell(42,5,'',0,0);
$pdf->ln();

$pdf->Cell(25,5,'Approved by:',0,0,'R');
$pdf->Cell(42,5,'',0,0);
$pdf->Cell(73,5,'Total Amount:',0,0,'R');
$pdf->Cell(42,5,'',0,0);
$pdf->ln();

}
$pdf->Output();
?>

