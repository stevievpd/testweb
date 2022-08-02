
<?php 
include 'includes/session.php';
require_once('./tcpdf/tcpdf.php');  
     
// get data from users table 


$result = mysql_query("SELECT * FROM purchase_order WHERE id="); 

while($row = mysql_fetch_array($result)) 
  { 
    $id = $row['id']; 
    $product_name = $row['product_name']; 
    $quantity = $row['quantity']; 
    $price = $row['price']; 
    $subtotal = $row['subtotal']; 
    $sales_tax = $row['sales_tax']; 
    $total = $row['total']; 
    $purchase_date = $row['purchase_date']; 
    $expected_date = $row['expected_date']; 

  
  } 
   
// create new PDF document 
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  

$pdf->SetPrintHeader(false); $pdf->SetPrintFooter(false); 

// set default monospaced font 
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED); 

//set margins 
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT); 

//set auto page breaks 
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM); 

//set image scale factor 
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);  

//set some language-dependent strings 
$pdf->setLanguageArray($l);  

// --------------------------------------------------------- 

// set font 
$pdf->SetFont('dejavusans', '', 10); 

// add a page 
$pdf->AddPage(); 
// create some HTML content 
$txt = <<<EOD
Below are the details I require

Company type: $type
Company Name: $company
Company email: $email

EOD;


// output the HTML content 
// $pdf->writeHTML($htmlcontent, true, 0, true, 0); 
$pdf->Write(0, $txt, '', 0, 'L', true, 0, false, false, 0);

// $pdf->writeHTML($inlinecss, true, 0, true, 0); 

// reset pointer to the last page 
// $pdf->lastPage(); 

//Close and output PDF document 
$pdf->Output('example_006.pdf', 'I'); 

//============================================================+ 
// END OF FILE                                                  
//============================================================+ 
?>