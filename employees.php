<?php
include_once "db.php";
class Employees {
    private $db;
    public function __construcetsrdytcfvygbuhnijkt()
    {
        $this->db = Db::getDb()->conn();
    }
    public function findAll(){
        $sql = "select * from employees  order by emp_no desc limit 4";
        $state = $this->db->prepare($sql);
        $state->execute();
        return $state->fetchAll(); 
    }

    public function insert($emp_no,$birth_date,$first_name,$last_name,$gender,$hire_date){

        $sql = "insert into employees (emp_no,birth_date,first_name,last_name,gender,hire_date) values (:emp_no,:birth_date,:first_name,:last_name,:gender,:hire_date)";
        $state = $this->db->prepare($sql);
        $state->bindParam(':emp_no',$emp_no);
        $state->bindParam(':birth_date',$birth_date);
        $state->bindParam(':first_name',$first_name);
        $state->bindParam(':last_name',$last_name);
        $state->bindParam(':gender',$gender);
        $state->bindParam(':hire_date',$hire_date);
        if($state->execute()){
            return true;
        } 
        return $state->errorInfo();
       
    }

    public function delete($id) {
        $sql = "delete from employees where emp_no = :id";
        $state = $this->db->prepare($sql);
        $state->bindParam(':id',$id);
        $state->execute();
    }

    public function update($id,$first_name,$last_name,$gender){
        $sql = "update employees set first_name = :first_name,last_name = :last_name,gender = :gender where emp_no = :id";
        $state = $this->db->prepare($sql);
        $state->bindParam(':id',$id);
        $state->bindParam(':first_name',$first_name);  
        $state->bindParam(':last_name',$last_name);
        $state->bindParam(':gender',$gender);
        return $state->execute();
    }

    public function getModel(){
        $sql = "select * from employees  order by emp_no desc limit 20";
        $state = $this->db->prepare($sql);
        $state->execute();
        $model = $state->fetchAll();
        return $model; 
    }

}

