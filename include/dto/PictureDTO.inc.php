<?php


class PictureDTO extends AbstractDTO
{
    private $id;
    private $chemin;

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
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getChemin()
    {
        return $this->chemin;
    }

    /**
     * @param mixed $chemin
     */
    public function setChemin($chemin)
    {
        $this->chemin = $chemin;
    }
}