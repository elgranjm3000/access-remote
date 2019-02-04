<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Facturas;
use App\Entity\Productos;
use App\Entity\Clientes;
use App\Entity\User;

use App\Entity\Agruparproducto;
use App\Entity\Ingresos;
use App\Entity\Proveedores;
use App\Repository\FacturasRepository;
use App\Entity\DetallesFactura;
use App\Repository\DetallesFacturaRepository;
use App\Repository\AgruparproductoRepository;


use App\Repository\ClientesRepository;
use App\Repository\User1Repository;

use App\Repository\ProductosRepository;
use App\Repository\ProveedoresRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Form\IngresosType;
use App\Repository\IngresosRepository;

class ReportesController extends AbstractController
{
    /**
     * @Security("is_granted('ROLE_ADMIN')")
     * @Route("/reportes", name="reportes")
     */
    public function index()
    {
        return $this->render('reportes/index.html.twig', [
            'controller_name' => 'ReportesController',
        ]);
    }


    /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA') or is_granted('ROLE_ALMACEN') or is_granted('ROLE_VENTAS')")
     * @Route("/reportes/ventas", name="reportesventas")
     */
    public function vendedor(DetallesFacturaRepository $detallesFacturaRepository)
    {
        return $this->render('reportes/ventas.html.twig', [
            'detalles_facturas' => $detallesFacturaRepository->findAll(),
        ]);
    }

     /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_ALMACEN')")
     * @Route("/reportes/inventarios", name="reportesinventario")
     */
    public function inventarios(DetallesFacturaRepository $detallesFacturaRepository)
    {
        return $this->render('reportes/inventario.html.twig', [
            'detalles_facturas' => $detallesFacturaRepository->findAll(),
        ]);
    }




    /**
     * @Security("is_granted('ROLE_ADMIN')")
     * @Route("/reportes/utilidad/productos", name="reportesutilidadproductos")
     */
    public function utilidad(DetallesFacturaRepository $detallesFacturaRepository)
    {
                $iva =  $this->getParameter('ivareversa');

        return $this->render('reportes/productoutilidad.html.twig', [
            'detalles_facturas' => $detallesFacturaRepository->findAll(),'iva'=>$iva
        ]);
    }


     /**
     * @Security("is_granted('ROLE_ADMIN')")
     * @Route("/reportes/clientes", name="reportesclientes")
     */
    public function clientes(ClientesRepository $clientesRepository)
    {
        return $this->render('reportes/clientes.html.twig', [
            'clientes' => $clientesRepository->findAll(),
        ]);
    }

     /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
     * @Route("/reportes/productos", name="reportesproductos")
     */
    public function productos(ProductosRepository $productosRepository)
    {
        return $this->render('reportes/producto.html.twig', [
            'productos' => $productosRepository->findAll(),
        ]);
    }


     /**
     * @Route("/reportes/proveedores", name="reportesproveedores")
     */
    public function proveedores(IngresosRepository $ingresosRepository)
    {
        return $this->render('reportes/proveedores.html.twig', [
            'proveedores' => $ingresosRepository->findAll(),
        ]);
    }


     /**
     * @Security("is_granted('ROLE_ADMIN')")
     * @Route("/reportes/ventasfechas", name="reportesventasfechas")
     */
    public function ventasfechas(DetallesFacturaRepository $detallesFacturaRepository)
    {
        return $this->render('reportes/ventasfechas.html.twig', [
            'detalles_facturas' => $detallesFacturaRepository->findAll(),
        ]);
    }


    /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')")
     * @Route("/reportes/cobrar", name="cobrar")
     */
    public function cobrar(FacturasRepository $facturasRepository)
    {
        return $this->render('reportes/cobrar.html.twig', [
            'facturas' => $facturasRepository->findAll(),
        ]);
    }


/**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
     * @Route("/reportes/inventarios/alcance", name="inventarioalcance")
     */
    public function alcance(AgruparproductoRepository $agruparproductoRepository)
    {
        return $this->render('reportes/alcance.html.twig', [
            'productos' => $agruparproductoRepository->findAll(),
        ]);
    }


