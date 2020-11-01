<?php include "inc/header.php"; ?>
<?php 
	 class Person{
	 	public $name;
	 	public $age;
	 	public function personName(){
	 		echo "Person Name : ".$this->name;
	 	}
	 	public function personAge($age){
	 		echo "Age : ".$this->age = $age;
	 	}
	 }
	 $person = new Person();
	 $person->name="Mizanur Rahman";
	 $person->personName();
	 echo "<br/>";
	 $person->personAge(35);
?>
<?php include "inc/footer.php"; ?>