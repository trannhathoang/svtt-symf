<?php

namespace Acme\WorkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Job
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Job
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="text")
     */
    private $contact;

    /**
    * @ORM\ManyToOne(targetEntity="Acme\UserBundle\Entity\User", inversedBy="jobs")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    */
    protected $user;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Job
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set contact
     *
     * @param string $contact
     * @return Job
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    
        return $this;
    }

    /**
     * Get contact
     *
     * @return string 
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set user
     *
     * @param \Acme\UserBundle\Entity\User $user
     * @return Job
     */
    public function setUser(\Acme\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Acme\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}