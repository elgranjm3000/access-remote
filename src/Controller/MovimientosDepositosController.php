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

/**
 * @Route("/movimientos/depositos")
 */
class MovimientosDepositosController extends AbstractController
{
    /**
     * @Route("/", name="movimientos_depositos_index", methods="GET")
     */
    public function index(MovimientosDepositosRepository $movimientosDepositosRepository): Response
    {
        return $this->render('movimientos_depositos/index.html.twig', ['movimientos_depositos' => $movimientosDepositosRepository->findAll()]);
    }

    /**
     * @Route("/new/{deposito}", name="movimientos_depositos_new", methods="GET|POST")
     */
    public function new(Request $request,$deposito): Response
    {
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
            'deposito' => $deposito
        ]);
    }

    /**
     * @Route("/{id}/{deposito}", name="movimientos_depositos_show", methods="GET")
     */
    public function show(MovimientosDepositos $movimientosDeposito,$deposito): Response
    {
        return $this->render('movimientos_depositos/show.html.twig', ['movimientos_deposito' => $movimientosDeposito,'deposito'=>$deposito]);
    }

    /**
     * @Route("/{id}/{deposito}/edit", name="movimientos_depositos_edit", methods="GET|POST")
     */
    public function edit(Request $request, MovimientosDepositos $movimientosDeposito,$deposito): Response
    {
        $form = $this->createForm(MovimientosDepositos1Type::class, $movimientosDeposito);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('movimientos_depositos_edit', ['id' => $movimientosDeposito->getId(),'deposito'=>$deposito]);
        }

        return $this->render('movimientos_depositos/edit.html.twig', [
            'movimientos_deposito' => $movimientosDeposito,
            'form' => $form->createView(),
            'deposito'=>$deposito
        ]);
    }

    /**
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
