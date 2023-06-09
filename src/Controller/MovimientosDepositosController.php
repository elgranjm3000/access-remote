<?php

namespace App\Controller;

use App\Entity\MovimientosDepositos;
use App\Entity\Facturas;
use App\Form\MovimientosDepositos1Type;
use App\Repository\MovimientosDepositosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
/**
 * @Route("/movimientos/depositos")
 */
class MovimientosDepositosController extends AbstractController
{
    /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
     * @Route("/", name="movimientos_depositos_index", methods="GET")
     */
    public function index(MovimientosDepositosRepository $movimientosDepositosRepository): Response
    {
        return $this->render('movimientos_depositos/index.html.twig', ['movimientos_depositos' => $movimientosDepositosRepository->findAll()]);
    }

    /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN') or is_granted('ROLE_FACTURA')")
     * @Route("/new/{deposito}", name="movimientos_depositos_new", methods="GET|POST")
     */
    public function new(Request $request,$deposito,MovimientosDepositosRepository $movimientosDepositosRepository): Response
    {
         $entityManager = $this->getDoctrine()->getManager();
        $datos = $entityManager->getRepository(Facturas::class)->find($deposito);
           /*   if($datos->getForma() == "CC"){
            $this->addFlash(
            'notice',
            'Opcion no habilitada para forma de pago A CONTADO'

        );


            return $this->redirectToRoute('facturas_index');
        }*/

 //$valores = $movimientosDepositosRepository->count(array("facturas"=>$deposito));
        $valores = $movimientosDepositosRepository->findOneByFacturas($deposito);
        $em = $this->getDoctrine()->getManager();
        $monto = 0;
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM movimientos_depositos WHERE facturas_id = ".$deposito);
        $statement->execute();
        $posts = $statement->fetchAll();
        foreach($posts as $post){
            $monto = $monto + $post["monto"];
        }
        
     
        $totalgeneral = $datos->getDetallesFacturas();
        
        
        $detalles = 0;
        foreach ($totalgeneral as $suma) {
             $detalles = $detalles + $suma->getTotal();   
        }
        
          $pagare = $detalles - $monto;
  
        if($pagare == 0){
            $this->addFlash(
            'notice',
            'No puede realizar mas depositos'

        );
            return $this->redirectToRoute('facturas_index');
        }
       
        $movimientosDeposito = new MovimientosDepositos();
        $form = $this->createForm(MovimientosDepositos1Type::class, $movimientosDeposito);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $idfactura = $movimientosDeposito->getIdfacturarelacion();
            $ip=$this->getDoctrine()->getEntityManager();  
            $movimientosDeposito->setFacturas($ip->getReference(Facturas::class,$idfactura));
            $em = $this->getDoctrine()->getManager();
            $em->persist($movimientosDeposito);
            $em->flush();

            return $this->redirectToRoute('movimientos_depositos_index');
        }

        return $this->render('movimientos_depositos/new.html.twig', [
            'movimientos_deposito' => $movimientosDeposito,
            'form' => $form->createView(),
            'deposito' => $deposito,
            'pagare' => $pagare
        ]);
    }

    /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
     * @Route("/{id}/{deposito}", name="movimientos_depositos_show", methods="GET")
     */
    public function show(MovimientosDepositos $movimientosDeposito,$deposito): Response
    {
        return $this->render('movimientos_depositos/show.html.twig', ['movimientos_deposito' => $movimientosDeposito,'deposito'=>$deposito]);
    }

    /**
      * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN') or is_granted('ROLE_FACTURA')")
     * @Route("/{id}/{deposito}/edit", name="movimientos_depositos_edit", methods="GET|POST")
     */
    public function edit(Request $request, MovimientosDepositos $movimientosDeposito,$deposito,MovimientosDepositosRepository $movimientosDepositosRepository): Response
    {

 $entityManager = $this->getDoctrine()->getManager();
        $datos = $entityManager->getRepository(Facturas::class)->find($deposito);
              if($datos->getForma() == "CC"){
            $this->addFlash(
            'notice',
            'Opcion no habilitada para forma de pago A CONTADO'

        );


            return $this->redirectToRoute('facturas_index');
        }

 //$valores = $movimientosDepositosRepository->count(array("facturas"=>$deposito));
        $valores = $movimientosDepositosRepository->findOneByFacturas($deposito);
        $em = $this->getDoctrine()->getManager();
        $monto = 0;
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM movimientos_depositos WHERE facturas_id = ".$deposito);
        $statement->execute();
        $posts = $statement->fetchAll();
        foreach($posts as $post){
            $monto = $monto + $post["monto"];
        }
        
     
        $totalgeneral = $datos->getDetallesFacturas();
        
        
        $detalles = 0;
        foreach ($totalgeneral as $suma) {
             $detalles = $detalles + $suma->getTotal();   
        }
        
          $pagare = $detalles - $monto;


        $form = $this->createForm(MovimientosDepositos1Type::class, $movimientosDeposito);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('movimientos_depositos_edit', ['id' => $movimientosDeposito->getId(),'deposito'=>$deposito]);
        }

        return $this->render('movimientos_depositos/edit.html.twig', [
            'movimientos_deposito' => $movimientosDeposito,
            'form' => $form->createView(),
            'deposito'=>$deposito,
            'pagare'=>$pagare
        ]);
    }

    /**
      * @Security("is_granted('ROLE_ADMIN')")
     * @Route("/{id}", name="movimientos_depositos_delete", methods="DELETE")
     */
    public function delete(Request $request, MovimientosDepositos $movimientosDeposito): Response
    {
        if ($this->isCsrfTokenValid('delete'.$movimientosDeposito->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($movimientosDeposito);
            $em->flush();
        }

        return $this->redirectToRoute('movimientos_depositos_index');
    }
}
