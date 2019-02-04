<?php

namespace App\Controller;

use App\Entity\Facturas;
use App\Entity\MovimientosAlmacen;
use App\Entity\Clientes;
use App\Entity\Agruparproducto;
use App\Entity\Productos;
use App\Entity\DetallesFactura;
use App\Form\FacturasType;
use App\Form\DetallesFacturaType;
use App\Form\PresupuestoType;
use App\Repository\FacturasRepository;
use App\Repository\AgruparproductoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//use \TCPDF;
use App\Services\Pfactura;
use App\Services\Pcotizacion;
use App\Services\NumeroALetras;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/facturas")
 */
class FacturasController extends AbstractController
{

      /**
    * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
     * @Route("/cotizador", name="cotizador_index", methods="GET")
     */
    public function indexpresupuesto(FacturasRepository $facturasRepository): Response
    {
        return $this->render('presupuesto/index.html.twig', ['facturas' => $facturasRepository->findByTipofactura("P")]);
    }



/**
   * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
     * @Route("/cotizacion_pdf/{id}", name="cotizacion_pdf", methods="GET")
     */
    public function cotizacion_pdf(FacturasRepository $facturasRepository,$id): Response
    {


        $entityManager = $this->getDoctrine()->getManager();
        $datos = $entityManager->getRepository(Facturas::class)->find($id);
        $iva =  $this->getParameter('iva');
    $html = $this->renderView(
         'presupuesto/pdf.html.twig',array('datos'=>$datos,'iva'=>$iva)
    );

  
    $this->pdfcotizacion($html,$id);
    }


    public function pdfcotizacion($html,$id){
 global $numerofactura, $first_name,$nombres,$idcliente,$direccion,$telefono,$fechavencimiento,$contactoprincipal,$comentarios;

   $entityManager = $this->getDoctrine()->getManager();
        $datos = $entityManager->getRepository(Facturas::class)->find($id);
      

    $contactoprincipal = $datos->getIdcliente()->getContactoPrincipal();
    $nombres = $datos->getIdcliente()->getNombre();
    $direccion = $datos->getIdcliente()->getDireccion();
    $numerofactura = $datos->getId();
    $idcliente = $datos->getIdcliente()->getNit();
    $telefono = $datos->getIdcliente()->getTelefonoMovil();
    $forma = $datos->getForma();
    $comentarios = $datos->getComentarios();
    if($datos->getDias() > 0){
           $fechavencimiento = $datos->getFechavencimiento()->format('d/m/Y');
    }else{
           $fechavencimiento = date("d/m/Y");
    }


        //set_time_limit(30); uncomment this line according to your needs
        // If you are not in a controller, retrieve of some way the service container and then retrieve it
        //$pdf = $this->container->get("white_october.tcpdf")->create('vertical', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        //if you are in a controlller use :
//        $pdf = $this->get("white_october.tcpdf")->create('vertical', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    $pagina = array("800","600");
        $pdf = new Pcotizacion();
     
     
        $pdf->SetAuthor('Presupuesto');
        $pdf->SetTitle('Cotizaciòn');
        $pdf->SetSubject('Our Code World Subject');
        $pdf->setFontSubsetting(true);
        $pdf->SetFont('courier', '', 10, '', true);
        $pdf->SetMargins(10,20,10, true);




// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, 70, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(25);
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






$pdf->writeHTMLCell($w = 0, $h = 60, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);


        $pdf->Output($filename.".pdf",'I'); // This will output the PDF as a response directly
}

    /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
     * @Route("/factura_pdf/{id}", name="factura_pdf", methods="GET")
     */
    public function factura_pdf(FacturasRepository $facturasRepository,$id): Response
    {


        $entityManager = $this->getDoctrine()->getManager();
        $datos = $entityManager->getRepository(Facturas::class)->find($id);
        $iva =  $this->getParameter('iva');
    $html = $this->renderView(
         'facturas/pdf.html.twig',array('datos'=>$datos,'iva'=>$iva)
    );

  
    $this->pdfactura($html,$id);
    }


    public function pdfactura($html,$id){
 global $numerofactura, $first_name,$nombres,$idcliente,$direccion,$telefono,$fechavencimiento,$fecha;

   $entityManager = $this->getDoctrine()->getManager();
        $datos = $entityManager->getRepository(Facturas::class)->find($id);
      

    $nombres = $datos->getIdcliente()->getNombre();
    $direccion = $datos->getIdcliente()->getDireccion();
    $numerofactura = $datos->getNumfactura();
    $idcliente = $datos->getIdcliente()->getNit();
    $telefono = $datos->getIdcliente()->getTelefonoMovil();
    $forma = $datos->getForma();
    if($datos->getDias() > 0){
           $fechavencimiento = $datos->getFechavencimiento()->format('d/m/Y');
    }else{
           $fechavencimiento = date("d/m/Y");
    }
    $fecha = $datos->getFecha()->format('d/m/Y');

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
        $pdf->SetFont('courier', '', 10, '', true);
        $pdf->SetMargins(10,20,10, true);




// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, 70, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(25);
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






$pdf->writeHTMLCell($w = 0, $h = 60, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);


        $pdf->Output($filename.".pdf",'I'); // This will output the PDF as a response directly
}

