<?php

namespace FiestaTV\Bundle\MainWebSiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 */
class Users
{
    /**
     * @var string
     */
    private $userPassword;

    /**
     * @var string
     */
    private $userEmail;

    /**
     * @var string
     */
    private $userName;

    /**
     * @var string
     */
    private $userSurname;

    /**
     * @var string
     */
    private $userPhone;

    /**
     * @var string
     */
    private $userId;


    /**
     * Set userPassword
     *
     * @param string $userPassword
     * @return Users
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    /**
     * Get userPassword
     *
     * @return string 
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * Set userEmail
     *
     * @param string $userEmail
     * @return Users
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * Get userEmail
     *
     * @return string 
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * Set userName
     *
     * @param string $userName
     * @return Users
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set userSurname
     *
     * @param string $userSurname
     * @return Users
     */
    public function setUserSurname($userSurname)
    {
        $this->userSurname = $userSurname;

        return $this;
    }

    /**
     * Get userSurname
     *
     * @return string 
     */
    public function getUserSurname()
    {
        return $this->userSurname;
    }

    /**
     * Set userPhone
     *
     * @param string $userPhone
     * @return Users
     */
    public function setUserPhone($userPhone)
    {
        $this->userPhone = $userPhone;

        return $this;
    }

    /**
     * Get userPhone
     *
     * @return string 
     */
    public function getUserPhone()
    {
        return $this->userPhone;
    }

    /**
     * Get userId
     *
     * @return string 
     */
    public function getUserId()
    {
        return $this->userId;
    }
}
