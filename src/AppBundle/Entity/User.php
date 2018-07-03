<?php
namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="dbo.W3_view_fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @var integer
     *
     * @ORM\Column(name="Con_PK", type="integer")
     */

    private $Con_PK;
    /**
     * @var integer
     *
     * @ORM\Column(name="Employ_PK", type="integer")
     */

    private $Employ_PK;
    /**
     * @var boolean
     *
     * @ORM\Column(name="isEmployee", type="boolean", nullable=false)
     */

    private $isEmployee;
    /**
     * @var \datetime
     *
     * @ORM\Column(name="DateCreated", type="datetime", nullable=false)
     */

    private $DateCreated;
    /**
     * @var \datetime
     *
     * @ORM\Column(name="DateUpdated", type="datetime", nullable=false)
     */

    private $DateUpdated;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @return int
     */
    public function getConPK()
    {
        return $this->Con_PK;
    }

    /**
     * @param int $Con_PK
     */
    public function setConPK($Con_PK)
    {
        $this->Con_PK = $Con_PK;
    }

    /**
     * @return int
     */
    public function getEmployPK()
    {
        return $this->Employ_PK;
    }

    /**
     * @param int $Employ_PK
     */
    public function setEmployPK($Employ_PK)
    {
        $this->Employ_PK = $Employ_PK;
    }

    /**
     * @return boolean
     */
    public function isIsEmployee()
    {
        return $this->isEmployee;
    }

    /**
     * @param boolean $isEmployee
     */
    public function setIsEmployee($isEmployee)
    {
        $this->isEmployee = $isEmployee;
    }

    /**
     * @return \datetime
     */
    public function getDateCreated()
    {
        return $this->DateCreated;
    }

    /**
     * @param \datetime $DateCreated
     */
    public function setDateCreated($DateCreated)
    {
        $this->DateCreated = $DateCreated;
    }

    /**
     * @return \datetime
     */
    public function getDateUpdated()
    {
        return $this->DateUpdated;
    }

    /**
     * @param \datetime $DateUpdated
     */
    public function setDateUpdated($DateUpdated)
    {
        $this->DateUpdated = $DateUpdated;
    }

    /**
     * @return \DateTime
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * @return \DateTime
     */
    public function getCredentialsExpireAt()
    {
        return $this->credentialsExpireAt;
    }



}