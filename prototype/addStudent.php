<?php

require_once "buisness/studentBll.php";
    
    $StudentBal = new studentBll();

if(!empty($_POST)){
	$student = new student();
	$student->setName($_POST['name']);
	$student->setEmail($_POST['email']);
	$student->setDateOfBirth($_POST['dateOfBirth']);
	$StudentBal->addStudent($student);
	
	// redirect to index.php
}
?>

<form action="" method="POST">
Name: <input type="text" name="name" >                                                          
Email : <input type="text" name="email" >
DateOfBirth : <input type="date"  name="dateOfBirth" >
   
<button type="submit">add +</button>
</form>