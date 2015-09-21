<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questionnaire_Question
 */
class Questionnaire_Question
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    /**
     * @ManyToOne(targetEntity="Question", inversedBy="questionsQuestionnaires")
     * @JoinColumn(name="question_id", referencedColumnName="id")
     **/

    private $questionId;

    /**
     * @var integer
     */
    /**
     * @ManyToOne(targetEntity="Questionnaire", inversedBy="questionnaires")
     * @JoinColumn(name="questionnaire_id", referencedColumnName="id")
     **/


    private $questionnaireId;

    /**
     * @var boolean
     */
    private $answered;


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
     * Set questionId
     *
     * @param integer $questionId
     * @return Questionnaire_Question
     */
    public function setQuestionId($questionId)
    {
        $this->questionId = $questionId;

        return $this;
    }

    /**
     * Get questionId
     *
     * @return integer 
     */
    public function getQuestionId()
    {
        return $this->questionId;
    }

    /**
     * Set questionnaireId
     *
     * @param integer $questionnaireId
     * @return Questionnaire_Question
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
     * Set answered
     *
     * @param boolean $answered
     * @return Questionnaire_Question
     */
    public function setAnswered($answered)
    {
        $this->answered = $answered;

        return $this;
    }

    /**
     * Get answered
     *
     * @return boolean 
     */
    public function getAnswered()
    {
        return $this->answered;
    }
}
