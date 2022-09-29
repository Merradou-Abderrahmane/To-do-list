<?php
require_once 'mysqlconnection.php';
require_once 'student.php';

class studentDal extends Connection {
 
    public function addStudent($student){

        $name = $student->getName();
        $email = $student->getDateOfBirth();
        $dateOfBirth = $student->getDateOfBirth();
        // Sql query
        $insertRow="INSERT INTO student (Name, Email, DateOfBirth) 
                                VALUES('$name', '$email', '$dateOfBirth')";
        // Execute query
        mysqli_query($this->Connect(), $insertRow);
    }

    public function getAllStudents(){
        $sqlGetData = 'SELECT * FROM student';
        $result = mysqli_query($this->Connect(), $sqlGetData);
        $StudentsList = mysqli_fetch_all($result, MYSQLI_ASSOC);

        $students = array();

        foreach($StudentsList as $studentList){
            $student = new student();
            $student->setId($studentList['id']);
            $student->setName($studentList['name']);
            $student->setEmail($studentList['email']);
            $student->setDateOfBirth($studentList['DateOfBirth']);

            array_push($students, $student);  
        }
        return $students;
    }
}
