<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * W3viewTerms *
 * @ORM\Table(name="Products")
 * @ORM\Entity()
 */
class Products
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $id;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string")
     */

    private $name;
    /**
     * @var integer
     *
     * @ORM\Column(name="categoryID", type="integer")
     */

    private $categoryID;
    /**
     * @var string
     *
     * @ORM\Column(name="SKU", type="string")
     */

    private $SKU;
    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */

    private $price;
    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer")
     */

    private $quantity;
    /**
     * @var \Datetime
     *
     * @ORM\Column(name="dateCreated", type="datetime")
     */
    private $dateCreated;
    /**
     * @var \Datetime
     *
     * @ORM\Column(name="dateModified", type="datetime")
     */
    private $dateModified;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getCategoryID()
    {
        return $this->categoryID;
    }

    /**
     * @param int $categoryID
     */
    public function setCategoryID($categoryID)
    {
        $this->categoryID = $categoryID;
    }

    /**
     * @return string
     */
    public function getSKU()
    {
        return $this->SKU;
    }

    /**
     * @param string $SKU
     */
    public function setSKU($SKU)
    {
        $this->SKU = $SKU;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return \Datetime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param \Datetime $dateCreated
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    }

    /**
     * @return \Datetime
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * @param \Datetime $dateModified
     */
    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;
    }
}