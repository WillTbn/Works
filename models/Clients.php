<?php 
class Clients extends model{
    public function getList($offset, $id_company){
        $array = [];
        $sql = $this->db->prepare("SELECT * FROM clients WHERE id_company = :id_company LIMIT $offset, 10");
        $sql->bindValue(':id_company', $id_company);
        $sql->execute();
        if($sql->rowCount() > 0 ){
            $array = $sql->fetchAll();
        }
        return $array;
    }
    // pegando informação de um cliente a parte do id
    public function getInfo($id, $id_company){
        $array = [];

        $sql = $this->db->prepare("SELECT * FROM clients WHERE id = :id AND id_company = :id_company");
        $sql->bindValue(':id', $id);
        $sql->bindValue(':id_company', $id_company);
        $sql->execute();
        if($sql->rowCount() > 0 ){
            $array = $sql->fetch();
        }
        return $array;
    }
    public function add($id_company,$name, $email, $phone, $stars, $internal_obs, $address,$district, $address_city, $address_country, $address_number, $address_state, $address_zipcode,$address2){
        
        $sql = $this->db->prepare("INSERT INTO clients SET id_company = :id_company,name = :name, email = :email, phone = :phone, stars = :stars, internal_obs = :internal_obs, address = :address,$district = :district, address_city = :address_city, address_country = :address_country, address_number = :address_number, address_state = :address_state, address_zipcode = :address_zipcode, address2 = :address2");
        $sql->bindValue(":id_company", $id_company);
        $sql->bindValue(":name", $name);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":phone", $phone);
        $sql->bindValue(":stars", $stars);
        $sql->bindValue(":internal_obs", $internal_obs);
        $sql->bindValue(":address", $address);
        $sql->bindValue(":district", $district);
        $sql->bindValue(":address_city", $address_city);
        $sql->bindValue(":address_country", $address_country);
        $sql->bindValue(":address_number", $address_number);
        $sql->bindValue(":address_state", $address_state);
        $sql->bindValue(":address_zipcode", $address_zipcode);
        $sql->bindValue(":adrress2", $address2);
        $sql->execute();
        // echo $id_company.",".$name.",".$email.",".$phone.",".$stars.",".$internal_obs.",".$address.",".$address_city.",".$address_country.",".$address_number.",".$address_state.",".$address_zipcode;
        //         exit;
    }
    public function edit($id,$id_company,$name, $email, $phone, $stars, $internal_obs, $address,$district, $address_city, $address_country, $address_number, $address_state, $address_zipcode, $address2){
        
        $sql = $this->db->prepare("UPDATE clients SET name = :name, email = :email, phone = :phone, stars = :stars, internal_obs = :internal_obs, address = :address, district = :district, address_city = :address_city, address_country = :address_country, address_number = :address_number, address_state = :address_state, address_zipcode = :address_zipcode, address2 = :address2 WHERE id = :id AND id_company = :id_company");
        $sql->bindValue(":name", $name);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":phone", $phone);
        $sql->bindValue(":stars", $stars);
        $sql->bindValue(":internal_obs", $internal_obs);
        $sql->bindValue(":address", $address);
        $sql->bindValue(":district", $district);
        $sql->bindValue(":address_city", $address_city);
        $sql->bindValue(":address_country", $address_country);
        $sql->bindValue(":address_number", $address_number);
        $sql->bindValue(":address_state", $address_state);
        $sql->bindValue(":address_zipcode", $address_zipcode);
        $sql->bindValue(":address2", $address2);
        $sql->bindValue(":id", $id);
        $sql->bindValue(":id_company", $id_company);
        $sql->execute();        
    }
    
}