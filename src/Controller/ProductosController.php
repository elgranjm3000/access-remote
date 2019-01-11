<?php

namespace App\Controller;

use App\Entity\Productos;
use App\Entity\Ingresos;
use App\Entity\Agruparproducto;
use App\Entity\Ensamble;
use App\Form\ProductosType;
use App\Form\EnsambleType;
use App\Form\Ensamble1Type;
use App\Repository\ProductosRepository;
use App\Repository\EnsambleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


/**
 * @Route("/productos")
 */
class ProductosController extends AbstractController
{




    /**
    * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_ALMACEN')")
     * @Route("/disponibilidad", name="disponibilidad", methods="GET")
     */
    public function disponibilidad(Request $request)
    {

        $cantidad = $_GET["cantidad"];
        $productos = $_GET["producto"];
        $generardatos = array();
        $entityManager = $this->getDoctrine();     
        $tareas = $entityManager->getRepository(Agruparproducto::class)->findBy(['idproducto'=>$productos]);
        $suma = 0;
        foreach ($tareas as  $value) {
                $suma = $suma + $value->getCantidad();  
                $localidad['cantidad'] =   $suma;           
                $generardatos[] = $localidad;
        }
         
        
        return new JsonResponse($generardatos);
        
        
    }
    /**    
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_ALMACEN')")
     * @Route("/buscarproducto", name="buscarproducto", methods="GET")
     */
    public function buscarproducto(Request $request)
    {

      
        $entityManager = $this->getDoctrine();     
        $tareas = $entityManager->getRepository(Productos::class)->find($_GET['iditems']);
        $localidad['precioventa'] =   $tareas->getprecioVenta();   
        $localidad['produccion'] = $tareas->getId();  
        foreach ($tareas->getAgruparproductos() as $key ) {
                   $localidad['disponibilidad'] = $key->getCantidad();
              }      
        
        
        $generardatos[] = $localidad;
         
        
        return new JsonResponse($generardatos);
        
        
    }

    /**     
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_ALMACEN')")
     * @Route("/", name="productos_index", methods="GET")
     */
    public function index(ProductosRepository $productosRepository): Response
    {
        return $this->render('productos/index.html.twig', ['productos' => $productosRepository->findAll()]);
    }


    /**
     * @Security("is_granted('ROLE_ADMIN')")
     * @Route("/emsableremove", name="emsableremove", methods="GET")
     */
    public function emsableremove(Request $request)
    {

      
        $entityManager = $this->getDoctrine();     
        $tareas = $entityManager->getRepository(Ensamble::class)->find($_GET['id']);
        $em = $this->getDoctrine()->getManager();
        $em->remove($tareas);
        $em->flush();
        $localidad['precioventa'] =   "Eliminado";           
        $generardatos[] = $localidad;         
        
        return new JsonResponse($generardatos);
        
        
    }

    /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA') or is_granted('ROLE_ALMACEN')")
     * @Route("/{id}/edit/ensamble", name="productos_edit_ensamble", methods="GET|POST")
     */
    public function editensamble(Request $request, Productos $producto): Response
    {

        $ensambleslistado = $this->getDoctrine()
        ->getRepository(Ensamble::class)
        ->findBy(['idproducto'=>$producto]);


        $productosemsable = new Ensamble();
        $form1 = $this->createForm(Ensamble1Type::class, $productosemsable);
        $form1->handleRequest($request);
      
        $form = $this->createForm(EnsambleType::class, $producto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
        $em = $this->getDoctrine()->getManager();

        $dql_query = $em->createQuery("
                                DELETE FROM App:Ensamble o
                                WHERE                             
                                o.idproducto = '".$producto."'
        ");
        $results = $dql_query->getResult();


         $ip=$this->getDoctrine()->getEntityManager();  
            

            for ($i=0; $i < count($_POST["productos"]); $i++) { 
                $productosemsable = new Ensamble();
                $productosemsable->setCantidad($_POST["cantidad"][$i]);
                $productosemsable->setMonto($_POST["precio"][$i]);
                $productosemsable->setSubtotal($_POST["subtotal"][$i]);
                $productosemsable->setIdproducto($ip->getReference(Productos::class,$producto));
                $productosemsable->setProductoadd($ip->getReference(Productos::class,$_POST["productos"][$i]));
                $em = $this->getDoctrine()->getManager();
                $em->persist($productosemsable);
                $em->flush();
            }

            return $this->redirectToRoute('productos_index');


        }

        return $this->render('ensamble/edit.html.twig', [
            'producto' => $producto,
            'form' => $form->createView(),
            'form1' => $form1->createView(),
            'ensambleslistado' => $ensambleslistado
        ]);
    }

    /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_ALMACEN')")
     * @Route("/ensable", name="productos_new_ensamble", methods="GET|POST")
     */
    public function newensamble(Request $request): Response
    {

        $productosemsable = new Ensamble();
        $form1 = $this->createForm(Ensamble1Type::class, $productosemsable);
        $form1->handleRequest($request);

        $ensamble = new Productos();
        $form = $this->createForm(EnsambleType::class, $ensamble);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) { 

            $em = $this->getDoctrine()->getManager();
            $fecha_actual= date("Y-m-d");            
            
            $ensamble->setFechaensamble(new \DateTime($fecha_actual));
            $em->persist($ensamble);
            $em->flush();
            $ip=$this->getDoctrine()->getEntityManager();  
            $idemsalbe = $ensamble->getId(); 

            for ($i=0; $i < count($_POST["productos"]); $i++) { 
                $productosemsable = new Ensamble();
                $productosemsable->setCantidad($_POST["cantidad"][$i]);
                $productosemsable->setMonto($_POST["precio"][$i]);
                $productosemsable->setSubtotal($_POST["subtotal"][$i]);
                $productosemsable->setIdproducto($ip->getReference(Productos::class,$idemsalbe));
                $productosemsable->setProductoadd($ip->getReference(Productos::class,$_POST["productos"][$i]));
                $em = $this->getDoctrine()->getManager();
                $em->persist($productosemsable);
                $em->flush();
            }

            return $this->redirectToRoute('productos_index');
        }

        return $this->render('ensamble/new.html.twig', [
            'ensamble' => $ensamble,
            'form' => $form->createView(),
            'form1' => $form1->createView(),
           
        ]);
    }

    /**
     * @Security("has_role('ROLE_ADMIN') or is_granted('ROLE_ALMACEN')")
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
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_ALMACEN')")
     * @Route("/{id}", name="productos_show", methods="GET")
     */
    public function show(Productos $producto): Response
    {
        return $this->render('productos/show.html.twig', ['producto' => $producto]);
    }

    /**
    * @Security("has_role('ROLE_ADMIN') or is_granted('ROLE_ALMACEN')")
     * @Route("/{id}/edit", name="productos_edit", methods="GET|POST")
     */
    public function edit(Request $request, Productos $producto): Response
    {

      
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
     * @Security("has_role('ROLE_ADMIN')")
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
