<?php
require_once 'include/dto/DisplayListItemDTO.inc.php';


class PlaceDTO extends DisplayListItemDTO
{
    private $idlieu;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->idlieu;
    }

    public function getDetailUrl()
    {
        return '/place.php?id='.$this->getId();
    }
}
?>
