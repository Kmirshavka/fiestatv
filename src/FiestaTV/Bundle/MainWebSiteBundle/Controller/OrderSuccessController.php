<?php

namespace FiestaTV\Bundle\MainWebSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FiestaTV\Bundle\MainWebSiteBundle\Entity\Orders;
use FiestaTV\Bundle\MainWebSiteBundle\Entity\Movies;
use FiestaTV\Bundle\UserBundle\Entity\FosUser;

class OrderSuccessController extends Controller
{
    /**
     * @route("/ordersuccess", name="ordersuccess")
     */
    public function orderSuccessAction(Request $request)
    {
        $dd = 'ordered';
        $md = $request->request->get('ordermd');
        $ud = $request->request->get('orderud');

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('
            UPDATE FiestaTV\Bundle\MainWebSiteBundle\Entity\Orders o
            SET o.orderStatus = ?1
            WHERE o.orderMovie = ?2 AND o.orderLogin = ?3
        ')->setParameter(1, $dd)
            ->setParameter(2, $md)
            ->setParameter(3, $ud);


        $q = $query->getResult();
            $error = "You have succesfully bought Movie";
        $movie = 'order-'.$md;
            return $this->render('FiestaTVMainWebSiteBundle:Default:orderSuccess.html.twig', array('error' => $error, 'movie' => $movie));


        }
    }