<?php
require_once ("database/studentDal.php");

class StudentBll {
    private $studentBll = null;



    public function GetAllStudents(){
        $studentBll = new studentDal();

        return $studentBll->GetAllStudents();
    }

    public function AddStudent($student){
        $studentBll = new studentDal();

        return $studentBll->AddStudent($student);
    }
}

?>