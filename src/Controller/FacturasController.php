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

/**
 * @Route("/facturas")
 */
class FacturasController extends AbstractController
{
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
            for ($i=1; $i < count($_POST["productos"]); $i++) { 
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
        return $this->render('facturas/show.html.twig', ['factura' => $factura]);
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


             for ($i=1; $i < count($_POST["productos"]); $i++) { 
                
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

           // return $this->redirectToRoute('facturas_edit', ['id' => $factura->getId()]);
             return $this->redirectToRoute('facturas_index');
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

