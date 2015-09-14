<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person_Answer
 */
class Person_Answer
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $questionId;

    /**
     * @var string
     */
    private $answerContent;


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
     * @return Person_Answer
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
     * Set answerContent
     *
     * @param string $answerContent
     * @return Person_Answer
     */
    public function setAnswerContent($answerContent)
    {
        $this->answerContent = $answerContent;

        return $this;
    }

    /**
     * Get answerContent
     *
     * @return string 
     */
    public function getAnswerContent()
    {
        return $this->answerContent;
    }
}
