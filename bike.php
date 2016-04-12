<?php 

class Bike 
{
	public $price;
	public $max_speed;
	public $miles;
public function __construct($price,$max_speed) {
		$this->price = $price;
		$this->max_speed = $max_speed;
		$this->miles = 0;
}
	// have this method display the bike's price, maximum speed and total miles driven
 	 function displayInfor(){
		echo 	"<br />Price: " . $this->price.
				"<br />Max Speed: " . $this->max_speed.
				"<br />Miles: " . $this->miles ."<br />";
	}
 	// have it display "driving" on the screen and increase the total miles driven by 10
 	function drive(){
 		echo "Driving";
		$this->miles = $this->miles + 10;	
		return $this;
 	}
 	// have it display "reversing" on the screen and decrease the total miles driven by 5
 	function reverse(){
 		echo "Reversing";
 		if ($this->miles < 0){
 			$this->miles = 30;
 		}
 		else {
		$this->miles = $this->miles - 5;	
	}
}
}
// create 3 instances of this bike
$bike1 = new Bike(200, "50mpg");
$bike2 = new Bike(250, "45mpg");
$bike3 = new Bike(300, "55mpg");

$bike1->drive()->drive()->drive()->reverse();
$bike1->displayInfor();
$bike2->drive()->drive()->drive()->reverse();
$bike2->displayInfor();
$bike3->drive()->drive()->drive()->reverse();
$bike3->displayInfor();

?>