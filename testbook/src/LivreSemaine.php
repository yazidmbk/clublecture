<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="livresemaine")
 */

class LivreSemaine implements \JsonSerializable
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $idlivresemaine;
    /**
     * @ORM\Column(type="string")
     */
    private $choix;
    /**
     * @ORM\Column(type="string")
     */
    private $note;
    /**
     * @ORM\Column(type="string")
     */
    private $date;
    /**
     * @ORM\Column(type="integer")
     */
    private $lecteur_idlecteur;
    /**
     * @ORM\Column(type="integer")
     */
    private $livre_idlivre;

    /**
     * @return mixed
     */
    public function getIdlivresemaine()
    {
        return $this->idlivresemaine;
    }

    /**
     * @param mixed $idlivresemaine
     */
    public function setIdlivresemaine($idlivresemaine): void
    {
        $this->idlivresemaine = $idlivresemaine;
    }

    /**
     * @return mixed
     */
    public function getChoix()
    {
        return $this->choix;
    }

    /**
     * @param mixed $choix
     */
    public function setChoix($choix): void
    {
        $this->choix = $choix;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note): void
    {
        $this->note = $note;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getLecteurIdlecteur()
    {
        return $this->lecteur_idlecteur;
    }

    /**
     * @param mixed $lecteur_idlecteur
     */
    public function setLecteurIdlecteur($lecteur_idlecteur): void
    {
        $this->lecteur_idlecteur = $lecteur_idlecteur;
    }

    /**
     * @return mixed
     */
    public function getLivreIdlivre()
    {
        return $this->livre_idlivre;
    }

    /**
     * @param mixed $livre_idlivre
     */
    public function setLivreIdlivre($livre_idlivre): void
    {
        $this->livre_idlivre = $livre_idlivre;
    }








    public function jsonSerialize()
    {

        // TODO: Implement jsonSerialize() method.
    }
}