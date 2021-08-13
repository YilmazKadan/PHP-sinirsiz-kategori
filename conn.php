<?php


try{
    $db = new PDO ("mysql:host=localhost;dbname=category",'root','');
    $db->query("SET NAMES utf8");

    function getQuery($query){
        global $db;
        $result = $db->prepare($query);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
catch (PDOException $ex){
    echo "Bir hata ile karşılaşıldı hata kody \n".$ex->getMessage();
}