<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person_Level
 */
class Person_Level
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $levelName;


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
     * Set levelName
     *
     * @param string $levelName
     * @return Person_Level
     */
    public function setLevelName($levelName)
    {
        $this->levelName = $levelName;

        return $this;
    }

    /**
     * Get levelName
     *
     * @return string 
     */
    public function getLevelName()
    {
        return $this->levelName;
    }
}
