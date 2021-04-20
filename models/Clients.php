<?php 
class Clients extends model{
    public function getList($offset){
        $array = [];
        $sql = $this->db->prepare("SELECT * FROM clients LIMIT $offset, 10");
        $sql->execute();
        if($sql->rowCount() > 0 ){
            $array = $sql->fetchAll();
        }
        return $array;
    }
    public function add($id_company,$name, $email, $phone, $stars, $internal_obs, $address, $address_city, $address_country, $address_number, $address_state, $address_zipcode){
        
        $sql = $this->db->prepare("INSERT INTO clients SET id_company = :id_company,name = :name, email = :email, phone = :phone, stars = :stars, internal_obs = :internal_obs, address = :address, address_city = :address_city, address_country = :address_country, address_number = :address_number, address_state = :address_state, address_zipcode = :address_zipcode");
        $sql->bindValue(":id_company", $id_company);
        $sql->bindValue(":name", $name);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":phone", $phone);
        $sql->bindValue(":stars", $stars);
        $sql->bindValue(":internal_obs", $internal_obs);
        $sql->bindValue(":address", $address);
        $sql->bindValue(":address_city", $address_city);
        $sql->bindValue(":address_country", $address_country);
        $sql->bindValue(":address_number", $address_number);
        $sql->bindValue(":address_state", $address_state);
        $sql->bindValue(":address_zipcode", $address_zipcode);
        $sql->execute();
        // echo $id_company.",".$name.",".$email.",".$phone.",".$stars.",".$internal_obs.",".$address.",".$address_city.",".$address_country.",".$address_number.",".$address_state.",".$address_zipcode;
        //         exit;
    }
}