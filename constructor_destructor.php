<?php include "inc/header.php"; ?>

<?php 
	
	class Person{
		public $name;
		public $age;
		public $id;

		public function __construct($name, $age){
			$this->name = $name;
			$this->age = $age;
		}

		public function personDetails(){
			return "Person name is {$this->name} and Age is {$this->age}";
		}

		public function setID($id){
			$this->id = $id;
		}

		public function __destruct(){
			if(!empty($this->id)){
				echo "Saving Person<br/>";
			}
		}
	}
	$person = new Person("Mazedur Rahman", 35);
	echo "<br/>";
	echo $person->personDetails();
	$person->setID(35);
	unset($person);
 ?>





<?php include "inc/footer.php"; ?>