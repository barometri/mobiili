<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

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

    /**
     * @OneToMany(targetEntity="Question_Category", mappedBy="question")
     **/
    private $questionCategoryId;

    /**
     * @var integer
     */

    /**
     * @ManyToOne(targetEntity="Question_Type")
     * @JoinColumn(name="question_type_id", referencedColumnName="id")
     **/

    private $questionTypeId;

    /**
     * @var string
     */
    private $questionContent;



    protected $questionsCategories;
    protected $questionsQuestionnaires;



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
     * Set questionCategoryId
     *
     * @param integer $questionCategoryId
     * @return Question
     */
    public function setQuestionCategoryId($questionCategoryId)
    {
        $this->questionCategoryId = $questionCategoryId;

        return $this;
    }

    /**
     * Get questionCategoryId
     *
     * @return integer 
     */
    public function getQuestionCategoryId()
    {
        return $this->questionCategoryId;
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


    public function __construct()
    {
        $this->questionsCategories = new ArrayCollection();
        $this->questionsQuestionnaires = new ArrayCollection();
    }







    /**
     * @var integer
     */
    private $questionCategoyId;


}
