<?php
class homeController extends controller {

    public function __construct() {
        parent::__construct();
        $u = new Users();
        //verificar se ele não esta logado
        if($u->isLogged() == false){
            header("Location: ".BASE_URL."/login" );
        }
    }

    public function index() {
        $data = array();
        $u = new Users();
        //aqui pegando a sesão e informações do usuario e setando o mesmo.
        $u->setLoggedUser();
        //definindo minha campanhia atraves do id do usuario
        $company = new Company($u->getCompany());
        $data['company_name'] = $company->getName();
        $data['user_email'] = $u->getEmail();


        $this->loadTemplate('home', $data);
    }

}