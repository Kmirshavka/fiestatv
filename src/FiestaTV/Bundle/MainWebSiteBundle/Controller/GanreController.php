<?php

namespace FiestaTV\Bundle\MainWebSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class GanreController extends Controller
{
    /**
     * @route("/ganre/{ganre}", name="ganre")
     */
    public function ganreAction($ganre)
    {
     $repository = $this->getDoctrine()->getRepository('FiestaTV\Bundle\MainWebSiteBundle\Entity\Movies');
        $movieList = $repository->findByMovieGanre($ganre);

        if (!$movieList) {
            throw $this->createNotFoundException(
                'No product for ganre '.$ganre
            );
        }
        return $this->render('FiestaTVMainWebSiteBundle:Default:ganre.html.twig',array('movieList'=>$movieList,'ganre'=>$ganre));
    }
}
