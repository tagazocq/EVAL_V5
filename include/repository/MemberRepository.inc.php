<?php
include_once 'include/dto/MemberDTO.inc.php';

class MemberRepository
{
    private $link;
    public function __construct($link){
        $this->link = $link;
    }

    function findAllMember() {
        $stmt = $this->link->prepare("Select * from membre");
        if($stmt->execute()){
            $result = $stmt->fetchAll(PDO::FETCH_CLASS, 'MemberDTO');
        }else {
            throw new Exception('aucun membre trouvé');
        }
        $stmt->closeCursor();
        return $result;
    }
}