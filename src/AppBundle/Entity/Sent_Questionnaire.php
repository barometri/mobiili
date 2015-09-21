<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sent_Questionnaire
 */
class Sent_Questionnaire
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */

    /**
     * @ManyToOne(targetEntity="Questionnaire", inversedBy="sentQuestionnaires")
     * @JoinColumn(name="questionnaire_id", referencedColumnName="id")
     **/

    private $questionnaireId;

    /**
     * @var integer
     */
    /**
     * @ManyToOne(targetEntity="Person")
     * @JoinColumn(name="person_id", referencedColumnName="id")
     **/

    private $personId;

    /**
     * @var \DateTime
     */
    private $sentDate;

    /**
     * @var boolean
     */
    private $completed;

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
     * Set questionnaireId
     *
     * @param integer $questionnaireId
     * @return Sent_Questionnaire
     */
    public function setQuestionnaireId($questionnaireId)
    {
        $this->questionnaireId = $questionnaireId;

        return $this;
    }

    /**
     * Get questionnaireId
     *
     * @return integer 
     */
    public function getQuestionnaireId()
    {
        return $this->questionnaireId;
    }

    /**
     * Set personId
     *
     * @param integer $personId
     * @return Sent_Questionnaire
     */
    public function setPersonId($personId)
    {
        $this->personId = $personId;

        return $this;
    }

    /**
     * Get personId
     *
     * @return integer 
     */
    public function getPersonId()
    {
        return $this->personId;
    }

    /**
     * Set sentDate
     *
     * @param \DateTime $sentDate
     * @return Sent_Questionnaire
     */
    public function setSentDate($sentDate)
    {
        $this->sentDate = $sentDate;

        return $this;
    }

    /**
     * Get sentDate
     *
     * @return \DateTime 
     */
    public function getSentDate()
    {
        return $this->sentDate;
    }

    /**
     * Set completed
     *
     * @param boolean $completed
     * @return Sent_Questionnaire
     */
    public function setCompleted($completed)
    {
        $this->completed = $completed;

        return $this;
    }

    /**
     * Get completed
     *
     * @return boolean 
     */
    public function getCompleted()
    {
        return $this->completed;
    }
}
