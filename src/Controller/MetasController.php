<?php

namespace App\Controller;

use App\Entity\Metas;
use App\Entity\User;
use App\Entity\Clientes;
use App\Form\MetasType;
use App\Repository\MetasRepository;
use App\Repository\User1Repository;
use App\Repository\FacturasRepository;
use App\Repository\ClientesRepository;
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
    * @Security("is_granted('ROLE_ADMIN')")
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
    * @Security("is_granted('ROLE_ADMIN')")
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
    * @Security("is_granted('ROLE_ADMIN') ")
     * @Route("/{id}", name="metas_show", methods="GET")
     */
    public function show(Metas $meta): Response
    {
        return $this->render('metas/show.html.twig', ['meta' => $meta]);
    }

    /**
    * @Security("is_granted('ROLE_ADMIN') ")
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
    * @Security("is_granted('ROLE_ADMIN')")
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


    /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
     * @Route("/cliente/crecimiento", name="metas_crecimientos", methods="GET")
     */
    public function graficoscrecimiento(User1Repository $user1Repository, FacturasRepository $facturasRepository,ClientesRepository $clientesRepository): Response
    {
           
                $categorias = array();
                $activos = array();
                $nuevos = array();
                $tasa = array();
                $inactivo = array();
                $ratio = array();
                $valores = array();
                $crecimiento = array();
                $sql = "SELECT  count(*) as cantidad, year(fecha) as anno FROM facturas GROUP BY anno";
                $stmt = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll();

                    foreach ($result as $key) {  
                        $anno = $key["anno"];
                        $categorias[] = $key["anno"];
                        $nuevos[] = floatval($key["cantidad"]);
                        $calculonuevo = floatval($key["cantidad"]);
                        $activosgeneral = 0;
                        $sqlactivosbuscar = "SELECT * from facturas WHERE year(fecha) = $anno GROUP BY idcliente_id ";
                            $stmt1 = $this->getDoctrine()->getManager()->getConnection()->prepare($sqlactivosbuscar);
                            $stmt1->execute();
                            $result1 = $stmt1->fetchAll();
                            foreach ($result1 as $totalactivo) {
                                $activosgeneral = $activosgeneral + 1;
                            }
                            $activos[] = floatval($activosgeneral);
                            $activocalculo = $calculonuevo/$activosgeneral;
                            $tasa[] = $activocalculo;

                            $clientes = $clientesRepository->findAll();
                            $diaactual = date("Y-m-d");
                            $suminactivo = 0;
                            foreach ($clientes as $key) {
                                    $idclientes = $key->getId();
                                    $sqlinactivos = "SELECT fecha, year(fecha) as anno, TIMESTAMPDIFF(MONTH, fecha, '$diaactual' ) as meses FROM facturas where idcliente_id = ".$idclientes ." order by fecha DESC LIMIT 1";
                                     $stmt2 = $this->getDoctrine()->getManager()->getConnection()->prepare($sqlinactivos);
                                     $stmt2->execute();
                                    $result2 = $stmt2->fetchAll();
                               

                                       
                                        foreach ($result2 as $k) {
                                          
                                            if(floatval($k["meses"]) > 3 ){
                                                $suminactivo = $suminactivo + 1;
                                            }
                                        }
                              
                            }

                            $inactivo[] = $suminactivo; 
                            $ratiovalor = $suminactivo/$activosgeneral;
                            $ratio[] = $suminactivo/$activosgeneral;
                            $crecimientovalor = $activocalculo-$ratiovalor;
                            $crecimiento[] = $activocalculo-$ratiovalor;

                $valores[] = array("anno"=>$anno,"activos"=>$activosgeneral,"nuevos"=>$calculonuevo,"inactivo"=>$suminactivo,"tasa"=>$activocalculo,"ratio"=>$ratiovalor,"crecimiento"=>$crecimientovalor);

                    }
                   
       
                   
            return $this->render('graficos/crecimiento.html.twig',['categorias'=>json_encode($categorias),'activos'=>json_encode($activos),'nuevos'=>json_encode($nuevos),'tasa'=> json_encode($tasa),'inactivo'=> json_encode($inactivo),'ratio'=> json_encode($ratio),'crecimiento'=>json_encode($crecimiento),"tabla"=>$valores]);
    }


    /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
     * @Route("/cliente/mantenimiento", name="metas_mantenimientos", methods="GET")
     */
    public function graficosmantenimiento(User1Repository $user1Repository, FacturasRepository $facturasRepository,ClientesRepository $clientesRepository): Response
    {
           
                $categorias = array();
                $activos = array();
                $nuevos = array();
                $tasa = array();
                $inactivo = array();
                $ratio = array();
                $valores = array();
                $crecimiento = array();

                for ($i=1; $i <= 4 ; $i++) {
                    $annoactual = 2018;
                        if($i == 1){
                            $meses = "ENERO,FEBRERO,MARZO";
                        } 
                        if($i == 2){
                            $meses = "ABRIL,MAYO,JUNIO";
                        } 
                        if($i == 3){
                            $meses = "JULIO,AGOSTO,SEPTIEMBRE";
                        }
                        if($i == 4){
                            $meses = "OCTUBRE,NOVIEMBRE,DICIEMBRE";
                        }  
                      $categorias[] = $meses;
                     $sql = "SELECT  count(*) as cantidad, QUARTER(ingreso) as trimestre FROM clientes  where QUARTER(ingreso) = ".$i;
                    $stmt = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
                    $stmt->execute();
                    $result = $stmt->fetchAll();
                    foreach ($result as $key) {  
                        $nuevos[] = floatval($key["cantidad"]);
                         $calculonuevo = floatval($key["cantidad"]);
                       }
                       $activosgeneral = 0;
                       $sqlactivosbuscar = "SELECT QUARTER(fecha) from facturas WHERE year(fecha) = ".$annoactual." and QUARTER(fecha) >= ".$i." GROUP BY idcliente_id ";
                            $stmt1 = $this->getDoctrine()->getManager()->getConnection()->prepare($sqlactivosbuscar);
                            $stmt1->execute();
                            $result1 = $stmt1->fetchAll();
                            foreach ($result1 as $totalactivo) {
                                $activosgeneral = $activosgeneral + 1;
                            }
                            $activos[] = floatval($activosgeneral);

                     $clientes = $clientesRepository->findAll();
                            $diaactual = date("Y-m-d");
                            $suminactivo = 0;
                            foreach ($clientes as $key) {
                                    $idclientes = $key->getId();
                                    $sqlinactivos = "SELECT fecha, year(fecha) as anno, TIMESTAMPDIFF(MONTH, fecha, '$diaactual' ) as meses, QUARTER(fecha) FROM facturas where idcliente_id = ".$idclientes ."  and TIMESTAMPDIFF(MONTH, fecha,'$diaactual' ) >= 3 order by fecha DESC LIMIT 1 ";
                                     $stmt2 = $this->getDoctrine()->getManager()->getConnection()->prepare($sqlinactivos);
                                     $stmt2->execute();
                                    $result2 = $stmt2->fetchAll();
                               

                                       
                                        foreach ($result2 as $k) {
                                          
                                                $suminactivo = $suminactivo + 1;
                                            
                                        }
                              
                             
                            }
                              $inactivo[] = $suminactivo; 
                           

                }

        

               $email = "SELECT clientes.nombre as nombre, clientes.contacto_principal, clientes.telefono_local, clientes.correo, facturas.fecha, year(facturas.fecha) as anno, TIMESTAMPDIFF(MONTH, facturas.fecha,'$diaactual' ) as meses, QUARTER(facturas.fecha),facturas.idcliente_id,app_users.id,clientes.id_usuario_id,app_users.username FROM facturas INNER JOIN clientes ON clientes.id = facturas.idcliente_id INNER JOIN app_users ON app_users.id = clientes.id_usuario_id where TIMESTAMPDIFF(MONTH, facturas.fecha,'$diaactual' ) >= 3 GROUP by facturas.idcliente_id ORDER by facturas.fecha asc";


                $stmtemail = $this->getDoctrine()->getManager()->getConnection()->prepare($email);
                $stmtemail->execute();
                $emailsend = $stmtemail->fetchAll();
                $emailenviar = array();
                foreach ($emailsend as $key ) {
                    $emailenviar[] = array("nombre"=>$key["nombre"]);
                }
                   
     
                   
            return $this->render('graficos/mantenimiento.html.twig',['categorias'=>json_encode($categorias),'activos'=>json_encode($activos),'nuevos'=>json_encode($nuevos),'tasa'=> json_encode($tasa),'inactivo'=> json_encode($inactivo),'ratio'=> json_encode($ratio),'crecimiento'=>json_encode($crecimiento),"tabla"=>$valores,'emailsend' =>$emailsend]);
    }

   /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
     * @Route("/cliente/email", name="correo", methods="POST")
     */
    public function correo(\Swift_Mailer $mailer)
{
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];
    $correo = $_POST["correo"];
    $message = (new \Swift_Message($asunto))
        ->setFrom('admin@wiu.tqm.mybluehost.me')
        ->setTo($correo)
        ->setBody(
            $this->renderView(
                // templates/emails/registration.html.twig
                'emails/registration.html.twig',
                array('name' => $mensaje)
            ),
            'text/html'
        )
        /*
         * If you also want to include a plaintext version of the message
        ->addPart(
            $this->renderView(
                'emails/registration.txt.twig',
                array('name' => $name)
            ),
            'text/plain'
        )
        */
    ;

    $mailer->send($message);


   return new JsonResponse($correo);
}

}
