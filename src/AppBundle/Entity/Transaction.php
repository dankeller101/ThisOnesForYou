<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="transaction")
 */
class Transaction
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $friendsName;

    /**
    * @ORM\Column(type="textarea")
    */
    private $recipe;

    /**
     * @ORM\Column(type="textarea")
     */
    private $specialRequests;

    /**
     * @ORM\Column(type="textarea")
     */
    private $comments;

    /**
     * @ORM\Column(type="number")
     */
    private $price;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

}