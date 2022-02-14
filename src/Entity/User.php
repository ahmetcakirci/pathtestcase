<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ORM\Table(name="users")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id",type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="username",type="string",length=150)
     */
    private $username;

    /**
     * @ORM\Column(name="email",type="string",length=100)
     */
    private $email;

    /**
     * @ORM\Column(name="password",type="string",length=50)
     */
    private $password;

    /**
     * User constructor.
     * @param $username
     */
    public function __construct($username)
    {
        $this->username = $username;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setName($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }
}
