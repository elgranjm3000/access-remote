<?php

namespace App\Controller;

use App\Entity\Familia;
use App\Form\FamiliaType;
use App\Repository\FamiliaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/familia")
 */
class FamiliaController extends AbstractController
{
    /**
     * @Route("/", name="familia_index", methods="GET")
     */
    public function index(FamiliaRepository $familiaRepository): Response
    {
        return $this->render('familia/index.html.twig', ['familias' => $familiaRepository->findAll()]);
    }

    /**
     * @Route("/new", name="familia_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $familium = new Familia();
        $form = $this->createForm(FamiliaType::class, $familium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($familium);
            $em->flush();

            return $this->redirectToRoute('familia_index');
        }

        return $this->render('familia/new.html.twig', [
            'familium' => $familium,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="familia_show", methods="GET")
     */
    public function show(Familia $familium): Response
    {
        return $this->render('familia/show.html.twig', ['familium' => $familium]);
    }

    /**
     * @Route("/{id}/edit", name="familia_edit", methods="GET|POST")
     */
    public function edit(Request $request, Familia $familium): Response
    {
        $form = $this->createForm(FamiliaType::class, $familium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('familia_edit', ['id' => $familium->getId()]);
        }

        return $this->render('familia/edit.html.twig', [
            'familium' => $familium,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="familia_delete", methods="DELETE")
     */
    public function delete(Request $request, Familia $familium): Response
    {
        if ($this->isCsrfTokenValid('delete'.$familium->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($familium);
            $em->flush();
        }

        return $this->redirectToRoute('familia_index');
    }
}
