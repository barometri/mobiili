<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Category
 */
class Category
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $categoryName;


    /**
     * @ORM\OneToMany(targetEntity="Question_Category", mappedBy="category")
     */

    protected $questionCategories;


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
     * Set categoryName
     *
     * @param string $categoryName
     * @return Category
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    /**
     * Get categoryName
     *
     * @return string 
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }



    public function __construct()
    {
        $this->questionCategories = new ArrayCollection();
    }

}