    /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
     * @Route("/", name="facturas_index", methods="GET")
     */
    public function index(FacturasRepository $facturasRepository): Response
    {
        return $this->render('facturas/index.html.twig', ['facturas' => $facturasRepository->findAll()]);
    }

    /**     
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
     * @Route("/new/{cliente}", name="facturas_new", methods="GET|POST")
     */
    public function new(Request $request,$cliente,AgruparproductoRepository $agruparproductoRepository): Response
    {

        $productos = new DetallesFactura();
        $form1 = $this->createForm(DetallesFacturaType::class, $productos);
        $form1->handleRequest($request);


        $factura = new Facturas();
        $form = $this->createForm(FacturasType::class, $factura);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
 

            

if($factura->getDias() > 0){
            $fecha = $factura->getFecha()->format('Y-m-d');            
            $dias = $factura->getDias();
            $fecha_venci_noti= date("Y-m-d", strtotime("$fecha + $dias days"));
            $factura->setFechavencimiento(new \DateTime($fecha_venci_noti));
           
}
            

            $idcliente = $factura->getIdclientesrelacion();
            $ip=$this->getDoctrine()->getEntityManager();  
            $factura->setIdcliente($ip->getReference(Clientes::class,$idcliente));
            $factura->setTipofactura("F");
            $em = $this->getDoctrine()->getManager();
            $em->persist($factura);
            $em->flush();
            $idfactura = $factura->getId();
            for ($i=0; $i < count($_POST["productos"]); $i++) { 



            $productos = $_POST["productos"][$i];
            $cantidadnueva = $_POST["cantidad"][$i];
            $actual = 0;

            $agrupar = $agruparproductoRepository->findBy(["idproducto"=>$productos]);
            
            if(count($agrupar) > 0 ){                
                foreach ($agrupar as $key) {
                    $actual =  $key->getCantidad();
                    $idagrupar = $key->getId();
                }
                $post = $this->getDoctrine()->getManager()->getRepository(Agruparproducto::class)->find($idagrupar);
                $cantidadtotal = $actual - $cantidadnueva;
                $em = $this->getDoctrine()->getManager();
                $post->setCantidad($cantidadtotal);
                $em->persist($post);
                $em->flush();
            }

                $lineaproducto = new DetallesFactura();
                $lineaproducto->setCantidadactual($actual); 
                $lineaproducto->setCantidad($_POST["cantidad"][$i]);    
                $lineaproducto->setOrdenPromocion($_POST["promocion"][$i]);    
                $lineaproducto->setComentarios($_POST["comentarios"][$i]);
                $lineaproducto->setPrecio($_POST["precio"][$i]);
                $lineaproducto->setTotal($_POST["total"][$i]);
                $lineaproducto->setDescuento($_POST["descuento"][$i]);
                $lineaproducto->setPrecioreal($_POST["precioreal"][$i]);
                $lineaproducto->setIdproducto($ip->getReference(Productos::class,$_POST["productos"][$i]));
                $lineaproducto->setIdfactura($ip->getReference(Facturas::class,$idfactura));
                $em = $this->getDoctrine()->getManager();
                $em->persist($lineaproducto);
                $em->flush();

            




            } // finaliza el ciclo for

                $movimientos = new MovimientosAlmacen();
                $movimientos->setIdfactura($ip->getReference(Facturas::class,$idfactura));
                if($factura->getDias() > 0){
                    $status = 3;
                       $movimientos->setStatus($status);
                }else{
                    $status = 2;
                    $movimientos->setStatus($status);
                }
                $em = $this->getDoctrine()->getManager();
                $em->persist($movimientos);
                $em->flush();
            //return $this->redirectToRoute('facturas_index');
                  return $this->redirectToRoute('facturas_show', ['id' => $factura->getId()]);
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
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
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
     * @Security("has_role('ROLE_ADMIN') or is_granted('ROLE_FACTURA')")
     * @Route("/{id}/{cliente}/edit", name="facturas_edit", methods="GET|POST")
     */
    public function edit(Request $request, Facturas $factura,$cliente,AgruparproductoRepository $agruparproductoRepository): Response
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


        if($factura->getDias() > 0){
            $fecha = $factura->getFecha()->format('Y-m-d');            
            $dias = $factura->getDias();
            $fecha_venci_noti= date("Y-m-d", strtotime("$fecha + $dias days"));
            $factura->setFechavencimiento(new \DateTime($fecha_venci_noti));
           
        }
            $factura->setTipofactura("F");

            $this->getDoctrine()->getManager()->flush();

              $ip=$this->getDoctrine()->getEntityManager();  

              foreach ($productosfacturados as $key) {
            
            $productos = $key->getIdproducto();;
            $cantidadnueva = $key->getCantidad();;


            $agrupar = $agruparproductoRepository->findBy(["idproducto"=>$productos]);
            $actual = 0;
            if(count($agrupar) > 0 ){                
                foreach ($agrupar as $key) {
                    $actual =  $key->getCantidad();
                    $idagrupar = $key->getId();
                }
                $post = $this->getDoctrine()->getManager()->getRepository(Agruparproducto::class)->find($idagrupar);
                $cantidadtotal = $actual + $cantidadnueva;
                $em = $this->getDoctrine()->getManager();
                $post->setCantidad($cantidadtotal);
                $em->persist($post);
                $em->flush();
            }


            }//finaliza el foreach


        $em = $this->getDoctrine()->getManager();
        $dql_query = $em->createQuery("
                                DELETE FROM App:DetallesFactura o
                                WHERE                             
                                o.idfactura = '".$factura."'
        ");
        $results = $dql_query->getResult();


             for ($i=0; $i < count($_POST["productos"]); $i++) { 
                    $productos = $_POST["productos"][$i];
            $cantidadnueva = $_POST["cantidad"][$i];

            $agrupar = $agruparproductoRepository->findBy(["idproducto"=>$productos]);
            if(count($agrupar) > 0 ){   
                
            $actual = 0;             
                foreach ($agrupar as $key) {
                    $actual =  $key->getCantidad();
                    $idagrupar = $key->getId();
                }
                $post = $this->getDoctrine()->getManager()->getRepository(Agruparproducto::class)->find($idagrupar);
                $cantidadtotal = $actual - $cantidadnueva;
                $em = $this->getDoctrine()->getManager();
                $post->setCantidad($cantidadtotal);
                $em->persist($post);
                $em->flush();
            }

                $lineaproducto = new DetallesFactura();
                $lineaproducto->setCantidad($_POST["cantidad"][$i]);  
                $lineaproducto->setCantidadactual($actual);  
                $lineaproducto->setOrdenPromocion($_POST["promocion"][$i]);    
                $lineaproducto->setComentarios($_POST["comentarios"][$i]);
                $lineaproducto->setPrecio($_POST["precio"][$i]);
                $lineaproducto->setTotal($_POST["total"][$i]);
                $lineaproducto->setDescuento($_POST["descuento"][$i]);
                $lineaproducto->setPrecioreal($_POST["precioreal"][$i]);
                $lineaproducto->setIdproducto($ip->getReference(Productos::class,$_POST["productos"][$i]));
                $lineaproducto->setIdfactura($ip->getReference(Facturas::class,$factura));
                $em = $this->getDoctrine()->getManager();
                $em->persist($lineaproducto);
                $em->flush();


        
            
         
            }



//$movimientos = $this->getDoctrine()
        //->getManager()->getRepository(MovimientosAlmacen::class)
        //->findBy(['idfactura'=>$factura]);
        $entityManager = $this->getDoctrine()->getManager();
        $movimientos = $entityManager->getRepository(MovimientosAlmacen::class)->findByIdfactura($factura);

        foreach ($movimientos as $value) {
                if($factura->getDias() > 0){
                    $status = 3;
                       $value->setStatus($status);
                }else{
                    $status = 2;
                    $value->setStatus($status);
                }
                $em = $this->getDoctrine()->getManager();
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
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/delete/{id}", name="facturas_delete", methods="DELETE")
     */
    public function delete(Request $request, Facturas $factura,FacturasRepository $facturasRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$factura->getId(), $request->request->get('_token'))) {

     foreach ($factura->getDetallesFacturas() as $nuevo){
               $cantidad = $nuevo->getCantidad();

        foreach ($nuevo->getIdproducto()->getAgruparproductos() as $value) {
            $idstock = $value->getId();
        $idcantidaactual = $value->getCantidad()+$cantidad;
        $entityManager = $this->getDoctrine()->getManager();
        $product = $entityManager->getRepository(Agruparproducto::class)->find($idstock);
        $product->setCantidad($idcantidaactual);
        $entityManager->flush();
        }
     }
    
            $factura = $facturasRepository->find($factura);
            $factura->setTipofactura('A');
            $em = $this->getDoctrine()->getManager();
            $em->persist($factura);
            $em->flush();

           /* $em = $this->getDoctrine()->getManager();
            $em->remove($factura);
            $em->flush();*/
        }

        return $this->redirectToRoute('facturas_index');
    }


      /**
    * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
     * @Route("/new/presupuesto/{cliente}", name="presupuesto_new", methods="GET|POST")
     */
    public function newpresupuesto(Request $request,$cliente,AgruparproductoRepository $agruparproductoRepository): Response
    {

        $productos = new DetallesFactura();
        $form1 = $this->createForm(DetallesFacturaType::class, $productos);
        $form1->handleRequest($request);


        $factura = new Facturas();
        $form = $this->createForm(PresupuestoType::class, $factura);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $idcliente = $factura->getIdclientesrelacion();
            $ip=$this->getDoctrine()->getEntityManager();  
            $factura->setIdcliente($ip->getReference(Clientes::class,$idcliente));
            $factura->setTipofactura("P");
            $em = $this->getDoctrine()->getManager();
            $em->persist($factura);
            $em->flush();
            $idfactura = $factura->getId();
            for ($i=0; $i < count($_POST["productos"]); $i++) { 



            $productos = $_POST["productos"][$i];
            $cantidadnueva = $_POST["cantidad"][$i];
            $actual = 0;

            $agrupar = $agruparproductoRepository->findBy(["idproducto"=>$productos]);
            
        

                $lineaproducto = new DetallesFactura();
                
                $lineaproducto->setCantidad($_POST["cantidad"][$i]);    
                $lineaproducto->setOrdenPromocion($_POST["promocion"][$i]);    
                $lineaproducto->setComentarios($_POST["comentarios"][$i]);
                $lineaproducto->setPrecio($_POST["precio"][$i]);
                $lineaproducto->setTotal($_POST["total"][$i]);
                $lineaproducto->setDescuento($_POST["descuento"][$i]);
                $lineaproducto->setIdproducto($ip->getReference(Productos::class,$_POST["productos"][$i]));
                $lineaproducto->setIdfactura($ip->getReference(Facturas::class,$idfactura));
                $em = $this->getDoctrine()->getManager();
                $em->persist($lineaproducto);
                $em->flush();

            




            } // finaliza el ciclo for

              
            //return $this->redirectToRoute('facturas_index');
                  return $this->redirectToRoute('cotizador_show', ['id' => $factura->getId()]);
        }

        return $this->render('presupuesto/new.html.twig', [
            'factura' => $factura,
            'form' => $form->createView(),
            'productos' => $productos,
            'form1' => $form1->createView(),
            'cliente'=>$cliente
        ]);
    }

