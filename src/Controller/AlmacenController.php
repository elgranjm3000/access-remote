<?php

namespace App\Controller;

use App\Entity\Almacen;
use App\Form\AlmacenType;
use App\Repository\AlmacenRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
/**
 * @Route("/almacen")
 */
class AlmacenController extends AbstractController
{
    /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_ALMACEN')")
     * @Route("/", name="almacen_index", methods="GET")
     */
    public function index(AlmacenRepository $almacenRepository): Response
    {
        return $this->render('almacen/index.html.twig', ['almacens' => $almacenRepository->findAll()]);
    }

    /**
     * @Security("is_granted('ROLE_ADMIN')")
     * @Route("/new", name="almacen_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $almacen = new Almacen();
        $form = $this->createForm(AlmacenType::class, $almacen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($almacen);
            $em->flush();

            return $this->redirectToRoute('almacen_index');
        }

        return $this->render('almacen/new.html.twig', [
            'almacen' => $almacen,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_ALMACEN')")
     * @Route("/{id}", name="almacen_show", methods="GET")
     */
    public function show(Almacen $almacen): Response
    {
        return $this->render('almacen/show.html.twig', ['almacen' => $almacen]);
    }

    /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA') or is_granted('ROLE_ALMACEN')")
     * @Route("/{id}/edit", name="almacen_edit", methods="GET|POST")
     */
    public function edit(Request $request, Almacen $almacen): Response
    {
        $form = $this->createForm(AlmacenType::class, $almacen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('almacen_edit', ['id' => $almacen->getId()]);
        }

        return $this->render('almacen/edit.html.twig', [
            'almacen' => $almacen,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Security("is_granted('ROLE_ADMIN')")
     * @Route("/{id}", name="almacen_delete", methods="DELETE")
     */
    public function delete(Request $request, Almacen $almacen): Response
    {
        if ($this->isCsrfTokenValid('delete'.$almacen->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($almacen);
            $em->flush();
        }

        return $this->redirectToRoute('almacen_index');
    }
}
