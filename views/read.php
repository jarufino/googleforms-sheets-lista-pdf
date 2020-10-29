<?php 
include("../lib/vendor/autoload.php");
$sheet=new Classes\ClassSpreadsheet();
$row=2;
    // var_dump($sheet->readSheet("1T7UmyMDUR0wzWI8nvHs-AT6559piCtsLc5dndCEUlPY","resp01","A1:V"));
    // die;
$data=$sheet->readSheet("aqui vai o id da sua planilha","resp01","A{$row}:V");
function formatDate($date) {
    $date = preg_replace("[/|:| ]","",$date);
    return preg_replace(
      "/([0-9]{2})([0-9]{2})([0-9]{4})([0-9]{2})([0-9]{2})([0-9]{2})/i", "$3$1$2$4$5$6", $date
    );
  }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width user-scalable=no, initial-scale=1">
    <meta http-equi="X-UA-Compatible" content="ie=edge">
    <title>Geração de LOIS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <h1>Lista de LOIS</h1>
    <div class="col-12 m-auto text-center" style="margin-left:-4px;font-size:20px;">
        <table class="table-bordered">
            <thead style="background:rgb(0,123,255); color:white; font-size:12px;">
                <tr style="font-size:15px;">
                 <th scope="col">nºLOI</th>
                 <th scope="col">Name:</th>
                 <th scope="col">Company:</th>
                 <th scope="col">Product:المنتج</th>
                 <th scope="col">Specification:المواصفات</th>
                 <th scope="col">Quantity: الكمية</th>
                 <!-- <th scope="col">Incoterms:شروط التجارة الدولية</th> -->
                 <!-- <th scope="col">Payment Terms: شروط الدفع</th> -->
                 <!-- <th scope="col">Target Price: السعر المستهدف</th> -->
                 <!-- <th scope="col">CompanyDetails: تفاصيل الشركة</th> -->
                 <th scope="col">Name Bank:</th>
                 <th scope="col">Account Number:</th>
                 <th scope="col">Company:</th>
                 <th scope="col">SWIFT Code:</th>
                 <th scope="col">Currency Tye:</th>
                 <th scope="col">Address Bank:</th>
                 <th scope="col">Site:</th>
                 <th scope="col">Contact:</th>
                 <th scope="col">email:</th>
                 <th scope="col">Phone:</th>
                 <th scope="col">Office:</th>                 
                 <th scope="col">Gerar:</th>                 
             </tr>
         </thead>
         <tbody style="font-size:15px;">
            <tr>
                <?php 
                foreach ($data as $datas) {
                   ?>
                   <th scope="row"><?php echo formatDate($datas[0]); ?></th>
                   <td style="font-size:15px;"><?php echo $datas[2]; ?></td>                   
                   <td style="font-size:15px;"><?php echo $datas[3]; ?></td>                   
                   <td style="font-size:15px;"><?php echo $datas[4]; ?></td>                   
                   <td style="font-size:15px;"><?php echo $datas[5]; ?></td>                   
                   <td style="font-size:15px;"><?php echo $datas[6]; ?></td>                   
                   <!-- <td style="font-size:15px;"><?php// echo $datas[7]; ?></td>                    -->
                   <!-- <td style="font-size:15px;"><?php //echo $datas[8]; ?></td>                    -->
                   <!-- <td style="font-size:15px;"><?php //echo $datas[9]; ?></td>                    -->
                   <!-- <td style="font-size:15px;"><?php //echo $datas[10]; ?></td>                    -->
                   <td style="font-size:15px;"><?php echo $datas[11]; ?></td>                   
                   <td style="font-size:15px;"><?php echo $datas[12]; ?></td>                   
                   <td style="font-size:15px;"><?php echo $datas[13]; ?></td>                   
                   <td style="font-size:15px;"><?php echo $datas[14]; ?></td>                   
                   <td style="font-size:15px;"><?php echo $datas[15]; ?></td>
                   <td style="font-size:15px;"><?php echo $datas[16]; ?></td>
                   <td style="font-size:15px;"><?php echo $datas[17]; ?></td>
                   <td style="font-size:15px;"><?php echo $datas[18]; ?></td>
                   <td style="font-size:15px;"><?php echo $datas[19]; ?></td>
                   <td style="font-size:15px;"><?php echo $datas[20]; ?></td>
                   <td style="font-size:15px;"><?php if(empty($datas[21])) {echo '';} else {echo $datas[21];} ?></td>
                   <td>
                            <a href="gerarloi.php?row=<?php echo $row; ?>">
                                <button class="btn btn-primary" style="font-size:13px;">Generate Intent</button>
                            </a>
                        </td>   
               </tr>
           <?php $row+=1;} ?>   
       </tbody>
   </table>
</div>    
</body>
</html>