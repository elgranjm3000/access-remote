<?php

namespace App\Controller;

use App\Entity\MovimientosAlmacen;
use App\Form\MovimientosAlmacenType;
use App\Repository\MovimientosAlmacenRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/movimientos/almacen")
 */
class MovimientosAlmacenController extends AbstractController
{
    /**
     * @Route("/", name="movimientos_almacen_index", methods="GET")
     */
    public function index(MovimientosAlmacenRepository $movimientosAlmacenRepository): Response
    {
        return $this->render('movimientos_almacen/index.html.twig', ['movimientos_almacens' => $movimientosAlmacenRepository->findAll()]);
    }

    /**
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
     * @Route("/{id}", name="movimientos_almacen_show", methods="GET")
     */
    public function show(MovimientosAlmacen $movimientosAlmacen): Response
    {
        return $this->render('movimientos_almacen/show.html.twig', ['movimientos_almacen' => $movimientosAlmacen]);
    }

    /**
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
