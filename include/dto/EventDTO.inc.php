<?php


class EventDTO extends DisplayListItemDTO
{
    private $idevenement;
    private $estCollectif;
    private $dateEvenement;

    /**
     * @return mixed
     */
    public function getEstCollectif()
    {
        return $this->estCollectif;
    }

    /**
     * @param mixed $estCollectif
     */
    public function setEstCollectif($estCollectif)
    {
        $this->estCollectif = $estCollectif;
    }

    /**
     * @return mixed
     */
    public function getDateEvenement()
    {
        return $this->dateEvenement;
    }

    /**
     * @param mixed $dateEvenement
     */
    public function setDateEvenement($dateEvenement)
    {
        $this->dateEvenement = $dateEvenement;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
       return $this->idevenement;
    }

    public function getDetailUrl()
    {
        return '/event.php?id='.$this->getId();
    }
}