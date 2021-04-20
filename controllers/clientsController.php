<?php
class clientsController extends controller{
    public function __construct() {
        parent::__construct();
        $u = new Users();
        //verificar se ele não esta logado
        if($u->isLogged() == false){
            header("Location: ".BASE_URL."/login" );
            exit;
        }
    }
    public function index(){
        $data = [];
        $u = new Users();
        //aqui pegando a sesão e informações do usuario e setando o mesmo.
        $u->setLoggedUser();
        //definindo minha campanhia atras do id do usuario
        $company = new Company($u->getCompany());
        $data['company_name'] = $company->getName();
        $data['user_email'] = $u->getEmail();
        // verificando a permisão do usuario
        if($u->hasPermission('clients_view')){
            $c = new Clients();
            $offset = 0;

            $data['clients_list'] = $c->getList($offset);
            $data['edit_permission'] = $u->hasPermission('clients_edit');

            $this->loadTemplate('clients', $data);
        }else{
            header("Location: ".BASE_URL);
        }
        
    }
    public function add(){
        $data = [];
        $u = new Users();
        //aqui pegando a sesão e informações do usuario e setando o mesmo.
        $u->setLoggedUser();
        //definindo minha campanhia atras do id do usuario
        $company = new Company($u->getCompany());
        $data['company_name'] = $company->getName();
        $data['user_email'] = $u->getEmail();
        // verificando a permisão do usuario
        if($u->hasPermission('clients_edit')){
            $c = new Clients();
            
            if(isset($_POST['name']) && !empty($_POST['name'])){

                $name = addslashes($_POST['name']);
                $email = addslashes($_POST['email']);
                $phone = addslashes($_POST['phone']);
                $stars = addslashes($_POST['stars']);
                $internal_obs = addslashes($_POST['internal_obs']);
                $address = addslashes($_POST['address']);
                $address_zipcode = addslashes($_POST['address_zipcode']);
                $address_number = addslashes($_POST['address_number']);
                $address_country = addslashes($_POST['address_country']);
                $address_state = addslashes($_POST['address_state']);
                $address_city = addslashes($_POST['address_city']);
                
                $c->add($u->getCompany(), $name, $email, $phone, $stars, $internal_obs, $address, $address_city, $address_country, $address_number, $address_state, $address_zipcode);
                
                header("Location: ".BASE_URL."/clients");
            }

            $this->loadTemplate('clients_add', $data);
        }else{
            header("Location: ".BASE_URL."/clients");
        }
    }
}