     /**
    * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
     * @Route("/cotizador/{id}", name="cotizador_show", methods="GET")
     */
    public function cotizadorshow(Facturas $factura): Response
    {

        $productosfacturados = $this->getDoctrine()
        ->getRepository(DetallesFactura::class)
        ->findBy(['idfactura'=>$factura]);
        return $this->render('presupuesto/show.html.twig', ['factura' => $factura,'productosfacturados'=>$productosfacturados]);
    }


/**
     * @Route("/{id}/{cliente}/edit/cotizador", name="cotizador_edit", methods="GET|POST")
     */
    public function editcotizador(Request $request, Facturas $factura,$cliente,AgruparproductoRepository $agruparproductoRepository): Response
    {


        $productosfacturados = $this->getDoctrine()
        ->getRepository(DetallesFactura::class)
        ->findBy(['idfactura'=>$factura]);
      

           $productos = new DetallesFactura();
        $form1 = $this->createForm(DetallesFacturaType::class, $productos);
        $form1->handleRequest($request);
        $form = $this->createForm(PresupuestoType::class, $factura);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $factura->setTipofactura("P");
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
                    $productos = $_POST["productos"][$i];
            $cantidadnueva = $_POST["cantidad"][$i];

           
                $lineaproducto = new DetallesFactura();
                $lineaproducto->setCantidad($_POST["cantidad"][$i]);  
                $lineaproducto->setOrdenPromocion($_POST["promocion"][$i]);    
                $lineaproducto->setComentarios($_POST["comentarios"][$i]);
                $lineaproducto->setPrecio($_POST["precio"][$i]);
                $lineaproducto->setTotal($_POST["total"][$i]);
                $lineaproducto->setDescuento($_POST["descuento"][$i]);
                $lineaproducto->setIdproducto($ip->getReference(Productos::class,$_POST["productos"][$i]));
                $lineaproducto->setIdfactura($ip->getReference(Facturas::class,$factura));
                $em = $this->getDoctrine()->getManager();
                $em->persist($lineaproducto);
                $em->flush();


        
            
         
            }

            
            return $this->redirectToRoute('cotizador_show', ['id' => $factura->getId()]);
             //return $this->redirectToRoute('facturas_index');
        }

        return $this->render('presupuesto/edit.html.twig', [
            'factura' => $factura,
            'form' => $form->createView(),
            'cliente'=>$cliente,
            'form1' => $form1->createView(),
            'cliente'=>$cliente,
            'productosfacturados'=>$productosfacturados
        ]);
    }

  


}

