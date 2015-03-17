<?php

namespace FiestaTV\Bundle\MainWebSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SignupController extends Controller
{
    /**
     * @route("/signup", name="signup")
     */
    public function signupAction()
    {
        return $this->render('FiestaTVMainWebSiteBundle:Default:signup.html.twig');
    }
}
