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
            $clients = $c->searchClientByName($q, $u->getCompany());

            foreach($clients as $citem){
                $data[] = [
                    'name' => $citem['name'],
                    'link' => BASE_URL.'/clients/edit/'.$citem['id'],
                    'id' => $citem['id']
                ];
            }
        }

        echo json_encode($data);
    }
}