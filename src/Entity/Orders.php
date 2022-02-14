<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator;
use Symfony\Component\Uid\Uuid;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=OrderRepository::class)
 * @ORM\Table(name="orders")
 */
class Orders
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id",type="integer", unique=true)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="order_code",type="integer")
     *
     */
    private $orderCode;

    /**
     * @ORM\Column(name="product_id",type="integer")
     *
     */
    private $productId;

    /**
     * @ORM\Column(name="quantity",type="integer")
     *
     */
    private $quantity;

    /**
     * @ORM\Column(name="address",type="string", length=500)
     *
     */
    private $address;

    /**
     * @Assert\DateTime()
     * @ORM\Column(name="shipping_date",type="datetime", nullable=true)
     *
     */
    private $shippingDate;

    /**
     * @Assert\DateTime()
     * @ORM\Column(name="deleted_at",type="datetime", nullable=true)
     *
     */
    private $deletedAt;

   /**
    * @Assert\DateTime()
    * @ORM\Column(name="created_at",type="datetime", nullable=false)
    *
    */
    private $createdAt;


    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getOrderCode()
    {
        return $this->orderCode;
    }

    /**
     * @param mixed $orderCode
     */
    public function setOrderCode($orderCode): void
    {
        $this->orderCode = $orderCode;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param mixed $productId
     */
    public function setProductId($productId): void
    {
        $this->productId = $productId;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getShippingDate()
    {
        return $this->shippingDate;
    }

    /**
     * @param mixed $shippingDate
     */
    public function setShippingDate($shippingDate): void
    {
        $this->shippingDate = $shippingDate;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * @param mixed $deletedAt
     */
    public function setDeletedAt($deletedAt): void
    {
        $this->deletedAt = $deletedAt;
    }
}
