<?php

namespace App\Services;

use \TCPDF;
class Pfactura extends TCPDF {

   //Page header
    public function Header() {
 global $numerofactura, $first_name,$nombres,$idcliente,$direccion,$telefono;

$factura = str_pad($numerofactura, 5, "0", STR_PAD_LEFT);  // produce "-=-=-Alien"
$fecha = date("d-m-Y H:i");
       
$html = <<<EOF
<style>   
    div.test {       
        border-style: solid solid solid solid;
        border-width: 2px 2px 2px 2px;                
        width:10px;

    }
</style>

<table>
    <tr>
        
        <td style="text-align:center">
                    <div class="test">        
                            <b>FACTURA</b><br>                            
                            <b>N° $factura</b>
                    </div>
        </td>
    </tr>
</table>


<br />
<table>
        <tr>
            <td>Cliente :</td>
            <td colspan="3" style="color:red">$nombres</td>
        </tr>
        <tr>
            <td>NIT:</td>
            <td colspan="3" style="color:red">$idcliente</td>
        </tr>
        
         <tr>
            <td>Telefono: </td>
            <td style="color:red">$telefono</td>
            
        </tr>
</table>

EOF;

// output the HTML content
$this->writeHTML($html);


    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        //$this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
     
}