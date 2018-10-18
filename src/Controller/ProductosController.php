<?php

namespace App\Controller;

use App\Entity\Productos;
use App\Form\ProductosType;
use App\Repository\ProductosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
/**
 * @Route("/productos")
 */
class ProductosController extends AbstractController
{

    /**
     * @Route("/buscarproducto", name="buscarproducto", methods="GET")
     */
    public function buscarproducto(Request $request)
    {

      
        $entityManager = $this->getDoctrine();     
        $tareas = $entityManager->getRepository(Productos::class)->find($_GET['iditems']);
        $localidad['precioventa'] =   $tareas->getprecioVenta();           
        $generardatos[] = $localidad;
         
        
        return new JsonResponse($generardatos);
        
        
    }
    /**
     * @Route("/", name="productos_index", methods="GET")
     */
    public function index(ProductosRepository $productosRepository): Response
    {
        return $this->render('productos/index.html.twig', ['productos' => $productosRepository->findAll()]);
    }

    /**
     * @Route("/new", name="productos_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $producto = new Productos();
        $form = $this->createForm(ProductosType::class, $producto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

 
            if($producto->getBrochure()==null){
            //    echo "no hay";
            }else{


         //   echo $file->getClientOriginalName();


            $file = $producto->getBrochure();
            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
            try {
                $file->move(
                    $this->getParameter('brochures_directory'),
                    $fileName
                );
            } catch (FileException $e) {
                
            }

        }


            $em = $this->getDoctrine()->getManager();
            $em->persist($producto);
            $em->flush();

            $idproducto = $producto->getId();
           
            if($producto->getBrochure()==null){
            //    echo "no hay";
            }else{

            $post = $this->getDoctrine()->getRepository(Productos::class)->find($idproducto);
            $post->setBrochure($fileName);
               $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();
        }


            return $this->redirectToRoute('productos_index');
        }

        return $this->render('productos/new.html.twig', [
            'producto' => $producto,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="productos_show", methods="GET")
     */
    public function show(Productos $producto): Response
    {
        return $this->render('productos/show.html.twig', ['producto' => $producto]);
    }

    /**
     * @Route("/{id}/edit", name="productos_edit", methods="GET|POST")
     */
    public function edit(Request $request, Productos $producto): Response
    {

      
        $form = $this->createForm(ProductosType::class, $producto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
echo $producto->getBrochure();
exit;

  if($producto->getBrochure()==null){
            //    echo "no hay";
            }else{


         //   echo $file->getClientOriginalName();


            $file = $producto->getBrochure();
            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
            try {
                $file->move(
                    $this->getParameter('brochures_directory'),
                    $fileName
                );
            } catch (FileException $e) {
                
            }

             $post = $this->getDoctrine()->getRepository(Productos::class)->find($producto->getId());
            $post->setBrochure($fileName);
               $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

        }


            $this->getDoctrine()->getManager()->flush();




            return $this->redirectToRoute('productos_edit', ['id' => $producto->getId()]);
        }

        return $this->render('productos/edit.html.twig', [
            'producto' => $producto,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="productos_delete", methods="DELETE")
     */
    public function delete(Request $request, Productos $producto): Response
    {
        if ($this->isCsrfTokenValid('delete'.$producto->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($producto);
            $em->flush();
        }

        return $this->redirectToRoute('productos_index');
    }

    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }
}