    /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
     * @Route("/reportes/movimiento", name="inventariosinmovimiento")
     */
    public function vencimientosproductos(ProductosRepository $productosRepository)
    {

        $em = $this->getDoctrine()->getManager();

        $RAW_QUERY = 'SELECT detalles_factura.id as idfactura, facturas.id as numerofactura ,productos.id, productos.nombre,facturas.fecha,TIMESTAMPDIFF(MONTH, facturas.fecha, CURDATE()) AS meses_transcurridos, agruparproducto.cantidad as stockactual from productos
            INNER JOIN detalles_factura on productos.id = detalles_factura.idproducto_id
            INNER JOIN facturas on facturas.id = detalles_factura.idfactura_id   
            INNER JOIN agruparproducto on productos.id = agruparproducto.idproducto_id   
            WHERE TIMESTAMPDIFF(MONTH, facturas.fecha, CURDATE()) >= 3
            GROUP by productos.id  ORDER BY detalles_factura.id  asc limit 10';        
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->execute();
        $result = $statement->fetchAll();
        return $this->render('reportes/productosvencer.html.twig', [
            'productos' => $result,
        ]);

        
    }

     /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS')")
     * @Route("/indice/rotacion", name="indicerotacion")
     */
    public function indicerotacion()
    {


        $em = $this->getDoctrine()->getManager();
        $RAW_QUERY = 'SELECT sum(ingresos.cantidad) as entrada,MONTH(ingresos.fecha) as mes, YEAR(ingresos.fecha) as anno FROM ingresos GROUP by MONTH(ingresos.fecha) , YEAR(ingresos.fecha)';        
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->execute();
        $opciones = $statement->fetchAll();
        return $this->render('reportes/rotacion.html.twig', [
            'opciones' => $opciones,
        ]);

        
    }

    /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
     * @Route("/indice/rotacionjson", name="rotacionjson", methods="GET")
     */
    public function rotacionjson()
    {

        $mesproceso = $_GET["mes"];
        $annoproceso =$_GET["anno"];

        if($mesproceso == 1){
            $mesinicial = 12;
            $annoinicial = $annoproceso-1;
        }else{
            $mesinicial = $_GET["mes"];
            $annoinicial = $annoproceso;
        }

        $proceso = $annoinicial."-".$mesinicial."-01";


        $em = $this->getDoctrine()->getManager();
        $RAW_QUERY = "SELECT IFNULL(sum(productos.precio_venta), '0') as salidaalmacen, MONTH(ingresos.fecha) as mes, YEAR(ingresos.fecha) as anno FROM ingresos  
             inner join detalles_factura on detalles_factura.idproducto_id = productos_id
             INNER JOIN productos on productos.id = ingresos.productos_id
              WHERE ingresos.fecha < '$proceso'";        
      
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->execute();
        $result = $statement->fetchAll();
        if(count($result)>0){
        
        foreach ($result as  $value) {
                $salidaanterior = $value["salidaalmacen"];           
                
        }
        }else{
               $salidaanterior =   0;           
                
        }



        $em = $this->getDoctrine()->getManager();
        $RAW_QUERY = "SELECT  IFNULL(sum(productos.precio_venta), '0') as entrada FROM ingresos INNER JOIN productos on productos.id = ingresos.productos_id WHERE ingresos.fecha < '$proceso'"; 
        
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->execute();
        $result = $statement->fetchAll();
        if(count($result)>0){
        
        foreach ($result as  $value) {
                $localidad['inicial'] =   $value["entrada"]-$salidaanterior;           
                
        }
        }else{
                $localidad['inicial'] =   0-$salidaanterior;           
                
        }

         $em = $this->getDoctrine()->getManager();
        $RAW_QUERY = "SELECT IFNULL(sum(productos.precio_venta), '0') as salidaalmacen, MONTH(ingresos.fecha) as mes, YEAR(ingresos.fecha) as anno FROM ingresos  
             inner join detalles_factura on detalles_factura.idproducto_id = productos_id
             INNER JOIN productos on productos.id = ingresos.productos_id
              WHERE MONTH(ingresos.fecha) = $mesproceso and YEAR(ingresos.fecha) = $annoproceso GROUP by MONTH(ingresos.fecha) , YEAR(ingresos.fecha) ";        
      
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->execute();
        $result = $statement->fetchAll();
        if(count($result)>0){
        
        foreach ($result as  $value) {
                $localidad['vendidos'] =   $value["salidaalmacen"];           
                
        }
        }else{
                $localidad['vendidos'] =   0;           
                
        }

        $em = $this->getDoctrine()->getManager();
        $RAW_QUERY = "SELECT  IFNULL(sum(productos.precio_venta), '0') as salida FROM ingresos INNER JOIN productos on productos.id = ingresos.productos_id WHERE ingresos.fecha <= '$proceso'";        
      
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->execute();
        $result = $statement->fetchAll();
        if(count($result)>0){
        
        foreach ($result as  $value) {
                $localidad['costofinal'] =   $value["salida"];        
                
        }
        }else{
                $localidad['costofinal'] =   0;                   
                
        }



        $generardatos[] = $localidad;
        
         
        
        return new JsonResponse($generardatos);
        
        
    }

    
      /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS')")
     * @Route("/rolvendedores", name="rolvendedores")
     */
    public function rolvendedores(User1Repository $user1Repository)
    {


        $em = $this->getDoctrine()->getManager();
        $RAW_QUERY = 'SELECT year(fecha) as anno FROM facturas GROUP by anno';        
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->execute();
        $opciones = $statement->fetchAll();
        return $this->render('reportes/rolvendedor.html.twig', [
            'opciones' => $opciones,'users' => $user1Repository->findAll(),
        ]);

        
    }


