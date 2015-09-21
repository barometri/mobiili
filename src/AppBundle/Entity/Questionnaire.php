<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Questionnaire
 */
class Questionnaire
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */

    /**
     * @ManyToOne(targetEntity="Person")
     * @JoinColumn(name="person_id", referencedColumnName="id")
     **/


    private $creatorId;

    /**
     * @var \DateTime
     */
    private $createdDate;

    /**
     * @var boolean
     */
    private $hidden;

    protected $questionnaires;

    protected $sentQuestionnaires;


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
     * Set creatorId
     *
     * @param integer $creatorId
     * @return Questionnaire
     */
    public function setCreatorId($creatorId)
    {
        $this->creatorId = $creatorId;

        return $this;
    }

    /**
     * Get creatorId
     *
     * @return integer 
     */
    public function getCreatorId()
    {
        return $this->creatorId;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Questionnaire
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime 
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set hidden
     *
     * @param boolean $hidden
     * @return Questionnaire
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;

        return $this;
    }

    /**
     * Get hidden
     *
     * @return boolean 
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    public function __construct()
    {
        $this->questionnaires = new ArrayCollection();
        $this->sentQuestionnaires = new ArrayCollection();

    }





}
