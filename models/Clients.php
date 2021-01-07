<?php 
class Clients extends model{
    public function getList($offset){
        $array = [];
        $sql = $this->db->prepare("SELECT *FROM clients LIMIT :offset, 10");
        $sql->bindValue(":offset", $offset);
        $sql->execute();
        if($sql->rowCount() > 0 ){
            $array = $sql->fetchAll();
        }
        return $array;
    }
}