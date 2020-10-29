<?php 
    namespace Classes;

    #Header
    class ClassLayout{
        public static function getHeader() {
            $html="<!DOCTYPE html>\n";
            $html.="<head>\n";
            $html.="<meta charset='utf-8'>\n";
            $html.="<meta name='viewport' content='width=device-width, user-scable=no, initial-scale=1'>\n";
            $html.="<title>API Google Planilhas</title>\n";
            $html.="<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>\n";
            $html.="</head>\n";
            $html.="<body>\n";
            return $html;
        }
    #Rodapé 
        public static function getFooter() {
            $html="</body>\n";
            $html.="</html>\n";
            return $html;
        }
    #Formulário 
        // public static function getForm($data){
        //  $html="<form name='form' id='form' method='post' action='controllers/DataController.php'>";
        //  $html="<input type='hidden'name='id' id='id' value='".$data['id']."'>\n";
        //  $html="<input type='hidden'name='action' id='action' value='".$data['action']."'>\n";
        //  $html="<input type='hidden'name='range' id='range' value='".$data['range']."'>\n";
  //            $html.="<div class='form-group'>\n";
  //        $html.="<label for='name'>Nombre:</label\n>";           
  //        $html.="<input type='text' class='form-control' id='name' placeholder='Nombre' value='".$data['nombre']."'>\n";
  //            $html.="</div>\n";
  //            $html.="<div class='form-group'>\n";
  //        $html.="<label for='company'>Company:</label>\n";
  //        $html.="<input type='text' class='form-control' id='company' placeholder='Company' value=".$data['id'].">\n";
  //        $html.="</div>\n";
  //        $html.="<div class='form-group'>\n";
  //        $html.="<label for='producto'>Producto:</label>\n";
  //        $html.="<input type='text' class='form-control' id='producto' placeholder='Producto'>\n";
  //        $html.="</div>\n";
  //        $html.="<div class='form-group'>\n";
  //        $html.="<label for='especificacion'>Especificacion</label>\n";
  //        $html.="<input type='text' class='form-control' id='especificacion' placeholder='Especificacion'>\n";
  //        $html.="</div>\n";
  //        $html.="<div class='form-group'>\n";
  //        $html.="<label for='quantity'>Quantity:</label>\n";
  //        $html.="<input type='text' class='form-control' id='quantity' placeholder='Quantity'>\n";
  //        $html.="</div>\n";
  //        $html.="<div class='form-group'>\n";
  //        $html.="<label for='incoterms'>Incoterms:</label>\n";
  //        $html.="<input type='text' class='form-control' id='iconterms' placeholder='Iconterms'>\n";
  //        $html.="</div>\n";
  //        $html.="<div class='form-group'>\n";
  //        $html.="<label for='condpago'>Condiciones de Pago:</label>\n";
  //        $html.="<input type='text' class='form-control' id='condpago' placeholder='Condiciones de Pago:'>\n";
  //        $html.="</div>\n";
  //        $html.="<div class='form-group'>\n";
  //        $html.="<label for='precioobj'>Precio Objetivo:</label>\n";
  //        $html.="<input type='text' class='form-control' id='precioobj' placeholder='Precio Objetivo'>\n";
  //        $html.="</div>\n";
  //        $html.="<div class='form-group'>\n";
  //        $html.="<label for='detalles'>Empresa Detalles:</label>\n";
  //        $html.="<input type='text' class='form-control' id='empresadetalles' placeholder='Empresa Detalles'>\n";
  //        $html.="</div>\n";
  //        $html.="<div class='form-group'>\n";
  //        $html.="<label for='banco'>Banco:</label>\n";
  //        $html.="<input type='text' class='form-control' id='banco' placeholder='Banco'>\n";
  //        $html.="</div>\n";
  //        $html.="<div class='form-group'>\n";
  //        $html.="<label for='conta'>Conta:</label>\n";
  //        $html.="<input type='text' class='form-control' id='conta' placeholder='Conta'>\n";
  //        $html.="</div>\n";
  //        $html.="<div class='form-group'>\n";
  //        $html.="<label for='empresa'>Empresa:</label>\n";
  //        $html.="<input type='text' class='form-control' id='empresa' placeholder='Empresa'>\n";
  //        $html.="</div>\n";
  //        $html.="<div class='form-group'>\n";
  //        $html.="<label for='swift'>Swift:</label>\n";
  //        $html.="<input type='text' class='form-control' id='swift' placeholder='Swift'>\n";
  //        $html.="</div>\n";
  //        $html.="<div class='form-group'>\n";
  //        $html.="<label for='direcciones'>Direcciones:</label>\n";
  //        $html.="<input type='text' class='form-control' id='direcciones' placeholder='
  //        Direcciones'>\n";
  //        $html.="</div>\n";
  //        return $html;
        // }
    }
 ?>