<?php

namespace App\Entity;

use App\Entity\Moto;
use Symfony\Component\Validator\Constraints as Assert;

class Contact
{
    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(min=2, max=100)
     */
    private $firstname;

     /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(min=2, max=100)
     */
    private $lastname;

     /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Regex(pattern="/[0-9]{10}/", message="Le numéro doit comporter 10 chiffres !")
     */
    private $phoneNumber;

    /**
     *
     * @var string
     * @Assert\NotBlank
     * @Assert\Email()
     */
    private $email;

    /**
     *
     * @var string
     * @Assert\NotBlank
     * @Assert\Length(min=10)
     */
    private $message;

    /**
     *
     * @var Moto|null
     * @Assert\NotBlank      
     */
    private $moto;

    /**
     * Get the value of firstname
     *
     * @return  string
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @param  string  $firstname
     *
     * @return  self
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     *
     * @return  string
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @param  string $lastname
     *
     * @return  self
     */ 
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of phoneNumber
     *
     * @return  string
     */ 
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set the value of phoneNumber
     *
     * @param  string  $phoneNumber
     *
     * @return  self
     */ 
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get the value of email
     *
     * @return  string
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param  string  $email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of message
     *
     * @return  string
     */ 
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @param  string  $message
     *
     * @return  self
     */ 
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    

    /**
     * Get the value of moto
     *
     * @return  Moto|null
     */ 
    public function getMoto()
    {
        return $this->moto;
    }

    /**
     * Set the value of moto
     *
     * @param  Moto|null  $moto
     *
     * @return  self
     */ 
    public function setMoto($moto)
    {
        $this->moto = $moto;

        return $this;
    }
}