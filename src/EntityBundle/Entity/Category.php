<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="Category")
 * @ORM\Entity()
 */
class Category
{
    /**
     * @var string
     *
     * @ORM\Column(name="CategoryID", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $id;
    /**
     * @var string
     *
     * @ORM\Column(name="CategoryName", type="string", length=50)
     */

    private $CategoryName;
    /**
     * @var \datetime
     *
     * @ORM\Column(name="DateUpdated", type="datetime", nullable=false)
     */

    private $DateUpdated;
    /**
     * @var \datetime
     *
     * @ORM\Column(name="DateCreated", type="datetime", nullable=false)
     */

    private $DateCreated;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }



    /**
     * @return string
     */
    public function getCategoryName()
    {
        return $this->CategoryName;
    }

    /**
     * @param string $CategoryName
     */
    public function setCategoryName($CategoryName)
    {
        $this->CategoryName = $CategoryName;
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



}