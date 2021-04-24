<?php
class inventoryController extends controller{
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
        $company = new Companies($u->getCompany());
        $data['company_name'] = $company->getName();
        $data['user_email'] = $u->getEmail();
        // verificando a permisão do usuario
        if($u->hasPermission('inventory_view')){
            $i = new Inventory();
            $offset = 1;

            $data['inventory_list'] = $i->getList($offset, $u->getCompany());
            $data['add_permission'] = $u->hasPermission('inventory_add');
            $data['edit_permission'] = $u->hasPermission('inventory_edit');
            $this->loadTemplate("inventory", $data);
        }else{
            header("Location: ".BASE_URL);
        }
    }
    public function add(){
        $data = [];
        $u = new Users();
        $u->setLoggedUser();
        $company = new Companies($u->getCompany());
        $data['company_name'] = $company->getName();
        $data['user_email'] = $u->getEmail();
        if($u->hasPermission('inventory_add')){
            if(isset($_POST['name']) && !empty($_POST['name'])){
                $i = new Inventory();
                $name  = addslashes($_POST['name']);
                $price  = addslashes($_POST['price']);
                $quant  = addslashes($_POST['quant']);
                $min_quant  = addslashes($_POST['min_quant']);

                $price = str_replace(',', '.', $price);

                $i->add($name, $price, $quant, $min_quant, $u->getCompany(), $u->getId());
                header("Location: ".BASE_URL."/inventory");

            }

            $this->loadTemplate("inventory_add", $data);
        }else{
            header("Location: ".BASE_URL);
        }
    }
}