<?php

namespace FiestaTV\Bundle\MainWebSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CartController extends Controller
{
    /**
     * @route("/cart", name="cart")
     */
    public function cartAction()
    {
        $movieList = array();
        $total = 0;
        $orderTime = "";

        foreach ($_COOKIE as $key => $value) {
            if (strpos($key, 'order') !== false) {
                list($movieId, $orderTime) = split('-', $value);

                $movie = $this->getDoctrine()->getRepository('FiestaTV\Bundle\MainWebSiteBundle\Entity\Movies')
                    ->find($movieId);
                $movieList[] = array(
                    'movie' => $movie,
                    'cookiesname' => $key,
                );
                $total += $movie->getMoviePrice();
            }
        }


        $securityContext = $this->container->get('security.context');
        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {

            $usar = $this->container->get('security.context')->getToken()->getUser();
            $ud = $usar->getId();

            $em2 = $this->getDoctrine()->getManager();
            $query2 = $em2->createQuery('
            SELECT o
            FROM FiestaTV\Bundle\MainWebSiteBundle\Entity\Orders o
            WHERE o.orderLogin = ?1 AND o.orderStatus = ?2
        ')->setParameter(1, $ud)
                ->setParameter(2, 'ordered');


            $ordered = $query2->getResult();

            $em3 = $this->getDoctrine()->getManager();
            $query3 = $em3->createQuery('
            SELECT o
            FROM FiestaTV\Bundle\MainWebSiteBundle\Entity\Orders o
            WHERE o.orderLogin = ?1 AND o.orderStatus = ?2
        ')->setParameter(1, $ud)
                ->setParameter(2, 'preordered');


            $preordered = $query3->getResult();

            return $this->render('FiestaTVMainWebSiteBundle:Default:cart.html.twig',
                array(
                    'movieList' => $movieList,
                    'total' => number_format($total, 2, '.', ''),
                    'ordered' => $ordered,
                    'preordered' => $preordered
                ));
        } else {


            return $this->render('FiestaTVMainWebSiteBundle:Default:cart.html.twig',
                array(
                    'movieList' => $movieList,
                    'total' => number_format($total, 2, '.', '')
                ));
        }
    }
}
