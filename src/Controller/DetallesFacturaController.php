<?php

namespace App\Controller;

use App\Entity\DetallesFactura;
use App\Form\DetallesFacturaType;
use App\Repository\DetallesFacturaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Productos;

/**
 * @Route("/detalles/factura")
 */
class DetallesFacturaController extends AbstractController
{


     /**
     * @Route("/search", name="detalles_factura_search", methods="GET",  defaults={"_format"="json"})
     */
     public function searchAuthor(Request $request)
    {
        $q = $request->query->get('q'); // use "term" instead of "q" for jquery-ui
       // $results = $this->getDoctrine()->getRepository(Productos::class)->findLikeNombre($q);

            $em = $this->getDoctrine()->getManager();

        $dql_query = $em->createQuery("
                                SELECT o FROM App:Productos o
                                WHERE                             
                                o.nombre LIKE '".$q."%'
        ");
        $results = $dql_query->getResult();

        return $this->render('detalles_factura/select.json.twig', ['results' => $results]);
    }


    /**
     * @Route("/search/author", name="detalles_factura_searchauthor", methods="GET",  defaults={"_format"="json"})
     */
    public function getAuthor($id = null)
    {
        $author = $this->getDoctrine()->getRepository(Productos::class)->find($id);

        return $this->json($author->getNombre());
    }
    /**
     * @Route("/", name="detalles_factura_index", methods="GET")
     */
    public function index(DetallesFacturaRepository $detallesFacturaRepository): Response
    {
        return $this->render('detalles_factura/index.html.twig', ['detalles_facturas' => $detallesFacturaRepository->findAll()]);
    }

    /**
     * @Route("/new", name="detalles_factura_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $detallesFactura = new DetallesFactura();
        $form = $this->createForm(DetallesFacturaType::class, $detallesFactura);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($detallesFactura);
            $em->flush();

            return $this->redirectToRoute('detalles_factura_index');
        }

        return $this->render('detalles_factura/new.html.twig', [
            'detalles_factura' => $detallesFactura,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="detalles_factura_show", methods="GET")
     */
    public function show(DetallesFactura $detallesFactura): Response
    {
        return $this->render('detalles_factura/show.html.twig', ['detalles_factura' => $detallesFactura]);
    }

    /**
     * @Route("/{id}/edit", name="detalles_factura_edit", methods="GET|POST")
     */
    public function edit(Request $request, DetallesFactura $detallesFactura): Response
    {
        $form = $this->createForm(DetallesFacturaType::class, $detallesFactura);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('detalles_factura_edit', ['id' => $detallesFactura->getId()]);
        }

        return $this->render('detalles_factura/edit.html.twig', [
            'detalles_factura' => $detallesFactura,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="detalles_factura_delete", methods="DELETE")
     */
    public function delete(Request $request, DetallesFactura $detallesFactura): Response
    {
        if ($this->isCsrfTokenValid('delete'.$detallesFactura->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($detallesFactura);
            $em->flush();
        }

        return $this->redirectToRoute('detalles_factura_index');
    }


   
}