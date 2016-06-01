<?php
// src/AppBundle/Controller/QueueController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class QueueController extends Controller
{
    /**
    * @Route("/home/{name}")
    */
    public function indexAction($name)
    {
        return $this->render('queue.html.twig', array('name' => $name));
    }
}
