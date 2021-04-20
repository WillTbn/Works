<?php
class Users extends model {

    private $userInfo;
    private $permissions;
    //verificar se ele não esta logado
    public function isLogged(){

        if(isset($_SESSION['ccUser']) && !empty($_SESSION['ccUser'])){
            return true;
        }
        return false;
    }
    public function doLogin($email, $password){

        $sql = $this->db->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
        $sql->bindValue(':email', $email);
        $sql->bindValue(':password', md5($password));
        $sql->execute();
        if($sql->rowCount() > 0){
            $row = $sql->fetch();
            
            $_SESSION['ccUser'] = $row['id'];
            
            return true;

        } else{
            return false;
        }
    }
    public function setLoggedUser(){
        if(isset($_SESSION['ccUser']) && !empty($_SESSION['ccUser'])){
            $id = $_SESSION['ccUser'];
            
            $sql = $this->db->prepare("SELECT * FROM users WHERE id = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();

            if($sql->rowCount() > 0){
                $this->userInfo = $sql->fetch();
                $this->permissions = new Permissions();
                $this->permissions->setGroup($this->userInfo['id_group'], $this->userInfo['id_company']);
            }
        }
    }
    public function getCompany(){
        if(isset($this->userInfo['id_company'])){
            return $this->userInfo['id_company'];
        }
        return 0;
    }
    public function getEmail(){
        if(isset($this->userInfo['email'])){
            return $this->userInfo['email'];
        }
        return 0;
    }
    public function getInfo($id, $id_company){
        $array = array();
        $sql =  $this->db->prepare("SELECT * FROM users WHERE id = :id AND id_company =:id_company");
        $sql->bindValue(":id", $id);
        $sql->bindValue(":id_company", $id_company);
        $sql->execute();
        
        if($sql->rowCount() > 0){
           $array = $sql->fetch() ;
        }
        return $array;
    }
    public function logout(){
        unset($_SESSION['ccUser']);
    }
    public function hasPermission($name){
        return $this->permissions->hasPermission($name);
    }
    public function findUsersInGroup($id){
        $sql= $this->db->prepare("SELECT COUNT(*) as c FROM users WHERE id_group = :id_group");
        $sql->bindValue(":id_group", $id);
        $sql->execute();
        $row = $sql->fetch();
        if($row['c'] == '0'){
            return false;
        }else{
            return true;
        }
    }
    // essa é a parte do usuario
    public function getList($id_company){
        $array = [];
        // aqui usamos um LEFT JOIN para pega o nome do grupo que o usuario pertence
        // assim retornando o nome do grupo daquele id 
        $sql =  $this->db->prepare(
            "SELECT 
                users.id, 
                users.email, 
                permission_group.name 
            FROM users
            LEFT JOIN permission_group ON permission_group.id = users.id_group
            WHERE 
            users.id_company = :id_company");
        $sql->bindValue(":id_company", $id_company);
        $sql->execute();

        if($sql->rowCount() > 0 ){
            $array = $sql->fetchAll();
        }
        return $array;
    }
    public function add($email, $pass, $group, $id_company){
        // verificando se já existe email
        $sql = $this->db->prepare("SELECT COUNT(*) as c FROM users WHERE email = :email");
        $sql->bindValue(":email", $email);
        $sql->execute();
        $row = $sql->fetch();

        if($row['c'] == '0'){
            $sql = $this->db->prepare("INSERT INTO users SET email = :email, password = :password, id_group = :id_group, id_company = :id_company");
            $sql->bindValue(":email", $email);
            $sql->bindValue(":password", md5($pass));
            $sql->bindValue(":id_group", $group);
            $sql->bindValue(":id_company", $id_company);
            $sql->execute();
            return '1';
        }else{
            return '0';
        }
    }
    public function edit($pass, $group, $id, $id_company){
        $sql = $this->db->prepare("UPDATE users SET id_group = :id_group WHERE id = :id AND id_company = :id_company");
        $sql->bindValue(":id_group", $group);
        $sql->bindValue(":id", $id);
        $sql->bindValue(":id_company", $id_company);
        $sql->execute();

        if(!empty($pass)){
            $sql = $this->db->prepare("UPDATE users SET password = :password WHERE id = :id AND id_company = :id_company");
            $sql->bindValue(":password", md5($pass));
            $sql->bindValue(":id", $id);
            $sql->bindValue(":id_company", $id_company);
            $sql->execute();
        }
    }
    public function delete($id, $id_company){
        $sql = $this->db->prepare("DELETE FROM users WHERE id = :id AND id_company = :id_company");
        $sql->bindValue(":id", $id);
        $sql->bindValue(":id_company", $id_company);
        $sql->execute();
    }
}