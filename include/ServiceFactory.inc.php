<?php
require_once 'include/config.inc.php';
require_once 'include/repository/SportsRepository.inc.php';

class ServiceFactory
{
    function getDBLink(){
        $link = new PDO('mysql:host=' . MYHOST . ';dbname=' . MYDB . ';charset=UTF8', MYUSER, MYPASS);
        $link->exec("set names utf8");
        $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $link;
    }

    function getSportsRepository(){
        return new SportsRepository($this->getDBLink());
    }
}
$serviceFactory = new ServiceFactory();