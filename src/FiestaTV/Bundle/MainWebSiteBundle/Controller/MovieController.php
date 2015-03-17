<?php

namespace FiestaTV\Bundle\MainWebSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MovieController extends Controller
{
    /**
     * @route("/movie/{id}", name="movie")
     */
    public function movieAction($id)
    {

        $securityContext = $this->container->get('security.context');
        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {

            $usar = $this->container->get('security.context')->getToken()->getUser();
            $ud = $usar->getId();

            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('
            SELECT o
            FROM FiestaTV\Bundle\MainWebSiteBundle\Entity\Orders o
            WHERE o.orderLogin = ?1 AND o.orderMovie = ?2
        ')->setParameter(1, $ud)
                ->setParameter(2, $id);


            $ordered = $query->getResult();
            if ($ordered != null) {
                $status = $ordered[0]->getOrderStatus();
                $play = $status;
            } else {
                $play = null;
            }

        } else { $play = null;
        }

            $repository = $this->getDoctrine()->getRepository('FiestaTV\Bundle\MainWebSiteBundle\Entity\Movies');
            $movie = $repository->findOneByMovieId($id);

            if (!$movie) {
                throw $this->createNotFoundException(
                    'No product found for id ' . $id
                );
            }

            return $this->render('FiestaTVMainWebSiteBundle:Default:movie.html.twig', array('movie' => $movie, 'play' => $play));

    }
}
