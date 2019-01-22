<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Facturas;
use App\Entity\Productos;
use App\Entity\Clientes;
use App\Entity\Agruparproducto;
use App\Entity\Ingresos;
use App\Entity\Proveedores;
use App\Repository\FacturasRepository;
use App\Entity\DetallesFactura;
use App\Repository\DetallesFacturaRepository;
use App\Repository\AgruparproductoRepository;

use App\Repository\ClientesRepository;
use App\Repository\ProductosRepository;
use App\Repository\IngresosRepository;
use App\Repository\ProveedoresRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

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
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS')")
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
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_FACTURA')  or is_granted('ROLE_VENTAS')")
     * @Route("/reportes/inventarios/alcance", name="inventarioalcance")
     */
    public function alcance(AgruparproductoRepository $agruparproductoRepository)
    {
        return $this->render('reportes/alcance.html.twig', [
            'productos' => $agruparproductoRepository->findAll(),
        ]);
    }


}
