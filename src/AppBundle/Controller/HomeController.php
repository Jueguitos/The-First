<?php
// src/AppBundle/Controller/HomeController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
    * @Route("/")
    */
    public function indexAction()
    {
        return $this->render('index.html.twig');
    }
}
