<?php

namespace FiestaTV\Bundle\MainWebSiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FiestaTV\Bundle\MainWebSiteBundle\Entity\Reviews;
use FiestaTV\Bundle\MainWebSiteBundle\Entity\Movies;
use FiestaTV\Bundle\UserBundle\Entity\FosUser;
use Symfony\Component\Security\Core\Util\SecureRandom;

class ReviewController extends Controller
{
    /**
     * @route("/review", name="review")
     */
    public function reviewAction(Request $request)
    {
        $securityContext = $this->container->get('security.context');
        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {

            $doing = $request->query->get('doing');
            $md = $request->query->get('md');
            $ud = $request->query->get('ud');

            if ($doing == 'add') {
                if ( empty($ud) or empty($md) ) { $message = null;
                } else {
                    $text = $request->query->get('text');

                    $repository = $this->getDoctrine()->getRepository('FiestaTV\Bundle\MainWebSiteBundle\Entity\Movies');
                    $movie = $repository->findOneByMovieId($md);

                    $usar = $this->container->get('security.context')->getToken()->getUser();

                    $product = new Reviews();
                    $product->setReviewId('0');
                    $product->setReviewText($text);
                    $product->setReviewMovie($movie);
                    $product->setReviewUser($usar);


                    $em = $this->getDoctrine()->getManager();
                    $em->persist($product);
                    $em->flush();


            $message = 'You have succesfull added your view.';
                $doing = 'added';
                }
            } else {
            $message = 'Your review was successfully added, thank you.';
            }

            return $this->render('FiestaTVMainWebSiteBundle:Default:review.html.twig', array('message' => $message, 'md' => $md, 'ud' => $ud, 'doing' => $doing));

        } else {
                return $this->render('FiestaTVMainWebSiteBundle:Default:review.html.twig');

            }
        }
    }