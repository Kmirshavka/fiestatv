<?php

namespace FiestaTV\Bundle\MainWebSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FiestaTV\Bundle\MainWebSiteBundle\Entity\Orders;
use FiestaTV\Bundle\MainWebSiteBundle\Entity\Movies;
use FiestaTV\Bundle\UserBundle\Entity\FosUser;
use Symfony\Component\Security\Core\Util\SecureRandom;

class OrderController extends Controller
{
    /**
     * @route("/order/{id}", name="order")
     */
    public function orderAction($id)
    {
        $securityContext = $this->container->get('security.context');
        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {


            $usar = $this->container->get('security.context')->getToken()->getUser();
            $ud = $usar->getId();


            $repository = $this->getDoctrine()->getRepository('FiestaTV\Bundle\MainWebSiteBundle\Entity\Movies');
            $movie = $repository->findOneByMovieId($id);
            $md = $movie->getMovieId();

            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('
            SELECT o
            FROM FiestaTV\Bundle\MainWebSiteBundle\Entity\Orders o
            WHERE o.orderMovie = ?1 AND o.orderLogin = ?2
        ')->setParameter(1, $md)
            ->setParameter(2, $ud);


            $orders = $query->getResult();
            if (!empty($orders)) {
                $odd = $orders[0]->getOrderStatus();
                if ($odd == "ordered"){
                    $error = "You have already paid this movie. Look at your Cart!";
                    return $this->render('FiestaTVMainWebSiteBundle:Default:order.html.twig', array('error' => $error, 'movie' => null));
                } else {
                    $repository = $this->getDoctrine()->getRepository('FiestaTV\Bundle\MainWebSiteBundle\Entity\Movies');
                    $movie = $repository->findOneByMovieId($id);
                    return $this->render('FiestaTVMainWebSiteBundle:Default:order.html.twig', array('movie' => $movie));
                }
            } else {


                $usar = $this->container->get('security.context')->getToken()->getUser();

                $repository = $this->getDoctrine()->getRepository('FiestaTV\Bundle\MainWebSiteBundle\Entity\Movies');
                $movie = $repository->findOneByMovieId($id);


                $product = new Orders();
                $product->setOrderId('0');
                $product->setOrderStatus('preordered');
                $product->setOrderMovie($movie);
                $product->setOrderLogin($usar);


                $em = $this->getDoctrine()->getManager();
                $em->persist($product);
                $em->flush();


                if (!$movie) {
                    throw $this->createNotFoundException(
                        'No product found for id ' . $id
                    );
                }


                return $this->render('FiestaTVMainWebSiteBundle:Default:order.html.twig', array('movie' => $movie));
            }
        } else {
                $error = "You have no premission to join this part of FiestaTV. Probablly you may been logged first.";
                return $this->render('FiestaTVMainWebSiteBundle:Default:order.html.twig', array('error' => $error, 'movie' => null));

            }
        }
    }