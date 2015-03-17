<?php

namespace FiestaTV\Bundle\MainWebSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class logController extends Controller
{
    /**
     * @route("/log", name="log")
     */
    public function logAction()
    {
        return $this->render('FiestaTVMainWebSiteBundle:Default:log.html.twig');
    }
}
