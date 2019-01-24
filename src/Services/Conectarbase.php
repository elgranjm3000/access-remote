<?php
namespace App\Services;
use Doctrine\ORM\EntityManager;
use Doctrine\DBAL\Connection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\route;
use Symfony\Component\HttpFoundation\Response;

class Conectarbase 
{
    

    public static function buscarmaximo($maximo)
    {
        
        $em = $this->getDoctrine()->getManager();
        $RAW_QUERY = "SELECT IFNULL(max(cantidad), '0') as maximo FROM detalles_factura WHERE idproducto_id = $maximo";        
      
        $statement = $em->getConnection()->prepare($RAW_QUERY);
        $statement->execute();
        $result = $statement->fetchAll();
        if(count($result)>0){
        
        foreach ($result as  $value) {
                $maximo =   $value["maximo"];                           
        }
        }


        return $maximo;
        
    }

  
}
