<?php

namespace FiestaTV\Bundle\MainWebSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FiestaTV\Bundle\MainWebSiteBundle\Entity\Orders;
use FiestaTV\Bundle\MainWebSiteBundle\Entity\Movies;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @route("/", name="index")
     */



    public function indexAction()
    {


        $usar = $this->container->get('security.context')->getToken()->getUser();
        if (empty($usar)) {
            $ud = $usar->getId();

            $emn = $this->getDoctrine()->getManager();
            $queryn = $emn->createQueryBuilder()
                ->from('FiestaTV\Bundle\MainWebSiteBundle\Entity\Movies', 'm')
                ->select("m")
                ->LeftJoin("FiestaTV\Bundle\MainWebSiteBundle\Entity\Orders", "o", "WITH", "m.movieId=o.orderMovie")
                ->where("o.orderLogin IS NULL OR o.orderLogin !=?1 ")
                ->setParameter(1, $ud)->setMaxResults(12);

            $rep = $queryn->getQuery()->getResult();

        } else {
            $rep = $this->getDoctrine()->getRepository('FiestaTV\Bundle\MainWebSiteBundle\Entity\Movies')
                ->findBy(array(), array('movieName' => 'ASC'));

        }




        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("
            SELECT o, COUNT(o.orderMovie) cnt
            FROM FiestaTV\Bundle\MainWebSiteBundle\Entity\Orders o
            WHERE o.orderStatus = 'ordered'
            GROUP BY o.orderMovie
            ORDER BY cnt DESC
        ")->setMaxResults(6);



        $orders = $query->getResult();


        return $this->render('FiestaTVMainWebSiteBundle:Default:index.html.twig',array(
                'popular'=> $orders,
                'product'=> $rep
            )
        );
    }
}
