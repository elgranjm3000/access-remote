<?php

namespace App\Controller;

use App\Entity\Facturas;
use App\Form\FacturasType;
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
     * @Route("/new", name="facturas_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $factura = new Facturas();
        $form = $this->createForm(FacturasType::class, $factura);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($factura);
            $em->flush();

            return $this->redirectToRoute('facturas_index');
        }

        return $this->render('facturas/new.html.twig', [
            'factura' => $factura,
            'form' => $form->createView(),
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
     * @Route("/{id}/edit", name="facturas_edit", methods="GET|POST")
     */
    public function edit(Request $request, Facturas $factura): Response
    {
        $form = $this->createForm(FacturasType::class, $factura);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('facturas_edit', ['id' => $factura->getId()]);
        }

        return $this->render('facturas/edit.html.twig', [
            'factura' => $factura,
            'form' => $form->createView(),
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
