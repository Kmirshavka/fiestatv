<?php

namespace FiestaTV\Bundle\MainWebSiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="orders", indexes={@ORM\Index(name="IDX_E52FFDEE2996BFED", columns={"order_login"}), @ORM\Index(name="IDX_E52FFDEE9EC08692", columns={"order_movie"})})
 * @ORM\Entity
 */
class Orders
{
    /**
     * @var string
     *
     * @ORM\Column(name="order_status", type="string", length=45, nullable=true)
     */
    private $orderStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="order_expired", type="date", nullable=true)
     */
    private $orderExpired;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $orderId;

    /**
     * @var \FiestaTV\Bundle\MainWebSiteBundle\Entity\Movies
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="FiestaTV\Bundle\MainWebSiteBundle\Entity\Movies")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_movie", referencedColumnName="movie_id")
     * })
     */
    private $orderMovie;

    /**
     * @var \FiestaTV\Bundle\UserBundle\Entity\FosUser
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="FiestaTV\Bundle\UserBundle\Entity\FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_login", referencedColumnName="username_canonical")
     * })
     */
    private $orderLogin;



    /**
     * Set orderStatus
     *
     * @param string $orderStatus
     * @return Orders
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }

    /**
     * Get orderStatus
     *
     * @return string 
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * Set orderExpired
     *
     * @param \DateTime $orderExpired
     * @return Orders
     */
    public function setOrderExpired($orderExpired)
    {
        $this->orderExpired = $orderExpired;

        return $this;
    }

    /**
     * Get orderExpired
     *
     * @return \DateTime 
     */
    public function getOrderExpired()
    {
        return $this->orderExpired;
    }

    /**
     * Set orderId
     *
     * @param integer $orderId
     * @return Orders
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return integer 
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set orderMovie
     *
     * @param \FiestaTV\Bundle\MainWebSiteBundle\Entity\Movies $orderMovie
     * @return Orders
     */
    public function setOrderMovie(\FiestaTV\Bundle\MainWebSiteBundle\Entity\Movies $orderMovie)
    {
        $this->orderMovie = $orderMovie;

        return $this;
    }

    /**
     * Get orderMovie
     *
     * @return \FiestaTV\Bundle\MainWebSiteBundle\Entity\Movies 
     */
    public function getOrderMovie()
    {
        return $this->orderMovie;
    }

    /**
     * Set orderLogin
     *
     * @param \FiestaTV\Bundle\UserBundle\Entity\FosUser $orderLogin
    * @return Orders
    */
    public function setOrderLogin(\FiestaTV\Bundle\UserBundle\Entity\FosUser $orderLogin)
    {
        $this->orderLogin = $orderLogin;

        return $this;
    }

    /**
     * Get orderLogin
     *
     * @return \FiestaTV\Bundle\UserBundle\Entity\FosUser
     */
    public function getOrderLogin()
    {
        return $this->orderLogin;
    }
}
