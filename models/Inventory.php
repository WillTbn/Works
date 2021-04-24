<?php
class Inventory extends model{
    public function setLog($id_product, $id_company, $id_user, $action){
        $sql = $this->db->prepare("INSERT INTO inventory_history SET id_product = :id_product, id_user = :id_user, action = :action, date_action = NOW(), id_company = :id_company");
        $sql->bindValue(":id_product", $id_product);
        $sql->bindValue(":id_company", $id_company);
        $sql->bindValue(":id_user", $id_user);
        $sql->bindValue(":action", "del");
        $sql->execute();
    }
    public function getList($offset, $id_company){
        $array = [];

        $sql = $this->db->prepare("SELECT * FROM inventory WHERE id_company = :id_company LIMIT $offset, 10");
        $sql->bindValue(":id_company", $id_company);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        return $array;
    }
    public function add($name, $price, $quant, $min_quant, $id_company, $id_user){
        $sql = $this->db->prepare("INSERT INTO inventory SET name = :name, price = :price, quant = :quant, min_quant = :min_quant, id_company = :id_company");
        $sql->bindValue(":name", $name);
        $sql->bindValue(":price", $price);
        $sql->bindValue(":quant", $quant);
        $sql->bindValue(":min_quant", $min_quant);
        $sql->bindValue(":id_company", $id_company);
        $sql->execute();

        $id_product = $this->db->lastInsertId();
        $this->setLog($id_product, $id_company, $id_user, 'edit');
        // $sql = $this->db->prepare("INSERT INTO inventory_history SET id_product = :id_product, id_user = :id_user, action = :action, date_action = NOW(), id_company = :id_company");
        // $sql->bindValue(":id_product", $id_product);
        // $sql->bindValue(":id_company", $id_company);
        // $sql->bindValue(":id_user", $id_user);
        // $sql->bindValue(":action", "add");
        // $sql->execute();
    }
    public function edit($id,$name, $price, $quant, $min_quant, $id_company, $id_user){
        $sql = $this->db->prepare("UPDATE inventory SET name = :name, price = :price, quant = :quant, min_quant = :min_quant WHERE id = :id AND id_company = :id_company ");
        $sql->bindValue(":name", $name);
        $sql->bindValue(":price", $price);
        $sql->bindValue(":quant", $quant);
        $sql->bindValue(":min_quant", $min_quant);
        $sql->bindValue(":id_company", $id_company);
        $sql->bindValue(":id", $id);
        $sql->execute();

        $this->setLog($id, $id_company, $id_user, 'edt');
    }
    public function getInfo($id,$id_company){
        $array = [];

        $sql = $this->db->prepare("SELECT * FROM inventory WHERE id = :id AND id_company = :id_company");
        $sql->bindValue(":id", $id);
        $sql->bindValue(":id_company", $id_company);
        $sql->execute();
        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;
    }
    public function delete($id, $id_company, $id_user){
        $sql = $this->db->prepare("DELETE FROM inventory WHERE id = :id AND id_company = :id_company");
        $sql->bindValue(":id_company", $id_company);
        $sql->bindValue(":id", $id);
        $sql->execute();

        $this->setLog($id, $id_company, $id_user, 'del');        

    }
}