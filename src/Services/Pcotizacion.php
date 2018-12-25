<?php

namespace App\Services;

use \TCPDF;
class Pcotizacion extends TCPDF {

   //Page header
    public function Header() {

 global $numerofactura, $first_name,$nombres,$idcliente,$direccion,$telefono,$fechavencimiento,$contactoprincipal;
        $image_file = K_PATH_IMAGES.'header.png';

$factura = str_pad($numerofactura, 5, "0", STR_PAD_LEFT);  // produce "-=-=-Alien"
$fecha = date("d/m/Y");
$fecha2 = date("d-m-Y");
$ic = str_pad($numerofactura, 4, "0", STR_PAD_LEFT);
       
$html = <<<EOF
<style>   
   .alinear{
    text-align:right;
   }
</style>



<br />
<p>Guatemala $fecha</p>
<p class="alinear">Cotizaciòn $ic $fecha2</p>
<p>Estimado<br>$contactoprincipal<br>$nombres<br>   Es un gusto poder enviarle cotizacion de productos</p>


EOF;
  $this->Image('images/encabezado.png', 0, 0, 0, 28, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);

        $this->SetFont('courier', '', 10, '', true);
// output the HTML content
$this->writeHTML($html);
 /*$this->Image('images/piedepagina.png', 0, 100, 0, 33, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);*/

    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        //$this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
         $this->Image('images/piedepagina.png', 0, 265, 0, 33, 'PNG', '', '', true, 150, '', false, false, 0, false, false, false);
    }
     
}