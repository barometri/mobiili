<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Team
 */
class Team
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */

    /**
     * @ManyToOne(targetEntity="Country")
     * @JoinColumn(name="country_id", referencedColumnName="id")
     **/

    private $countryId;

    /**
     * @var string
     */
    private $teamName;


    protected $teams;


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
     * Set countryId
     *
     * @param integer $countryId
     * @return Team
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * Get countryId
     *
     * @return integer 
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * Set teamName
     *
     * @param string $teamName
     * @return Team
     */
    public function setTeamName($teamName)
    {
        $this->teamName = $teamName;

        return $this;
    }

    /**
     * Get teamName
     *
     * @return string 
     */
    public function getTeamName()
    {
        return $this->teamName;
    }

    public function __construct()
    {
        $this->teams = new ArrayCollection();
    }


}
