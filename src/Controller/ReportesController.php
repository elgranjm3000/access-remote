<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Facturas;
use App\Entity\Productos;
use App\Entity\Clientes;
use App\Repository\FacturasRepository;
use App\Entity\DetallesFactura;
use App\Repository\DetallesFacturaRepository;
use App\Repository\ClientesRepository;
use App\Repository\ProductosRepository;


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



}
