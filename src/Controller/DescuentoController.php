<?php

namespace App\Controller;

use App\Entity\Descuento;
use App\Form\DescuentoType;
use App\Repository\DescuentoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/descuento")
 */
class DescuentoController extends AbstractController
{

    /**
     * @Route("/buscardescuento", name="buscardescuento", methods="GET")
     */
    public function buscardescuento(Request $request)
    {

        $generardatos = array();
        $entityManager = $this->getDoctrine();     
        $tareas = $entityManager->getRepository(Descuento::class)->findByCantidad($_GET['id']);
        foreach ($tareas as  $value) {
                $localidad['porcentaje'] =   $value->getPorcentaje();           
                $generardatos[] = $localidad;
        }
        
         
        
        return new JsonResponse($generardatos);
        
        
    }

    /**
     * @Route("/", name="descuento_index", methods="GET")
     */
    public function index(DescuentoRepository $descuentoRepository): Response
    {
        return $this->render('descuento/index.html.twig', ['descuentos' => $descuentoRepository->findAll()]);
    }

    /**
     * @Route("/new", name="descuento_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $descuento = new Descuento();
        $form = $this->createForm(DescuentoType::class, $descuento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($descuento);
            $em->flush();

            return $this->redirectToRoute('descuento_index');
        }

        return $this->render('descuento/new.html.twig', [
            'descuento' => $descuento,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="descuento_show", methods="GET")
     */
    public function show(Descuento $descuento): Response
    {
        return $this->render('descuento/show.html.twig', ['descuento' => $descuento]);
    }

    /**
     * @Route("/{id}/edit", name="descuento_edit", methods="GET|POST")
     */
    public function edit(Request $request, Descuento $descuento): Response
    {
        $form = $this->createForm(DescuentoType::class, $descuento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('descuento_edit', ['id' => $descuento->getId()]);
        }

        return $this->render('descuento/edit.html.twig', [
            'descuento' => $descuento,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="descuento_delete", methods="DELETE")
     */
    public function delete(Request $request, Descuento $descuento): Response
    {
        if ($this->isCsrfTokenValid('delete'.$descuento->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($descuento);
            $em->flush();
        }

        return $this->redirectToRoute('descuento_index');
    }
}
