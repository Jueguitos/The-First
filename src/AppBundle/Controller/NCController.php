<?php
// src/AppBundle/Controller/NCController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NCController extends Controller
{
    /**
    * @Route("/new_character")
    */
    public function indexAction($name)
    {
        return $this->render('new_character.html.twig', array('name' => $name));
    }
}
