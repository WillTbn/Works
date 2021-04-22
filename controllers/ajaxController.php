<?php
class ajaxController extends controller{
    public function __construct() {
        parent::__construct();
        $u = new Users();
        //verificar se ele não esta logado
        if($u->isLogged() == false){
            header("Location: ".BASE_URL."/login" );
            exit;
        }
    }
    public function index(){}

    public function searchClients(){
        $data = [];
        $u = new Users();
        //aqui pegando a sesão e informações do usuario e setando o mesmo.
        $u->setLoggedUser();
        $c = new Clients();

        if(isset($_GET['q'])&& !empty($_GET['q'])){
            $q = addslashes($_GET['q']);
            $data = $c->searchClientByName($q, $u->getCompany());
        }

        echo json_encode($data);
    }

}