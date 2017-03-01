//Require mpdf library installed in server       
<?php
include 'session.php';
require_once 'vendor/autoload.php';

$mpdf = new mPDF();
$mpdf->SetWatermarkText("RAIT",0.1);
$mpdf->showWatermarkText=true;

$html=$_SESSION['html'];
//$html = ob_get_contents();
//ob_end_flush();
//ob_end_clean();
$mpdf->WriteHTML($html);
$mpdf->Output();
?>