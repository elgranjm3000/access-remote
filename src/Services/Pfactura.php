<?php

namespace App\Services;

use \TCPDF;
class Pfactura extends TCPDF {

   //Page header
    public function Header() {
 global $numerofactura, $first_name,$nombres,$idcliente,$direccion,$telefono;

$factura = str_pad($numerofactura, 5, "0", STR_PAD_LEFT);  // produce "-=-=-Alien"
$fecha = date("d/m/Y");
       
$html = <<<EOF
<style>   
   
</style>



<br />
<table>
        <tr>
       
            <td colspan="3" style="text-align:center">$nombres</td>
            <td colspan="3" style="text-align:right">$fecha</td>
             
        </tr>
        <tr>
            <td colspan="3" style="text-align:left"></td>
            <td colspan="3" style="text-align:right"></td>
        </tr>
        <tr>            
            <td colspan="3" style="text-align:center">$idcliente</td>
            <td colspan="3" style="text-align:right">$fecha</td>
        </tr>

        <tr>
            <td colspan="3" style="text-align:left"></td>
            <td colspan="3" style="text-align:right"></td>
        </tr>
        
         <tr>
            <td colspan="6" style="text-align:center">

               <div class="test">                                    
                            $direccion
                    </div>
                </td>
            
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