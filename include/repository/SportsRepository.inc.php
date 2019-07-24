<?php
include_once 'include/dto/SportDTO.inc.php';

class SportsRepository
{
    private $link;
    public function __construct($link){
        $this->link = $link;
    }

    function findAllSports() {
        $stmt = $this->link->prepare("Select * from sport");
        if($stmt->execute()){
            $result = $stmt->fetchAll(PDO::FETCH_CLASS, 'SportDTO');
        }else {
            throw new Exception('aucun sport trouvé');
        }
        $stmt->closeCursor();
        return $result;
    }

    function findSportById($id) {
        $stmt = $this->link->prepare("Select * from sport where idsport = ?");
        $stmt->bindValue(1,$id);
        if($stmt->execute()){
            $result = $stmt->fetchAll(PDO::FETCH_CLASS, 'SportDTO');
        }else {
            throw new Exception('sport non trouvé');
        }
        $stmt->closeCursor();
        return $result[0];
    }

    public function createOrUpdate(SportModificationDTO $detail)
    {
        if ($detail->getId() == null) {
            $stmt = $this->link->prepare("insert into sport (nom, description) value (?,?)");
            $stmt->bindValue(2,...);
            //TODO continuer l'insert

            $stmt->execute();

            $detail->setId($this->link->lastInsertId());
        } else {
           // TODO update
            $stmt = $this->link->prepare(" update sport set nom = ? , description = ? where idsport = ?");

            $stmt->execute();
        }

        return $this->findSportById($detail->getId());
    }
}
?>