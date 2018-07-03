<?php
namespace EntityBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="User")
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