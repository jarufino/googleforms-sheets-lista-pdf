
<?php 
	use Dompdf\Dompdf;
	require_once '../lib/vendor/autoload.php';	
	$dompdf=new Dompdf();	
	ob_start();
	require __DIR__ ."/gerarloi1.php";
	$dompdf->loadhtml(ob_get_clean());
	$dompdf->render();
	$dompdf->stream("loi.pdf",["Attachment"=>false]);
 ?>
 	