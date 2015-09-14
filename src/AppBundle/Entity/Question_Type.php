<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question_Type
 */
class Question_Type
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $questionTypeName;


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
     * Set questionTypeName
     *
     * @param string $questionTypeName
     * @return Question_Type
     */
    public function setQuestionTypeName($questionTypeName)
    {
        $this->questionTypeName = $questionTypeName;

        return $this;
    }

    /**
     * Get questionTypeName
     *
     * @return string 
     */
    public function getQuestionTypeName()
    {
        return $this->questionTypeName;
    }
}
