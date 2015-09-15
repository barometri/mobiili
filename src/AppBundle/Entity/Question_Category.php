<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question_Category
 */
class Question_Category
{
    /**
     * @var integer
     */
    private $id;


    /**
     * @var integer
     */

    /**
     * @ManyToOne(targetEntity="Question", inversedBy="questionsCategories")
     * @JoinColumn(name="question_id", referencedColumnName="id")
     **/

    private $questionId;


    /**
     * @var integer
     */

    /**
     * @ManyToOne(targetEntity="Category", inversedBy="questionCategories")
     * @JoinColumn(name="category_id", referencedColumnName="id")
     **/


    private $categoryId;


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
     * @return Question_Category
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
     * Set categoryId
     *
     * @param integer $categoryId
     * @return Question_Category
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }
}
