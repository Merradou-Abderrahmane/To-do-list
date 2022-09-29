<?php

require_once "database/studentDal.php";
    
    $StudentDal = new studentDal();

if(!empty($_POST)){
	$student = new student();
	$student->setName($_POST['name']);
	$student->setEmail($_POST['email']);
	$student->setDateOfBirth($_POST['dateOfBirth']);
	$StudentDal->addStudent($student);
	
	// redirect to index.php
}
?>

<form action="" method="POST">
Name: <input type="text" name="name" >                                                          
Email : <input type="text" name="email" >
DateOfBirth : <input type="date"  name="dateOfBirth" >
   
<button type="submit">add +</button>
</form>