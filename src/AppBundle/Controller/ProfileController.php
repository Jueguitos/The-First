<?php
// src/AppBundle/Controller/ProfileController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfileController extends Controller
{
    /**
    * @Route("/home/{name}")
    */
    public function indexAction($name)
    {
        return $this->render('profile.html.twig', array('name' => $name));
    }
}
