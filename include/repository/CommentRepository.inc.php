<?php
include_once 'include/dto/CommentDTO.inc.php';

class CommentRepository
{
    private $link;

    public function __construct($link)
    {
        $this->link = $link;
    }

    function findAllComment()
    {
        $stmt = $this->link->prepare("Select * from commentaire");
        if ($stmt->execute()) {
            $result = $stmt->fetchAll(PDO::FETCH_CLASS, 'CommentDTO');
        } else {
            throw new Exception('aucun commentaire trouvé');
        }
        $stmt->closeCursor();
        return $result;
    }
}