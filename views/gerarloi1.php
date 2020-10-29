 	<?php 
	include("../lib/vendor/autoload.php");
	echo Classes\ClassLayout::getHeader();
	$sheet=new Classes\ClassSpreadsheet();
	$row=$_GET['row'];	
	$data=$sheet->readSheet("aqui vai o id da sua planilha", "resp01","A{$row}:V");
	function formatDate($date) {
	$date = preg_replace("[/|:| ]","",$date);
    return preg_replace(
      "/([0-9]{2})([0-9]{2})([0-9]{4})([0-9]{2})([0-9]{2})([0-9]{2})/i", "$3$1$2$4$5$6", $date
    );
  }

 	?>
 	<style>
 		* {
 			font-family: DejaVu Sans, sans-serif;
 			margin:0;
 			margin-top: 15px;
 			padding:0;
 		}
 		
 	</style>

	<h1 style="text-align:center;"><u>Letter Of Intent</u></h1><br>
	<div class= "text-justify">			
			<div class="container">
				<p>To Mr Ahmad Nasser Rabah</p>
				<p>Company: Arab Brazilian Commercial Market</p>
				<p>Ref: Letter Of Intent Nº <?php echo formatDate($data[0][0]); ?>	</p>
				<p>We, Company <?php echo $data[0][2]; ?>, legally  represented by Mr. <?php echo $data[0][1]; ?>, responsible responsible for signing this letter of intent, with full legal and corporate responsibilities confirm that we are ready, willing and able to buy the following product from your company in accordance with the terms and conditions as stated below and mutually agreed commercial covenants and acceptance of the final contract. The terms and conditions of any future agreement will supersede any terms and conditions contained in this Letter. The basic terms are: </p>				
			</div>	
			<div class="container" style="font-weight: 0 !important;">
				<table class="table-bordered">					
			        	<thead class="text-center">
					        <tr>
					            <th scope="col" style="border:1px solid; width:130px;">Product:<br>المنتج</th>
					            <th scope="col" style="border:1px solid; width:300px;"><?php echo $data[0][4] ?></th>			            
					        </tr>
					        <tr><th scope="col" style="border:1px solid;">Specification:<br>المواصفات</th><th scope="col" style="border:1px solid;"><?php echo $data[0][5] ?></th></tr>
					        <tr><th scope="col" style="border:1px solid;">Quantity:<br>الكمية</th><th scope="col" style="border:1px solid;"><?php echo $data[0][6] ?></th></tr> 
					        <tr><th scope="col" style="border:1px solid;">Incoterms:<br>شروط التجارة الدولية</th><th scope="col" style="border:1px solid;"><?php echo $data[0][7] ?></th></tr> 
					        <tr><th scope="col" style="border:1px solid;">Payment Terms:<br>شروط الدفع</th><th scope="col" style="border:1px solid;"><?php echo $data[0][8] ?></th></tr> 
					        <tr><th scope="col" style="border:1px solid;">Target Price: <br>السعر المستهدف</th><th scope="col" style="border:1px solid;"><?php echo $data[0][9] ?></th></tr> 
					        <tr><th scope="col" style="border:1px solid;">Company Details:<br>تفاصيل الشركة</th><th scope="col" style="border:1px solid;"><?php echo $data[0][10] ?></th></tr>					        
			        	</thead>
		        	<br>
		        	<br>
		        	<br></table></div>
		        	<div class="container">
		        		<p style="margin-left:2px; bottom:870px; border:1px solid;width:auto; margin-top:150px;text-align: center; margin-bottom:-18px; ">BANK INFORMATION | معلومات البنك<</p>
		        	<table class="table table-striped">		        		
			        	<thead>			        			        		
			        		<tr><th scope="col" style="width: 149px; border:1px solid;">Name Bank:</th><th scope="col" style="position: absolute;left: 269px; border:1px solid; width:265px;"><?php echo $data[0][10]; ?></th></tr>			        		
			        		<tr><th scope="col" style="border:1px solid; position:absolute;margin-top: 27px; width:149px;">Account Number:</th><th style="border:1px solid; position: absolute;margin: 150px;margin-left: 148px; margin-top: 27px; width:265px;"><?php echo $data[0][11]; ?></th></tr>
			        		<tr><th scope="col" style="border:1px solid; position:absolute;margin-top: 54px; width: 149px;">Company:</th><th style="border:1px solid; position: absolute;margin-left: 148px;margin-top: 54px;width: 265px;"><?php echo $data[0][12]; ?></th></tr>
			        		<tr><th scope="col" style="border:1px solid; position:absolute;margin-top: 81px; width: 149px; ">SWIFT Code:</th><th style="border:1px solid; position: absolute;margin: 148px;margin-top: 81px; width: 265px;"><?php echo $data[0][13]; ?></th></tr>
			        		<tr><th scope="col" style="border:1px solid; position:absolute;margin-top: 108px; width:149px; ">Currency Tye:</th><th style="border:1px solid; position: absolute; margin: 148px; margin-top: 108px; width: 265px;"><?php echo $data[0][14]; ?></th></tr>
			        		<tr><th scope="col" style="border:1px solid; position:absolute;margin-top: 135px; width: 149px; ">Address Bank:</th><th style="border:1px solid; position:absolute; margin-top: 135px; width: 265px; margin-left: 148px;"><?php echo $data[0][15]; ?></th></tr>
			        	</thead>			        	
			        </table>
			</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>						
				<div class="text-center">
					<?php 
						function mudarData($dt) {
							$dt = preg_replace("[/|:| ]","",$dt);
							$dt = preg_replace(
								"/([0-9]{2})([0-9]{2})([0-9]{4})([0-9]{2})([0-9]{2})([0-9]{2})/i", "$3-$2-$1 $4:$5:$6", $dt
							);
							return date("Y/m/d h:i:s a", strtotime($dt));	
}
					 ?>
					<p style="margin-bottom:5px;">_________________________________________________________________________</p>
					<p style="margin-top:-7px;">Name: <?php echo $data[0][2]; ?></p>
					<p style="margin-top:-2px;">Office: <?php echo $data[0][20]; ?></p>
					<p style="margin-top:-2px;">Contact: <?php echo $data[0][18]; ?></p>
					<p>Date and Hour: <?php echo mudarData($data[0][0]); ?></p>
				</div>
			
<?php 
	echo Classes\ClassLayout::getFooter();	
 ?>
