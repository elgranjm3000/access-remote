<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Facturas;
use App\Entity\Productos;
use App\Entity\Clientes;
use App\Entity\Ingresos;
use App\Entity\Proveedores;
use App\Repository\FacturasRepository;
use App\Entity\DetallesFactura;
use App\Repository\DetallesFacturaRepository;
use App\Repository\ClientesRepository;
use App\Repository\ProductosRepository;
use App\Repository\IngresosRepository;
use App\Repository\ProveedoresRepository;


class ReportesController extends AbstractController
{
    /**
     * @Route("/reportes", name="reportes")
     */
    public function index()
    {
        return $this->render('reportes/index.html.twig', [
            'controller_name' => 'ReportesController',
        ]);
    }


    /**
     * @Route("/reportes/ventas", name="reportesventas")
     */
    public function vendedor(DetallesFacturaRepository $detallesFacturaRepository)
    {
        return $this->render('reportes/ventas.html.twig', [
            'detalles_facturas' => $detallesFacturaRepository->findAll(),
        ]);
    }




    /**
     * @Route("/reportes/utilidad/productos", name="reportesutilidadproductos")
     */
    public function utilidad(DetallesFacturaRepository $detallesFacturaRepository)
    {
        return $this->render('reportes/productoutilidad.html.twig', [
            'detalles_facturas' => $detallesFacturaRepository->findAll(),
        ]);
    }


     /**
     * @Route("/reportes/clientes", name="reportesclientes")
     */
    public function clientes(ClientesRepository $clientesRepository)
    {
        return $this->render('reportes/clientes.html.twig', [
            'clientes' => $clientesRepository->findAll(),
        ]);
    }

     /**
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
     * @Route("/reportes/ventasfechas", name="reportesventasfechas")
     */
    public function ventasfechas(DetallesFacturaRepository $detallesFacturaRepository)
    {
        return $this->render('reportes/ventasfechas.html.twig', [
            'detalles_facturas' => $detallesFacturaRepository->findAll(),
        ]);
    }


    /**
     * @Route("/reportes/cobrar", name="cobrar")
     */
    public function cobrar(FacturasRepository $facturasRepository)
    {
        return $this->render('reportes/cobrar.html.twig', [
            'facturas' => $facturasRepository->findAll(),
        ]);
    }




}
