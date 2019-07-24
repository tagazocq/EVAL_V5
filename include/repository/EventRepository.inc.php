<?php
include_once 'include/dto/EventDTO.inc.php';

class EventRepository
{
    private $link;

    public function __construct($link)
    {
        $this->link = $link;
    }

    function findAllEvent()
    {
        $stmt = $this->link->prepare("Select * from evenement");
        if ($stmt->execute()) {
            $result = $stmt->fetchAll(PDO::FETCH_CLASS, 'EventDTO');
        } else {
            throw new Exception('aucun evenement trouvé');
        }
        $stmt->closeCursor();
        return $result;
    }
}