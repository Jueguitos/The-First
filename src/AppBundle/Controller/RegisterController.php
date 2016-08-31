<?php
// src/AppBundle/Controller/RegisterController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegisterController extends Controller
{
    /**
    * @Route("/register/{name}")
    */
    public function indexAction($name)
    {
        return $this->render('register.html.twig', array('name' => $name));
    }
}
