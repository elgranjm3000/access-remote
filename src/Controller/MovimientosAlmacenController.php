<?php

namespace App\Controller;

use App\Entity\MovimientosAlmacen;
use App\Entity\Facturas;
use App\Entity\Productos;
use App\Form\MovimientosAlmacenType;
use App\Form\MovimientosAlmacen1Type;
use App\Repository\MovimientosAlmacenRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Services\Inventario;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
/**
 * @Route("/movimientos/almacen")
 */
class MovimientosAlmacenController extends AbstractController
{


     /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
     * @Route("/inventario", name="inventario", methods="GET|POST")
     */
    public function inventario(Request $request): Response
    {
        $movimientosAlmacen = new MovimientosAlmacen();
        $form = $this->createForm(MovimientosAlmacen1Type::class, $movimientosAlmacen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        

        $entityManager = $this->getDoctrine()->getManager();
        $datos = $entityManager->getRepository(Productos::class)->findAll();

    $html = $this->renderView(
         'movimientos_almacen/pdf.html.twig',array('datos'=>$datos)
    );

  
    $this->pdfinventario($html);
        

           // return $this->redirectToRoute('movimientos_almacen_index');
        }

        return $this->render('movimientos_almacen/inventario.html.twig', [
            'movimientos_almacen' => $movimientosAlmacen,
            'form' => $form->createView(),
        ]);
    }


public function pdfinventario($html){

        $pagina = array("800","600");
        $pdf = new Inventario();
     
     
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
    * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
     * @Route("/", name="movimientos_almacen_index", methods="GET")
     */
    public function index(MovimientosAlmacenRepository $movimientosAlmacenRepository): Response
    {
        return $this->render('movimientos_almacen/index.html.twig', ['movimientos_almacens' => $movimientosAlmacenRepository->findAll()]);
    }

    /**
    * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA') or is_granted('ROLE_ALMACEN')")
     * @Route("/new", name="movimientos_almacen_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $movimientosAlmacen = new MovimientosAlmacen();
        $form = $this->createForm(MovimientosAlmacenType::class, $movimientosAlmacen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($movimientosAlmacen);
            $em->flush();

            return $this->redirectToRoute('movimientos_almacen_index');
        }

        return $this->render('movimientos_almacen/new.html.twig', [
            'movimientos_almacen' => $movimientosAlmacen,
            'form' => $form->createView(),
        ]);
    }

    /**
    * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
     * @Route("/{id}", name="movimientos_almacen_show", methods="GET")
     */
    public function show(MovimientosAlmacen $movimientosAlmacen): Response
    {
        return $this->render('movimientos_almacen/show.html.twig', ['movimientos_almacen' => $movimientosAlmacen]);
    }

    /**
     * @Security("is_granted('ROLE_ADMIN')")
     * @Route("/{id}/edit", name="movimientos_almacen_edit", methods="GET|POST")
     */
    public function edit(Request $request, MovimientosAlmacen $movimientosAlmacen): Response
    {
        $form = $this->createForm(MovimientosAlmacenType::class, $movimientosAlmacen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('movimientos_almacen_edit', ['id' => $movimientosAlmacen->getId()]);
        }

        return $this->render('movimientos_almacen/edit.html.twig', [
            'movimientos_almacen' => $movimientosAlmacen,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Security("is_granted('ROLE_ADMIN')")
     * @Route("/{id}", name="movimientos_almacen_delete", methods="DELETE")
     */
    public function delete(Request $request, MovimientosAlmacen $movimientosAlmacen): Response
    {
        if ($this->isCsrfTokenValid('delete'.$movimientosAlmacen->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($movimientosAlmacen);
            $em->flush();
        }

        return $this->redirectToRoute('movimientos_almacen_index');
    }
}
