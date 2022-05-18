<?php
class HomeController{

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
            case "contact" :
                $this->contact();
                break;
            case "gallery" :
                $this->gallery();
                break;
            case "about_us" :
                $this->about_us();
                break;
            case "contactStore" :
                $this->contactStore();
                break;
            default:
                $this->index();
                break;
        }
    }
    
   /*---------------------------------------------*/
    public function index(){
        $data = array();
        $model=new CommonModel($this->Connection);
        $data['gallery_all'] =  $model->getdata('gallery');
        $this->view("home/index",$data);
    }


    /*---------------------------------------------*/
    public function contact(){
        $data = array();
        $this->view("home/contact",$data);
    }

    /*---------------------------------------------*/
    public function gallery(){
        
       $data = array();
        $model=new CommonModel($this->Connection);
        $data['gallery_all'] =  $model->getdata('gallery');
        $this->view("home/gallery",$data);
    }

    /*---------------------------------------------*/
    public function about_us(){
        
         $data = array();
        $this->view("home/about_us",$data);
    }


    /*---------------------------------------------*/
    public function contactStore(){
        

        $para['name'] = $_POST['name'];
        $para['email'] = $_POST['email'];
        $para['phone'] = $_POST['phone'];
        $para['subject'] = $_POST['subject'];
        $para['message'] = $_POST['message'];

         $model=new CommonModel($this->Connection);
              
                $result=$model->addRecord('contact_request',$para);
                $_SESSION['flash'] = "Request sended successfully";
        
        header('Location:'.BASE_URL."home&action=contact");
    }

    /*---------------------------------------------*/

    public function view($vu,$date){
        $data = $date;  
        require_once  __DIR__ . "/../view/" . $vu . ".php";

    }

}
?>
