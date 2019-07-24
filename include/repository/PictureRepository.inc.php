<?php
include_once 'include/dto/PictureDTO.inc.php';

class PictureRepository
{
    private $link;

    public function __construct($link)
    {
        $this->link = $link;
    }

    function findAllPicture()
    {
        $stmt = $this->link->prepare("Select * from photo ph where ph.estValide = 1");
        if ($stmt->execute()) {
            $result = $stmt->fetchAll(PDO::FETCH_CLASS, 'PictureDTO');
        } else {
            throw new Exception('aucun photo trouvé');
        }
        $stmt->closeCursor();
        return $result;
    }
}
?>