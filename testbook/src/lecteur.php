<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="lecteur", uniqueConstraints={@ORM\UniqueConstraint(columns={"pseudo"})})
 */

class lecteur implements \JsonSerializable
{
/**
 * @ORM\Id
 * @ORM\Column(type="integer")
 * @ORM\GeneratedValue
 */
private $id;
    /**
     * @ORM\Column(type="string")
     */
private $nom;
    /**
     * @ORM\Column(type="string")
     */
private $prenom;
    /**
     * @ORM\Column(type="string")
     */
    private $pseudo;
    /**
     * @ORM\Column(type="string")
     */

    private $login;
    /**
     * @ORM\Column(type="string")
     */
    private $password;
    /**
     * @ORM\Column(type="string")
     */
    private $droit;

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login): void
    {
        $this->login = $login;
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

    /**
     * @return mixed
     */
    public function getDroit()
    {
        return $this->droit;
    }

    /**
     * @param mixed $droit
     */
    public function setDroit($droit): void
    {
        $this->droit = $droit;
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * @param mixed $pseudo
     */
    public function setPseudo($pseudo): void
    {
        $this->pseudo = $pseudo;
    }
    /**
     * @return mixed
     */

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }
    /**
     * @ORM\Column(type="string")
     */


    public function jsonSerialize(): mixed
    {
        // TODO: Implement jsonSerialize() method.
        return get_object_vars($this);
    }
}