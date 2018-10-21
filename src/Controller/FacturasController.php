<?php

namespace App\Controller;

use App\Entity\Facturas;
use App\Entity\Clientes;
use App\Entity\Productos;
use App\Entity\DetallesFactura;
use App\Form\FacturasType;
use App\Form\DetallesFacturaType;
use App\Repository\FacturasRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//use \TCPDF;
use App\Services\Pfactura;

/**
 * @Route("/facturas")
 */
class FacturasController extends AbstractController
{


 /**
     * @Route("/factura_pdf/{id}", name="factura_pdf", methods="GET")
     */
    public function factura_pdf(FacturasRepository $facturasRepository,$id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $datos = $entityManager->getRepository(Facturas::class)->find($id);

    $html = $this->renderView(
         'facturas/pdf.html.twig',array('datos'=>$datos)
    );

  
    $this->pdfactura($html,$id);
    }


    public function pdfactura($html,$id){
 global $numerofactura, $first_name,$nombres,$idcliente,$direccion,$telefono;

   $entityManager = $this->getDoctrine()->getManager();
        $datos = $entityManager->getRepository(Facturas::class)->find($id);
      

    $nombres = $datos->getIdcliente()->getNombre();
    $direccion = $datos->getIdcliente()->getDireccion();
    $numerofactura = $datos->getId();
    $idcliente = $datos->getIdcliente()->getNit();
    $telefono = $datos->getIdcliente()->getTelefonoMovil();

        //set_time_limit(30); uncomment this line according to your needs
        // If you are not in a controller, retrieve of some way the service container and then retrieve it
        //$pdf = $this->container->get("white_october.tcpdf")->create('vertical', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        //if you are in a controlller use :
//        $pdf = $this->get("white_october.tcpdf")->create('vertical', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    $pagina = array("800","600");
        $pdf = new Pfactura();
     
     
        $pdf->SetAuthor('Factura');
        $pdf->SetTitle('Facturacion');
        $pdf->SetSubject('Our Code World Subject');
        $pdf->setFontSubsetting(true);
        $pdf->SetFont('helvetica', '', 11, '', true);
        //$pdf->SetMargins(20,20,40, true);




// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, 60, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        $pdf->AddPage();
        
        $filename = 'ourcodeworld_pdf_demo';
        
      //  $pdf->Image('/qr', 10, 10, 190, 200, '', 'http://www.tcpdf.org', '', false, 600);


// set style for barcode
$style = array(
    'border' => true,
    'vpadding' => 'auto',
    'hpadding' => 'auto',
    'fgcolor' => array(0,0,0),
    'bgcolor' => false, //array(255,255,255)
    'module_width' => 1, // width of a single module in points
    'module_height' => 1 // height of a single module in points
);

// write RAW 2D Barcode






$pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);


