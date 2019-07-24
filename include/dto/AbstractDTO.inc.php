<?php


class AbstractDTO
{
    /**
     * permet de ne pas créer automatiquement des fields quand on fait le Select * avec un fetchAll
     * @param $name
     * @param $value
     *
     */
    public function __set($name, $value){
    }
}