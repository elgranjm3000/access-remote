<?php

namespace App\Controller;

use App\Entity\Metas;
use App\Entity\User;
use App\Form\MetasType;
use App\Repository\MetasRepository;
use App\Repository\User1Repository;
use App\Repository\FacturasRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/metas")
 */
class MetasController extends AbstractController
{



    /**
     * @Route("/graficos", name="metas_graficos", methods="GET")
     */
    public function graficos(User1Repository $user1Repository, FacturasRepository $facturasRepository): Response
    {
            $usuario = $user1Repository->findAll();
            $facturas = $facturasRepository->findAll();
            foreach ($usuario as $value) {
               $localidad['name'] = $value->getUsername();
               $idprincipal = $value->getId();

$localidad["data"] = array();
            for($i=1;$i<=12;$i++){
                  $contar = 0;
 
                $sql = "SELECT sum(detalles_factura.total) as total FROM facturas INNER JOIN detalles_factura ON facturas.id = detalles_factura.idfactura_id INNER JOIN clientes ON facturas.idcliente_id = clientes.id INNER JOIN app_users ON app_users.id = clientes.id_usuario_id  where month(facturas.fecha) = '$i' and app_users.id = $idprincipal and facturas.tipofactura = 'F'";         
                $stmt = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll();

                    foreach ($result as $key) {                        
                       
                        $contar = $contar + $key["total"];
                       
                    }
                $localidad["data"][] = array($i-1,$contar);

            }
                $generardatos[] = $localidad;

            }
      $totalgeneral = $generardatos;
          /*echo json_encode($totalgeneral);
          exit;*/

        
return $this->render('graficos/index.html.twig', ['user' => $user1Repository->findAll(),'facturas'=>$facturasRepository->findAll(),'series'=>json_encode($totalgeneral)]);
    }

     /**
     * @Route("/ganancias", name="metas_ganacias", methods="GET")
     */
    public function graficosganancias(User1Repository $user1Repository, FacturasRepository $facturasRepository): Response
    {
           


             $usuario = $user1Repository->findAll();
            $facturas = $facturasRepository->findAll();
    
$valores = array();
            for($i=1;$i<=12;$i++){
                  $contar = 0;
                  $promedio = 0;
            
                $sql = "SELECT  count(facturas.id) as cantidad, sum(detalles_factura.total) as total FROM facturas INNER JOIN detalles_factura ON facturas.id = detalles_factura.idfactura_id INNER JOIN clientes ON facturas.idcliente_id = clientes.id INNER JOIN app_users ON app_users.id = clientes.id_usuario_id  where month(facturas.fecha) = '$i' and facturas.tipofactura = 'F'";     

                $stmt = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll();

                    foreach ($result as $key) {  
                     if($key["cantidad"] > 0){
                        $contar = $contar + $key["total"];
                        $promedio = $contar/$key["cantidad"];
                    }
                       
                    }
                 $valores[] = $promedio;

              

            }
            $localidad["data"] = $valores;
            $generardatos[] = $localidad;
            $totalgeneral = $generardatos;
         /* echo json_encode($totalgeneral);
          exit;*/
        
return $this->render('graficos/ganancias.html.twig', ['user' => $user1Repository->findAll(),'facturas'=>$facturasRepository->findAll(),'series'=>json_encode($totalgeneral)]);
    }

    /**
     * @Route("/promedio", name="metas_promedios", methods="GET")
     */
    public function graficospromedios(User1Repository $user1Repository, FacturasRepository $facturasRepository): Response
    {
            $usuario = $user1Repository->findAll();
            $facturas = $facturasRepository->findAll();
            foreach ($usuario as $value) {
               $localidad['name'] = $value->getUsername();
               $idprincipal = $value->getId();
               $contar = 0;
               $sumatorias = 0;
               $promedio = 0;
                    foreach ($facturas as $key) {
                        if($idprincipal == $key->getIdcliente()->getIdUsuario()->getId()){
                               $contar = $contar + 1;
                                foreach ($key->getDetallesFacturas() as $sumatoria) {
                                   $sumatorias = $sumatorias + $sumatoria->getTotal();
                                }
                                $promedio = $sumatorias/$contar;
                        }
                    }
                $localidad["data"] = array($promedio);
                $generardatos[] = $localidad;
            }
          $totalgeneral = $generardatos;

        
return $this->render('graficos/promedio.html.twig', ['user' => $user1Repository->findAll(),'facturas'=>$facturasRepository->findAll(),'series'=>json_encode($totalgeneral)]);
    }

    /**
     * @Route("/", name="metas_index", methods="GET")
     */
    public function index(MetasRepository $metasRepository): Response
    {
return $this->render('metas/index.html.twig', ['metas' => $metasRepository->findAll()]);
    }

    /**
     * @Route("/new", name="metas_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $meta = new Metas();
        $form = $this->createForm(MetasType::class, $meta);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($meta);
            $em->flush();
              $this->addFlash(
            'notice',
            'Datos almacenados'

        );

            return $this->redirectToRoute('metas_index');
        }

        return $this->render('metas/new.html.twig', [
            'meta' => $meta,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="metas_show", methods="GET")
     */
    public function show(Metas $meta): Response
    {
        return $this->render('metas/show.html.twig', ['meta' => $meta]);
    }

    /**
     * @Route("/{id}/edit", name="metas_edit", methods="GET|POST")
     */
    public function edit(Request $request, Metas $meta): Response
    {
        $form = $this->createForm(MetasType::class, $meta);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('metas_index', ['id' => $meta->getId()]);
        }

        return $this->render('metas/edit.html.twig', [
            'meta' => $meta,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="metas_delete", methods="DELETE")
     */
    public function delete(Request $request, Metas $meta): Response
    {
        if ($this->isCsrfTokenValid('delete'.$meta->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($meta);
            $em->flush();
        }

        return $this->redirectToRoute('metas_index');
    }
}