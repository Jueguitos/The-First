<?php
// src/AppBundle/Controller/ProfileController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProfileController extends Controller
{
    /**
    * @Route("/profile")
    */
    public function indexAction()
    {
        return $this->render('profile.html.twig');
    }
}
