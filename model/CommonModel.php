<?php
class CommonModel {
    private $Connection;
    public function __construct($Connection) {
		$this->Connection = $Connection;
    }

    /*----------------------------*/
    public function getdata($table,$param=array()){

        $column = array();
        $values = array();
        foreach ($param as $key => $value) {
           $column[] = $key;
           $values[] = ":".$key;
        }

        $query = "SELECT * FROM " . $table;

        if (!empty($param)) {

            $where_string = "";
            $normil = array();
            foreach($param as $key => $value){
                $normil[] = $key." = :".$key;
            }

            $query = "SELECT * FROM " . $table . "  WHERE ".implode(' AND ',$normil);        
        }

        $consultation = $this->Connection->prepare($query);
        $consultation->execute($param);
        $resultat = $consultation->fetchAll();
        $this->Connection = null; //Connection
        return $resultat;

    }



    public function addRecord($table,$param){
        $column = array();
        $values = array();
        foreach ($param as $key => $value) {
           $column[] = $key;
           $values[] = ":".$key;
        }
        $consultation = $this->Connection->prepare("INSERT INTO " . $table . " (".implode(',', $column).")
                                        VALUES (".implode(',', $values).")");
        $result = $consultation->execute($param);
        $this->Connection = null;
        return $result;
    }

     public function delete($table,$id){
        try {
            $consultation = $this->Connection->prepare("DELETE FROM " . $table . " WHERE id = :id");
            $consultation->execute(array(
                "id" => $id
            ));
            $Connection = null;
        } catch (Exception $e) {
            echo 'Failed DELETE (deleteById): ' . $e->getMessage();
            return -1;
        }
    }


    public function update(){

        $consultation = $this->Connection->prepare("
            UPDATE " . $this->table . " 
            SET 
                Name = :Name,
                Surname = :Surname, 
                email = :email,
                phone = :phone
            WHERE id = :id 
        ");

        $resultat = $consultation->execute(array(
            "id" => $this->id,
            "Name" => $this->Name,
            "Surname" => $this->Surname,
            "email" => $this->email,
            "phone" => $this->phone
        ));
        $this->Connection = null;

        return $resultat;
    }
        
    
    public function getAll(){

        $consultation = $this->Connection->prepare("SELECT id,Name,Surname,email,phone FROM " . $this->table);
        $consultation->execute();
        $resultat = $consultation->fetchAll();
        $this->Connection = null; //Connection
        return $resultat;

    }
    
    
    public function getById($id){
        $consultation = $this->Connection->prepare("SELECT id,Name,Surname,email,phone 
                                                FROM " . $this->table . "  WHERE id = :id");
        $consultation->execute(array(
            "id" => $id
        ));
        $resultat = $consultation->fetchObject();
        $this->Connection = null; //Connection fermée
        return $resultat;
    }
    
    public function getBy($column,$value){
        $consultation = $this->Connection->prepare("SELECT id,Name,Surname,email,phone 
                                                FROM " . $this->table . " WHERE :column = :value");
        $consultation->execute(array(
            "column" => $column,
            "value" => $value
        ));
        $resultat = $consultation->fetchAll();
        $this->Connection = null; //Connection fermée
        return $resultat;
    }
    
    public function deleteById($id){
        try {
            $consultation = $this->Connection->prepare("DELETE FROM " . $this->table . " WHERE id = :id");
            $consultation->execute(array(
                "id" => $id
            ));
            $Connection = null;
        } catch (Exception $e) {
            echo 'Failed DELETE (deleteById): ' . $e->getMessage();
            return -1;
        }
    }
    
    public function deleteBy($column,$value){
        try {
            $consultation = $this->Connection->prepare("DELETE FROM " . $this->table . " WHERE :column = :value");
            $consultation->execute(array(
                "column" => $value,
                "value" => $value,
            ));
            $Connection = null;
        } catch (Exception $e) {
            echo 'Failed DELETE (deleteBy): ' . $e->getMessage();
            return -1;
        }
    }
    
}
?>
