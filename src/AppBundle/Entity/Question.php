<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 */
class Question
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $questionCategoyId;

    /**
     * @var integer
     */
    private $questionTypeId;

    /**
     * @var string
     */
    private $questionContent;


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
     * Set questionCategoyId
     *
     * @param integer $questionCategoyId
     * @return Question
     */
    public function setQuestionCategoyId($questionCategoyId)
    {
        $this->questionCategoyId = $questionCategoyId;

        return $this;
    }

    /**
     * Get questionCategoyId
     *
     * @return integer 
     */
    public function getQuestionCategoyId()
    {
        return $this->questionCategoyId;
    }

    /**
     * Set questionTypeId
     *
     * @param integer $questionTypeId
     * @return Question
     */
    public function setQuestionTypeId($questionTypeId)
    {
        $this->questionTypeId = $questionTypeId;

        return $this;
    }

    /**
     * Get questionTypeId
     *
     * @return integer 
     */
    public function getQuestionTypeId()
    {
        return $this->questionTypeId;
    }

    /**
     * Set questionContent
     *
     * @param string $questionContent
     * @return Question
     */
    public function setQuestionContent($questionContent)
    {
        $this->questionContent = $questionContent;

        return $this;
    }

    /**
     * Get questionContent
     *
     * @return string 
     */
    public function getQuestionContent()
    {
        return $this->questionContent;
    }
}
