<?php

namespace App\Controller;

use App\Entity\Ingresos;
use App\Entity\Productos;
use App\Entity\Agruparproducto;
use App\Form\IngresosType;
use App\Repository\IngresosRepository;
use App\Repository\AgruparproductoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/ingresos")
 */
class IngresosController extends AbstractController
{
    /**
     * @Route("/", name="ingresos_index", methods="GET")
     */
    public function index(IngresosRepository $ingresosRepository): Response
    {
        return $this->render('ingresos/index.html.twig', ['ingresos' => $ingresosRepository->findAll()]);
    }

    /**
     * @Route("/new", name="ingresos_new", methods="GET|POST")
     */
    public function new(Request $request, AgruparproductoRepository $agruparproductoRepository): Response
    {
        $ingreso = new Ingresos();
        $form = $this->createForm(IngresosType::class, $ingreso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $productos = $ingreso->getProductos();
            $cantidadnueva = $ingreso->getCantidad();
            $agrupar = $agruparproductoRepository->findBy(["idproducto"=>$productos]);
            
            if(count($agrupar) > 0 ){                
                foreach ($agrupar as $key) {
                    $actual =  $key->getCantidad();
                    $idagrupar = $key->getId();
                }
                $post = $this->getDoctrine()->getManager()->getRepository(Agruparproducto::class)->find($idagrupar);
                $cantidadtotal = $actual + $cantidadnueva;
                $em = $this->getDoctrine()->getManager();
                $post->setCantidad($cantidadtotal);
                $em->persist($post);
                $em->flush();
            }else{
                $ip=$this->getDoctrine()->getEntityManager();
                $agrupar = new Agruparproducto();
                $agrupar->setIdproducto($ip->getReference(Productos::class,$productos));
                $agrupar->setCantidad($cantidadnueva);
                $em = $this->getDoctrine()->getManager();
                $em->persist($agrupar);
                $em->flush();
            }
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($ingreso);
            $em->flush();

            


            return $this->redirectToRoute('ingresos_index');
        }

        return $this->render('ingresos/new.html.twig', [
            'ingreso' => $ingreso,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="ingresos_show", methods="GET")
     */
    public function show(Ingresos $ingreso): Response
    {
        return $this->render('ingresos/show.html.twig', ['ingreso' => $ingreso]);
    }

    /**
     * @Route("/{id}/edit", name="ingresos_edit", methods="GET|POST")
     */
    public function edit(Request $request, Ingresos $ingreso): Response
    {
        $form = $this->createForm(IngresosType::class, $ingreso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ingresos_edit', ['id' => $ingreso->getId()]);
        }

        return $this->render('ingresos/edit.html.twig', [
            'ingreso' => $ingreso,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="ingresos_delete", methods="DELETE")
     */
    public function delete(Request $request, Ingresos $ingreso,AgruparproductoRepository $agruparproductoRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ingreso->getId(), $request->request->get('_token'))) {
            
            $productos = $ingreso->getProductos();
            $cantidadnueva = $ingreso->getCantidad();

            $agrupar = $agruparproductoRepository->findBy(["idproducto"=>$productos]);
            
            if(count($agrupar) > 0 ){                
                foreach ($agrupar as $key) {
                    $actual =  $key->getCantidad();
                    $idagrupar = $key->getId();
                }
                $post = $this->getDoctrine()->getManager()->getRepository(Agruparproducto::class)->find($idagrupar);
                $cantidadtotal = $actual - $cantidadnueva;
                $em = $this->getDoctrine()->getManager();
                $post->setCantidad($cantidadtotal);
                $em->persist($post);
                $em->flush();
            }


            $em = $this->getDoctrine()->getManager();
            $em->remove($ingreso);
            $em->flush();
        }

        return $this->redirectToRoute('ingresos_index');
    }
}
