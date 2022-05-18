<?php
class EmployeesController{

    private $connecter;
    private $Connection;

    public function __construct() {
		require_once  __DIR__ . "/../core/Connecter.php";
        require_once  __DIR__ . "/../model/employee.php";
        
        $this->connecter=new Connecter();
        $this->Connection=$this->connecter->Connection();

    }


    public function run($actionn){
        switch($actionn)
        { 
            case "index" :
                $this->index();
                break;
            case "alta" :
                $this->crear();
                break;
            case "detalle" :
                $this->detalle();
                break;
            case "actualizar" :
                $this->actualizar();
                break;
            default:
                $this->index();
                break;
        }
    }
    
 
    public function index(){
        
        //We create the employee object
        $employee=new Employee($this->Connection);
        
        //We get all the employees
        $employees=$employee->getAll();
       
        //We load the index view and pass values to it
        $this->view("index",array(
            "employees"=>$employees,
            "titre" => "PHP MVC"
        ));
    }


    public function detalle(){
        
        //We load the model
        $modelo = new Employee($this->Connection);
        //We recover the employee from the BBDD
        $employee = $modelo->getById($_GET["id"]);
        //We load the detail view and pass values to it
        $this->view("detalle",array(
            "employee"=>$employee,
            "titre" => "Detalle Employee"
        ));
    }
    

    public function crear(){
        if(isset($_POST["Name"])){
            
            //Creamos un usuario
            $employee=new Employee($this->Connection);
            $employee->setName($_POST["Name"]);
            $employee->setSurname($_POST["Surname"]);
            $employee->setEmail($_POST["email"]);
            $employee->setphone($_POST["phone"]);
            $save=$employee->save();
        }
        header('Location: index.php');
    }


    public function actualizar(){
        if(isset($_POST["id"])){
            
            //We create a user
            $employee=new Employee($this->Connection);
            $employee->setId($_POST["id"]);
            $employee->setName($_POST["Name"]);
            $employee->setSurname($_POST["Surname"]);
            $employee->setEmail($_POST["email"]);
            $employee->setphone($_POST["phone"]);
            $save=$employee->update();
        }
        header('Location: index.php');
    }
    
    
    public function view($vu,$date){
        $data = $date;  
        require_once  __DIR__ . "/../view/" . $vu . "View.php";

    }

}
?>
