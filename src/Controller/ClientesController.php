<?php

namespace App\Controller;

use App\Entity\Clientes;
use App\Form\ClientesType;
use App\Repository\ClientesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/clientes")
 */
class ClientesController extends AbstractController
{
    /**     
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
     * @Route("/", name="clientes_index", methods="GET")
     */
    public function index(ClientesRepository $clientesRepository): Response
    {
        return $this->render('clientes/index.html.twig', ['clientes' => $clientesRepository->findAll()]);
    }

    /**    
    * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA') or is_granted('ROLE_ALMACEN')")
     * @Route("/new", name="clientes_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $cliente = new Clientes();
        $form = $this->createForm(ClientesType::class, $cliente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

             $fecha= date("Y-m-d");
            $cliente->setIngreso(new \DateTime($fecha));
            $em->persist($cliente);
            $em->flush();

            return $this->redirectToRoute('clientes_index');
        }

        return $this->render('clientes/new.html.twig', [
            'cliente' => $cliente,
            'form' => $form->createView(),
        ]);
    }

    /**    
    * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA') or is_granted('ROLE_ALMACEN') or is_granted('ROLE_VENTAS')")
     * @Route("/{id}", name="clientes_show", methods="GET")
     */
    public function show(Clientes $cliente): Response
    {
        return $this->render('clientes/show.html.twig', ['cliente' => $cliente]);
    }

    /**    
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_VENTAS') or is_granted('ROLE_FACTURA') or is_granted('ROLE_ALMACEN')")
     * @Route("/{id}/edit", name="clientes_edit", methods="GET|POST")
     */
    public function edit(Request $request, Clientes $cliente): Response
    {
        $form = $this->createForm(ClientesType::class, $cliente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('clientes_edit', ['id' => $cliente->getId()]);
        }

        return $this->render('clientes/edit.html.twig', [
            'cliente' => $cliente,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/delete{id}", name="clientes_delete", methods="DELETE")
     */
    public function delete(Request $request, Clientes $cliente): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cliente->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($cliente);
            $em->flush();
        }

        return $this->redirectToRoute('clientes_index');
    }
}
