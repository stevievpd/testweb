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
  $subtotal = $row->subtotal;
  $sales_tax = $row->sales_tax;
  $total = $row->total;
  $purchase_date = $row->purchase_date;
  $expected_date = $row->expected_date;

$pdf = new FPDF();
$pdf ->AddPage();
$pdf-> SetFont('Arial', 'B',20);
$pdf->SetFillColor(0, 77, 0);
$pdf->SetTextColor(255, 255, 255);
$pdf->Ln();
$pdf->Cell(190,75,'PURCHASE ORDER',0,0,'C',true);

$pdf->Ln(10);
$pdf-> SetFont('Arial', 'B',10);
$pdf->SetTextColor(255, 255, 255);
$pdf->Image('images/final_logo.jpg',75, 12, 60,30);
$pdf->Ln(40);


$pdf-> SetFont('Arial', 'B',10,);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(29,5,'Company Name:',0,0,'L');
$pdf->Cell(50,5,'442442',0,0);
$pdf->Cell(50,5,'PO Number:',0,0,'R');
$pdf->Cell(50,5,'244422',0,0);
$pdf->ln();
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(16,5,'Address:',0,0,'L');
$pdf->Cell(50,5,'Quezon',0,0,'L');  
$pdf->Cell(57,5,'PO Date:',0,0,'R');
$pdf->Cell(50,5, $purchase_date,0,0);
$pdf->ln();
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(9,5,'City:',0,0,'L');
$pdf->Cell(50,5,'',0,0,'L');
$pdf-> SetFont('Arial', 'B',10);
$pdf->Cell(69,5,'Supplier ID:',0,0,'R',true);
$pdf->Cell(50,5, $id,0,0);
$pdf->ln(20);

$pdf->SetFillColor(0, 153, 0);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(118,10,'Purchase From',0,0,'L',true);
$pdf->Cell(70,10,'Ship To',0,0,'C',true);
$pdf->ln(10);

$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(30,5,'Supplier Name:',0,0,'L');
$pdf->Cell(50,5,'gsssssdssssggss',0,0);
$pdf->Cell(56,5,'Company Name:',0,0,'R');
$pdf->Cell(50,5,'',0,0);
$pdf->ln(5);


$pdf->Cell(16,5,'Address:',0,0,'L');
$pdf->Cell(50,5,'',0,0);
$pdf->Cell(57,5,'Address:',0,0,'R');
$pdf->Cell(50,5,'',0,0);
$pdf->ln();
$pdf->Cell(9,5,'City:',0,0,'L');
$pdf->Cell(50,5,'',0,0);
$pdf->Cell(57,5,'City:',0,0,'R');
$pdf->Cell(50,5,'',0,0);

$pdf->ln();
$pdf->Cell(9,5,'Zip:',0,0,'L');
$pdf->Cell(50,5,'',0,0);
$pdf->Cell(56,5,'Zip:',0,0,'R');
$pdf->Cell(50,5,'',0,0);
$pdf->ln(10);

$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(65,8,'Shipping Method',1,0,'C',true); 
$pdf->Cell(70,8,'Payment Terms',1,0,'C',true);
$pdf->Cell(48,8,'Required By Date',1,0,'C',true);
$pdf->ln();

$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(65,5,'hhh',1,0);//para sa shipping method
$pdf->Cell(70,5,'hh',1,0);//para sa payment terms
$pdf->Cell(48,5,'hh',1,0);//para sa required date
$pdf->ln(10);

$pdf->SetTextColor(0, 0, 0);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(60,8,'Item Description',1,0,'C',true); 
$pdf->Cell(41,8,'Quantity',1,0,'C',true);
$pdf->Cell(40,8,'Unit Price',1,0,'C',true);
$pdf->Cell(42,8,'Amount',1,0,'C',true);
$pdf->ln();
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(60,5,$product_name,1,0);//para sa item description
$pdf->Cell(41,5,$quantity,1,0);//para sa quantity
$pdf->Cell(40,5,$price,1,0);//para sa unit price
$pdf->Cell(42,5,$subtotal,1,0);//para sa amount
$pdf->ln(15);

$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(25,5,'Receive by:',0,0,'C');
$pdf->Cell(40,5,'',0,0);
$pdf->ln();
$pdf->Cell(140,5,'Sales Tax:',0,0,'R');
$pdf->Cell(42,5,$sales_tax,0,0);
$pdf->ln();

$pdf->Cell(25,5,'Approved by:',0,0,'R');
$pdf->Cell(42,5,'',0,0);
$pdf->Cell(73,5,'Total Amount:',0,0,'R');
$pdf->Cell(42,5,$total,0,0);
$pdf->ln();
$pdf->Line(35,170,85,170);
$pdf->Line(35,180,85,180);
}
$pdf->Output();
?>

