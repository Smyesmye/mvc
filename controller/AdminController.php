<?php
class AdminController{

    private $connecter;
    private $Connection;

    public function __construct() {
		require_once  __DIR__ . "/../core/Connecter.php";
        require_once  __DIR__ . "/../model/employee.php";
        require_once  __DIR__ . "/../model/CommonModel.php";
        
        $this->connecter=new Connecter();
        $this->Connection=$this->connecter->Connection();

    }


    public function run($actionn){
        
        switch($actionn)
        { 
            case "index" :
                $this->index();
                break;
            case "login" :
                $this->login();
                break;
            case "processLogin" :
                $this->processLogin();
                break;
            case "dashboard" :
                $this->dashboard();
                break;
            case "logout" :
                $this->logout();
                break;
            case "gallery" :
                $this->gallery();
                break;
            case "galleryAdd" :
                $this->galleryAdd();
                break;
            case "galleryStore" :
                $this->galleryStore();
                break;
            case "galleryDelete" :
                $this->galleryDelete();
                break;
            case "contact_request" :
                $this->contact_request();
                break;
            case "contectDelete" :
                $this->contectDelete();
                break;
                
                
            default:
                $this->index();
                break;
        }
    }

    public function checkAuth(){
        if (isset($_SESSION['user_id'])) {
            $model=new CommonModel($this->Connection);
            return $model->getdata('users',array('id'=>$_SESSION['user_id']))[0];
        }
    }
    
   /*---------------------------------------------*/
    public function index(){

        $user = $this->checkAuth();

        if (isset($user['id'])) {
            header('Location:'.BASE_URL."admin&action=dashboard");
        }else{
            header('Location:'.BASE_URL."admin&action=login");
        }
       
    }

    /*---------------------------------------------*/
    public function dashboard(){
        $data = array();
        $data = array();
        $model=new CommonModel($this->Connection);
        $data['contact_all'] =  $model->getdata('contact_request');
        $this->view("admin/dashboard",$data);
    }

    /*---------------------------------------------*/
    public function gallery(){
        $data = array();
        $model=new CommonModel($this->Connection);
        $data['gallery_all'] =  $model->getdata('gallery');
        $this->view("admin/gallery",$data);
    }

    /*---------------------------------------------*/
    public function galleryAdd(){
        $data = array();
        $this->view("admin/galleryAdd",$data);
    }

    /*---------------------------------------------*/
    public function galleryStore(){


        $path = "uploads/";

        if ($_FILES["userfile"]["error"] > 0) {
          
        } else {
        
            $f_name = $_FILES["userfile"]["name"];
            $f_name = time().$f_name;

            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $path.$f_name)) {
                $model=new CommonModel($this->Connection);
                $param['image'] = $f_name;
                $result=$model->addRecord('gallery',$param);

            }
        }

        header('Location:'.BASE_URL."admin&action=gallery");
       
    }

    /*---------------------------------------------*/
    public function galleryDelete(){
        $id = $_GET['id'];
        $model=new CommonModel($this->Connection);
                $result=$model->delete('gallery',$id);
        header('Location:'.BASE_URL."admin&action=gallery");

    }

    /*---------------------------------------------*/
    public function login(){
        
        $data = array();
        $this->view("admin/login",$data);
    }


    /*---------------------------------------------*/
    public function logout(){
       session_unset();
        session_destroy();
        header('Location:'.BASE_URL."admin&action=login");
    }

    /*---------------------------------------------*/


    public function processLogin(){
        
        //We create the employee object
        $model=new CommonModel($this->Connection);
        $param['email'] = $_POST['email'];
        $param['password'] = $_POST['password'];
        
        //We get all the employees
        $result=$model->getdata('users',$param);

        if (isset($result[0]['id'])) {
           $_SESSION['user_id'] = $result[0]['id'];
           header('Location: '.BASE_URL."admin&action=index");
           exit();
        }else{
            $_SESSION['flash'] = "invalid login details";
        }

        header('Location:'.BASE_URL."admin&action=login");


    }


    /*---------------------------------------------*/
    public function contact_request(){
        
        $data = array();
        $model=new CommonModel($this->Connection);
        $data['contact_all'] =  $model->getdata('contact_request');
        $this->view("admin/contact_request",$data);
    }

    /*---------------------------------------------*/
    public function contectDelete(){
        $id = $_GET['id'];
        $model=new CommonModel($this->Connection);
                $result=$model->delete('contact_request',$id);
        header('Location:'.BASE_URL."admin&action=contact_request");

    }

   
    public function view($vu,$date){
        $data = $date;  
        require_once  __DIR__ . "/../view/" . $vu . ".php";

    }

}
?>