        $pdf->Output($filename.".pdf",'I'); // This will output the PDF as a response directly
}

    /**
     * @Route("/", name="facturas_index", methods="GET")
     */
    public function index(FacturasRepository $facturasRepository): Response
    {
        return $this->render('facturas/index.html.twig', ['facturas' => $facturasRepository->findAll()]);
    }

    /**
     * @Route("/new/{cliente}", name="facturas_new", methods="GET|POST")
     */
    public function new(Request $request,$cliente): Response
    {

        $productos = new DetallesFactura();
        $form1 = $this->createForm(DetallesFacturaType::class, $productos);
        $form1->handleRequest($request);


        $factura = new Facturas();
        $form = $this->createForm(FacturasType::class, $factura);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            
      
            $idcliente = $factura->getIdclientesrelacion();
            $ip=$this->getDoctrine()->getEntityManager();  
            $factura->setIdcliente($ip->getReference(Clientes::class,$idcliente));
            $em = $this->getDoctrine()->getManager();
            $em->persist($factura);
            $em->flush();
            $idfactura = $factura->getId();
            for ($i=0; $i < count($_POST["productos"]); $i++) { 
                $lineaproducto = new DetallesFactura();
                $lineaproducto->setCantidad($_POST["cantidad"][$i]);    
                $lineaproducto->setOrdenPromocion($_POST["promocion"][$i]);    
                $lineaproducto->setComentarios($_POST["comentarios"][$i]);
                $lineaproducto->setPrecio($_POST["precio"][$i]);
                $lineaproducto->setTotal($_POST["total"][$i]);
                $lineaproducto->setIdproducto($ip->getReference(Productos::class,$_POST["productos"][$i]));
                $lineaproducto->setIdfactura($ip->getReference(Facturas::class,$idfactura));
                $em = $this->getDoctrine()->getManager();
                $em->persist($lineaproducto);
                $em->flush();
            }





            return $this->redirectToRoute('facturas_index');
        }

        return $this->render('facturas/new.html.twig', [
            'factura' => $factura,
            'form' => $form->createView(),
            'productos' => $productos,
            'form1' => $form1->createView(),
            'cliente'=>$cliente
        ]);
    }

    /**
     * @Route("/{id}", name="facturas_show", methods="GET")
     */
    public function show(Facturas $factura): Response
    {

        $productosfacturados = $this->getDoctrine()
        ->getRepository(DetallesFactura::class)
        ->findBy(['idfactura'=>$factura]);
        return $this->render('facturas/show.html.twig', ['factura' => $factura,'productosfacturados'=>$productosfacturados]);
    }

    /**
     * @Route("/{id}/{cliente}/edit", name="facturas_edit", methods="GET|POST")
     */
    public function edit(Request $request, Facturas $factura,$cliente): Response
    {


        $productosfacturados = $this->getDoctrine()
        ->getRepository(DetallesFactura::class)
        ->findBy(['idfactura'=>$factura]);
      

           $productos = new DetallesFactura();
        $form1 = $this->createForm(DetallesFacturaType::class, $productos);
        $form1->handleRequest($request);
        $form = $this->createForm(FacturasType::class, $factura);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

              $ip=$this->getDoctrine()->getEntityManager();  


   $em = $this->getDoctrine()->getManager();

        $dql_query = $em->createQuery("
                                DELETE FROM App:DetallesFactura o
                                WHERE                             
                                o.idfactura = '".$factura."'
        ");
        $results = $dql_query->getResult();


             for ($i=0; $i < count($_POST["productos"]); $i++) { 
                
                $lineaproducto = new DetallesFactura();
                $lineaproducto->setCantidad($_POST["cantidad"][$i]);    
                $lineaproducto->setOrdenPromocion($_POST["promocion"][$i]);    
                $lineaproducto->setComentarios($_POST["comentarios"][$i]);
                $lineaproducto->setPrecio($_POST["precio"][$i]);
                $lineaproducto->setTotal($_POST["total"][$i]);
                $lineaproducto->setIdproducto($ip->getReference(Productos::class,$_POST["productos"][$i]));
                $lineaproducto->setIdfactura($ip->getReference(Facturas::class,$factura));
                $em = $this->getDoctrine()->getManager();
                $em->persist($lineaproducto);
                $em->flush();
            }

            return $this->redirectToRoute('facturas_show', ['id' => $factura->getId()]);
             //return $this->redirectToRoute('facturas_index');
        }

        return $this->render('facturas/edit.html.twig', [
            'factura' => $factura,
            'form' => $form->createView(),
            'cliente'=>$cliente,
            'form1' => $form1->createView(),
            'cliente'=>$cliente,
            'productosfacturados'=>$productosfacturados
        ]);
    }

    /**
     * @Route("/{id}", name="facturas_delete", methods="DELETE")
     */
    public function delete(Request $request, Facturas $factura): Response
    {
        if ($this->isCsrfTokenValid('delete'.$factura->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($factura);
            $em->flush();
        }

        return $this->redirectToRoute('facturas_index');
    }
}

