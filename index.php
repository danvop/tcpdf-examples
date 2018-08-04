<?php
require __DIR__ . '/vendor/autoload.php';
$pdf = new TCPDF();                 // create TCPDF object with default constructor args
$pdf->AddPage();                    // pretty self-explanatory


$w = [40, 35, 40, 45,46,80,220,2,3,1,2,3,4,9];
$table = include('table.php');

// Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')
foreach ($table as $tr) {
    
    foreach ($tr as $td) {
        $pdf->Cell(5, 5, $td, 1, 0, '', 0);        
    }
    $pdf->Ln();
}
    
$pdf->Output('hello_world.pdf');    // send the file inline to the browser (default).

?>