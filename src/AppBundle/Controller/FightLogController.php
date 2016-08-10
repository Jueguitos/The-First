<?php
// src/AppBundle/Controller/FightLogController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FightLogController extends Controller
{
    /**
    * @Route("/figh_log/{name}")
    */
    public function indexAction($name)
    {
        return $this->render('fight_log.html.twig', array('name' => $name));
    }
}
