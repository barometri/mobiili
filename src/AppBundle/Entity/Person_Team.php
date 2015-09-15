<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person_Team
 */
class Person_Team
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */

    /**
     * @ManyToOne(targetEntity="Person", inversedBy="people")
     * @JoinColumn(name="person_id", referencedColumnName="id")
     **/


    private $personId;

    /**
     * @var integer
     */

    /**
     * @ManyToOne(targetEntity="Team", inversedBy="teams")
     * @JoinColumn(name="team_id", referencedColumnName="id")
     **/


    private $teamId;

    /**
     * @var string
     */
    private $role;


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
     * Set personId
     *
     * @param integer $personId
     * @return Person_Team
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
     * Set teamId
     *
     * @param integer $teamId
     * @return Person_Team
     */
    public function setTeamId($teamId)
    {
        $this->teamId = $teamId;

        return $this;
    }

    /**
     * Get teamId
     *
     * @return integer 
     */
    public function getTeamId()
    {
        return $this->teamId;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return Person_Team
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }
}
