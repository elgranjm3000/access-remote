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
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
/**
 * @Route("/metas")
 */
class MetasController extends AbstractController
{



    /**
    * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
     * @Route("/graficos", name="metas_graficos",  methods="GET|POST")
     */
    public function graficos(User1Repository $user1Repository, FacturasRepository $facturasRepository, Request $request): Response
    {
$meses = array("","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");


    $mesactual = date("m");   

$total1 = array();
$total2 = array();
for($i = 1; $i<=12; $i++) 
{
       $sql = "SELECT detalles_factura.total as total,detalles_factura.precio as precio,productos.costo as costo FROM facturas INNER JOIN detalles_factura ON facturas.id = detalles_factura.idfactura_id INNER JOIN clientes ON facturas.idcliente_id = clientes.id INNER JOIN app_users ON app_users.id = clientes.id_usuario_id INNER JOIN productos ON productos.id = detalles_factura.idproducto_id  where month(facturas.fecha) = '$i' and facturas.tipofactura = 'F'";   

        $stmt = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

                $sumtotal = 0;
                $utilidadvalor = 0;
                    foreach ($result as $key) {  
                        $iva =  $this->getParameter('ivareversa');
                       $sumtotal = $sumtotal + $key["total"];
                       $preciounitario = $key["precio"]/$iva;
                       $utilidadvalor1 = $preciounitario - $key["costo"];
                       $utilidadvalor = $utilidadvalor + $utilidadvalor1;
                     
                    }
                    $metas = 0;
                $sql = "SELECT montoventas as suma from metas where month(desde) = '$i'";
                $stmt = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll();
                    foreach ($result as $key) {  
                        $metas = $metas + floatval($key["suma"]);
                    }
                    $fecha = date("Y")."-".$i."-".date("d");
                      $total1[] = array("fecha"=>$meses[$i],"valor"=>$sumtotal,'utilidad'=>$utilidadvalor,'metas'=>$metas);
                      
     
}



  if ($request->isMethod('POST')) {
    $mesactual = $_POST["valormes"];
    
  }

$categoria = array();
$ganacias = array();
$utilidad = array();
$metas = array();
            $usuario = $user1Repository->findAll();
            $facturas = $facturasRepository->findAll();
            foreach ($usuario as $value) {
               $categoria[] = $value->getUsername();
               $idprincipal = $value->getId();
 
                $sql = "SELECT detalles_factura.total as total,detalles_factura.precio as precio,productos.costo as costo FROM facturas INNER JOIN detalles_factura ON facturas.id = detalles_factura.idfactura_id INNER JOIN clientes ON facturas.idcliente_id = clientes.id INNER JOIN app_users ON app_users.id = clientes.id_usuario_id INNER JOIN productos ON productos.id = detalles_factura.idproducto_id  where month(facturas.fecha) = '$mesactual' and app_users.id = $idprincipal and facturas.tipofactura = 'F'";         
                $stmt = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll();

                $sumtotal = 0;
                $utilidadvalor = 0;
                    foreach ($result as $key) {  
                        $iva =  $this->getParameter('ivareversa');
                       $sumtotal = $sumtotal + $key["total"];
                       $preciounitario = $key["precio"]/$iva;
                       $utilidadvalor1 = $preciounitario - $key["costo"];
                       $utilidadvalor = $utilidadvalor + $utilidadvalor1;
                      
                       
                    }

                    $sql = "SELECT SUM(montoventas) as suma from metas where month(desde) = '$mesactual' and usuario_id = $idprincipal";
                      $stmt = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll();
                    foreach ($result as $key) {  
                        $metas[] = floatval($key["suma"]);
                    }


                      $ganacias[] = floatval($sumtotal);
                      $utilidad[] = floatval($utilidadvalor);

            }
      
      $usuarios = $categoria;

    

 

        
return $this->render('graficos/index.html.twig', ['user' => $user1Repository->findAll(),'facturas'=>$facturasRepository->findAll(),'usuariostotal'=>json_encode($usuarios),'ganacias'=>json_encode($ganacias),'utilidad'=>json_encode($utilidad),'metas'=>json_encode($metas),'totalventas'=>$total1]);
    }

     /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
     * @Route("/ganancias", name="metas_ganacias", methods="GET")
     */
    public function graficosganancias(User1Repository $user1Repository, FacturasRepository $facturasRepository): Response
    {
           

$meses = array("","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
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
            $totales = array();
            $usuario = $user1Repository->findAll();
            foreach ($usuario as $value) {  
                $usuario = $value->getUsername();             
               $idprincipal = $value->getId();
               for($i=1;$i<=12;$i++){
                  $contar1 = 0;
                  $promedio1 = 0;
            
            $sql = "SELECT  count(facturas.id) as cantidad, sum(detalles_factura.total) as total FROM facturas INNER JOIN detalles_factura ON facturas.id = detalles_factura.idfactura_id INNER JOIN clientes ON facturas.idcliente_id = clientes.id INNER JOIN app_users ON app_users.id = clientes.id_usuario_id  where month(facturas.fecha) = '$i' and facturas.tipofactura = 'F' and  app_users.id =  $idprincipal";
            $stmt = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
                    foreach ($result as $key) {  
                     if($key["cantidad"] > 0){
                        $contar1 = $contar1 + 1;
                        $promedio1 = $promedio1 + $key["total"];
                    }
                       
                    }
                
                $totales[] = array("usuario"=>$usuario,"mes"=>$meses[$i],"totalventas"=>$contar1,"promedio"=>$promedio1);
              

            }
           }

        
return $this->render('graficos/ganancias.html.twig', ['user' => $user1Repository->findAll(),'facturas'=>$facturasRepository->findAll(),'series'=>json_encode($totalgeneral),'totales'=>$totales]);
    }

    /**
    * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
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
    * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
     * @Route("/", name="metas_index", methods="GET")
     */
    public function index(MetasRepository $metasRepository): Response
    {
return $this->render('metas/index.html.twig', ['metas' => $metasRepository->findAll()]);
    }

    /**
    * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
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
    * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
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
    * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
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
