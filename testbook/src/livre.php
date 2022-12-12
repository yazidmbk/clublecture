<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="livre")
 */

class livre implements \JsonSerializable
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
    private $titre;
    /**
     * @ORM\Column(type="string")
     */
    private $auteur;
    /**
     * @ORM\Column(type="string")
     */
    private $description;
    /**
     * @ORM\Column(type="string")
     */
    private $photo;


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
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre): void
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * @param mixed $auteur
     */
    public function setAuteur($auteur): void
    {
        $this->auteur = $auteur;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo): void
    {
        $this->photo = $photo;
    }

    public function jsonSerialize(): mixed
    {
        // TODO: Implement jsonSerialize() method.
        return get_object_vars($this);
    }
}