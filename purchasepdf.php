<?php
require('fpdf184/fpdf.php');
$conn=mysqli_connect('localhost','root','','growth');
if($conn->connect_error){
    die("Error in DB connection:".$conn->connect_errno.":".$conn->_error);
}
$select = "SELECT * FROM purchase_order ORDER BY id";
$result = $conn->query($select);
$pdf = new FPDF();
$pdf-> AddPage();
$pdf->SetFont('Arial','',12);
$pdf->SetFillColor(77, 153, 0);
$pdf->Cell (190 ,5, 'PURCHASE ORDER','B', 0,'C',true);


while($row=$result->fetch_object()){

    $id=$row->id;
    $purchase_date=$row->purchase_date;
    $expected_date=$row->expected_date;
    $item=$row->item;
    $quantity=$row->quantity;
    $price=$row->price;
    $amount_total=$row->amount_total;

}
$pdf->Cell(190,10,'LOGO HERE',1,0,'C');
$pdf ->Output();
?>