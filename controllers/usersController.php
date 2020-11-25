<?php
class usersController extends controller{
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
        if($u->hasPermission('users_view')){
            $data['users_list'] = $u->getList($u->getCompany());
            $this->loadTemplate('users', $data);
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
        if($u->hasPermission('users_view')){
            
            $p= new Permissions();

            if(isset($_POST['email']) && !empty($_POST['email'])){
                $email = addslashes($_POST['email']);
                $pass = addslashes($_POST['password']);
                $group = addcslashes($_POST['group']);

                $u->add($email, $pass, $group, $u->getCompany());
                header("Location: ".BASE_URL."/users");
            }

            $data['group_list'] = $p->getGroupList($u->getCompany());

            $this->loadTemplate('users_add', $data);
        }else{
            header("Location: ".BASE_URL);
        }
    }
}