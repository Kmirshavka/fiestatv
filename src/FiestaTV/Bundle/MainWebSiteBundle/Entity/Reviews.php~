<?php

namespace FiestaTV\Bundle\MainWebSiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reviews
 *
 * @ORM\Table(name="reviews")
 * @ORM\Entity
 */
class Reviews
{
    /**
     * @var string
     *
     * @ORM\Column(name="review_text", type="text", nullable=false)
     */
    private $reviewText;

    /**
     * @var integer
     *
     * @ORM\Column(name="review_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $reviewId;

    /**
     * @var \FiestaTV\Bundle\MainWebSiteBundle\Entity\Movies
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="FiestaTV\Bundle\MainWebSiteBundle\Entity\Movies")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="review_movie", referencedColumnName="movie_id")
     * })
     */
    private $reviewMovie;

    /**
     * @var \FiestaTV\Bundle\UserBundle\Entity\FOSUser
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="FiestaTV\Bundle\UserBundle\Entity\FOSUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="review_user", referencedColumnName="id")
     * })
     */
    private $reviewUser;



    /**
     * Set reviewText
     *
     * @param string $reviewText
     * @return Reviews
     */
    public function setReviewText($reviewText)
    {
        $this->reviewText = $reviewText;

        return $this;
    }

    /**
     * Get reviewText
     *
     * @return string 
     */
    public function getReviewText()
    {
        return $this->reviewText;
    }

    /**
     * Set reviewId
     *
     * @param integer $reviewId
     * @return Reviews
     */
    public function setReviewId($reviewId)
    {
        $this->reviewId = $reviewId;

        return $this;
    }

    /**
     * Get reviewId
     *
     * @return integer 
     */
    public function getReviewId()
    {
        return $this->reviewId;
    }

    /**
     * Set reviewMovie
     *
     * @param \FiestaTV\Bundle\MainWebSiteBundle\Entity\Movies $reviewMovie
     * @return Reviews
     */
    public function setReviewMovie(\FiestaTV\Bundle\MainWebSiteBundle\Entity\Movies $reviewMovie)
    {
        $this->reviewMovie = $reviewMovie;

        return $this;
    }

    /**
     * Get reviewMovie
     *
     * @return \FiestaTV\Bundle\MainWebSiteBundle\Entity\Movies 
     */
    public function getReviewMovie()
    {
        return $this->reviewMovie;
    }

    /**
     * Set reviewUser
     *
     * @param \FiestaTV\Bundle\UserBundle\Entity\FOSUser $reviewUser
     * @return Reviews
     */
    public function setReviewUser(\FiestaTV\Bundle\UserBundle\Entity\FOSUser $reviewUser)
    {
        $this->reviewUser = $reviewUser;

        return $this;
    }

    /**
     * Get reviewUser
     *
     * @return \FiestaTV\Bundle\UserBundle\Entity\FOSUser
     */
    public function getReviewUser()
    {
        return $this->reviewUser;
    }
}
