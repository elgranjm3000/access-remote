<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;


class SecurityController extends AbstractController
{
	/**
     * @Route("/login", name="login")
     */
    public function login(AuthenticationUtils $authenticationUtils)
		{
		    // get the login error if there is one
		    $error = $authenticationUtils->getLastAuthenticationError();

		    // last username entered by the user
		    $lastUsername = $authenticationUtils->getLastUsername();

		    return $this->render('security/login.html.twig', array(
		        'last_username' => $lastUsername,
		        'error'         => $error,
		    ));
		}
	 /**
     * @Route("/logout", name="security_logout")
     */
    public function logoutAction()
    {
        
    }

  /**
     * @Route("/administrator/admin", name="admin")
     */
    public function admin(AuthorizationCheckerInterface $authChecker)
    {
     // $session = $request->getRoles();
 if ($authChecker->isGranted('ROLE_USER')) {
        
            return $this->redirectToRoute('clientes_index');
  
    }
  if ($authChecker->isGranted('ROLE_ADMIN')) {
        
            //return $this->render('admin/index.html.twig');
            return $this->redirectToRoute('proveedores_index');
            
        }


     
    }
}