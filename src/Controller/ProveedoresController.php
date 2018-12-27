<?php

namespace App\Controller;

use App\Entity\Proveedores;
use App\Form\ProveedoresType;
use App\Repository\ProveedoresRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


/**
 * @Route("/proveedores")
 */
class ProveedoresController extends AbstractController
{
    /**    
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_ALMACEN')")
     * @Route("/", name="proveedores_index", methods="GET")
     */
    public function index(ProveedoresRepository $proveedoresRepository): Response
    {

        
        return $this->render('proveedores/index.html.twig', ['proveedores' => $proveedoresRepository->findAll()]);
    }

    /**     
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_ALMACEN')")
     * @Route("/new", name="proveedores_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $proveedore = new Proveedores();
        $form = $this->createForm(ProveedoresType::class, $proveedore);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($proveedore);
            $em->flush();

            return $this->redirectToRoute('proveedores_index');
        }

        return $this->render('proveedores/new.html.twig', [
            'proveedore' => $proveedore,
            'form' => $form->createView(),
        ]);
    }

    /**
    * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_ALMACEN')")    
     * @Route("/{id}", name="proveedores_show", methods="GET")
     */
    public function show(Proveedores $proveedore): Response
    {
        return $this->render('proveedores/show.html.twig', ['proveedore' => $proveedore]);
    }

    /**
    * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_ALMACEN')")
     * @Route("/{id}/edit", name="proveedores_edit", methods="GET|POST")
     */
    public function edit(Request $request, Proveedores $proveedore): Response
    {
        $form = $this->createForm(ProveedoresType::class, $proveedore);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('proveedores_edit', ['id' => $proveedore->getId()]);
        }

        return $this->render('proveedores/edit.html.twig', [
            'proveedore' => $proveedore,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/{id}", name="proveedores_delete", methods="DELETE")
     */
    public function delete(Request $request, Proveedores $proveedore): Response
    {
        if ($this->isCsrfTokenValid('delete'.$proveedore->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($proveedore);
            $em->flush();
        }

        return $this->redirectToRoute('proveedores_index');
    }
}