    /*SELECT facturas.idcliente_id as idcliente, count(facturas.idcliente_id) as ventastotales,clientes.nombre as nombrecliente,year(facturas.fecha) as anno,month(facturas.fecha) as mes,app_users.username,app_users.id as idusuario FROM facturas
INNER JOIN clientes on clientes.id = facturas.idcliente_id 
INNER JOIN app_users on clientes.id_usuario_id = app_users.id where year(facturas.fecha) = 2019 and app_users.id = 7
GROUP by facturas.idcliente_id*/

    /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
     * @Route("/rolvendedoresjson", name="rolvendedoresjson", methods="GET")
     */
    public function rolvendedoresjson()
    {
        $generardatos = array();
        $mesproceso  = $_GET["mes"];
        $annoproceso = $_GET["anno"];
        $userproceso = $_GET["user"];
        $em = $this->getDoctrine()->getManager();
        $metas = "SELECT IFNULL(sum(montoventas), '0')as totalmetas FROM metas WHERE (year(desde)=$annoproceso and month(desde) = $mesproceso) or  (year(hasta)=$annoproceso and month(hasta) = $mesproceso) and usuario_id = $userproceso";
         $statement = $em->getConnection()->prepare($metas);
        $statement->execute();
        $opciones = $statement->fetchAll();
        foreach ($opciones as $key) {
            $metastotal = $key["totalmetas"];
        }

        $em = $this->getDoctrine()->getManager();
        $RAW_QUERY = "SELECT facturas.idcliente_id as idcliente, count(facturas.idcliente_id) as ventastotales,clientes.nombre as nombrecliente,year(facturas.fecha) as anno,month(facturas.fecha) as mes,app_users.username,app_users.id as idusuario FROM facturas
INNER JOIN clientes on clientes.id = facturas.idcliente_id 
INNER JOIN app_users on clientes.id_usuario_id = app_users.id where year(facturas.fecha) = $annoproceso and app_users.id = $userproceso and month(facturas.fecha) = $mesproceso
GROUP by facturas.idcliente_id";     
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->execute();
        $opciones = $statement->fetchAll();
        foreach ($opciones as $key) {
            $localidad["cliente"] = $key["nombrecliente"];

            if($metastotal == 0){
                $localidad["metas"] = "No tiene metas cargadas para este plazo";
            }else{
                $porcentaje = ($key["ventastotales"]*100)/$metastotal;
                $english_format_number = number_format($porcentaje, 2, '.', '');

                $localidad["metas"] = $english_format_number." %";
            }
            $localidad["idcliente"] = $key["idcliente"];
            $localidad["idusuario"] = $key["idusuario"];

            $generardatos[] = $localidad;

        }
        
        return new JsonResponse($generardatos);
    }

    /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS') or is_granted('ROLE_ALMACEN')")
     * @Route("/historico/{idcliente}/{iduser}", name="historico", methods="GET")
     */
    public function historico($idcliente,$iduser,User1Repository $user1Repository,ClientesRepository $clientesRepository)
    {
        $user = $user1Repository->find($iduser);
        $datosclientes = $clientesRepository->find($idcliente);
        
        return $this->render('reportes/historicoventas.html.twig', [
            'user' => $user,'cliente' => $idcliente,'datosclientes'=>$datosclientes
        ]);
    }


    /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')")
     * @Route("/reportes/vencimiento", name="vencimientofactura")
     */
    public function vencimiento(FacturasRepository $facturasRepository)
    {
        return $this->render('reportes/vencimiento.html.twig', [
            'facturas' => $facturasRepository->findAll(),
        ]);
    }

    /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')")
     * @Route("/reportes/productos/vencimiento", name="vencimientoproducto")
     */
    public function vencimientoproducto(IngresosRepository $ingresosRepository)
    {
        return $this->render('reportes/vencimientoproducto.html.twig', ['ingresos' => $ingresosRepository->findAll()]);
    }


}
