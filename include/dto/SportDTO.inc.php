<?php
require_once 'include/dto/DisplayListItemDTO.inc.php';

class SportDTO extends DisplayListItemDTO
{
   private $idsport;

    /**
     * @return mixed
     */
    public function getId()
    {
      return $this->idsport;
    }

    public function getDetailUrl()
    {
        return '/sports.php?id='.$this->getId();
    }
}
?>