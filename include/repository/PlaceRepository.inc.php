<?php
require_once 'include/dto/PlaceDTO.inc.php';

class PlaceRepository
{
    private $link;

    public function __construct($link){
        $this->link = $link;
    }

    function findAllPlaces() {
        $stmt = $this->link->prepare("Select * from lieu");
        if($stmt->execute()){
            $result = $stmt->fetchAll(PDO::FETCH_CLASS, 'PlaceDTO');
        }else {
            throw new Exception('aucun lieu trouvé');
        }
        $stmt->closeCursor();
        return $result;
    }
}
?>