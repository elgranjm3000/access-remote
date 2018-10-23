<?php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use App\Entity\DetallesFactura;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManager;
use Doctrine\DBAL\Connection;
use Symfony\Bundle\DoctrineBundle\Registry as Doctrine;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use App\Entity\Ingresos;


class AppExtension extends AbstractExtension
{




    public function getFilters()
    {
        return array(
            new TwigFilter('price', array($this, 'priceFilter')),
            new TwigFilter('buscador', array($this, 'nuevoFilter')),
            new TwigFilter('egresosproductos', array($this, 'egresosFilter')),
            new TwigFilter('ingresoproductos', array($this, 'ingresosFilter')),
            new TwigFilter('ingresomontos', array($this, 'ingresomontoFilter')),
            new TwigFilter('cobrar', array($this, 'cobrarFilter')),

        );
    }


private $doctrine;

    public function __construct(RegistryInterface $doctrine)
    {
        // if you want to do queries execute : $this->doctrine->getManager();
        $this->doctrine = $doctrine;
    }




/* public function __construct(MessageGenerator $messageGenerator, \Swift_Mailer $mailer, $adminEmail)
    {
        // ...
       $this->adminEmail = $adminEmail;
    }
*/


    public function priceFilter($number, $decimals = 0, $decPoint = '.', $thousandsSep = ',')
    {
        $price = number_format($number, $decimals, $decPoint, $thousandsSep);
        $price = '$'.$price;

        return $price;
    }


    public function nuevoFilter($number, $decimals = 0, $decPoint = '.', $thousandsSep = ',')
    {
        $price = number_format($number, $decimals, $decPoint, $thousandsSep);
        $price = 'Bs'.$price;

        return $price;
    }


    public function egresosFilter($sumar)
    {

        $contar = 0;
        foreach ($sumar as $value) {
            $contar = $contar + $value->getCantidad();
        }

        return $contar;
    }


     public function ingresomontoFilter($sumar)
    {

        $contar = 0;
        foreach ($sumar as $value) {
            $contar = $contar + $value->getTotal();
        }

        return $contar;
    }


     public function ingresosFilter($sumar)
    {

        $contar = 0;
        foreach ($sumar as $value) {
            $contar = $contar + $value->getCantidad();
        }

        return $contar;
    }

    public function cobrarFilter($sumar)
    {

        $contar = 0;
        $depositos = 0;
        $total = 0;
        foreach ($sumar as $value) {
            if($value->getIdfactura()->getForma() == "CR" ){

                foreach ($value->getIdfactura()->getMovimientosdepositos() as $key ) {
                    $depositos = $depositos + $key->getMonto();
                }

                    //$depositos = $depositos + $value->getIdfactura()->getMovimientosdepositos()->getMonto();

                    $contar = $contar + $value->getTotal();
                    $totalgeneral = $contar - $depositos;
                    $total = $total + $totalgeneral;
            }
        }

        return $total;
    }
}