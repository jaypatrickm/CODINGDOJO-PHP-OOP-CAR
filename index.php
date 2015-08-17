<?php
class Car
{
	public $price;
	public $speed;
	public $fuel;
	public $mileage;
	public $tax;

	public function __construct($price, $speed, $fuel, $mileage)
	{
		$this->price = $price;
		$this->speed = $speed;
		$this->fuel = $fuel;
		$this->mileage = $mileage;
		if ($this->price > 10000)
		{
			$this->tax = 0.15;
		} 
		else 
		{
			$this->tax = 0.12;
		}
		$this->Display_all();
	}

	public function Display_all()
	{
		echo "<br>Car Info <br>Price: " . $this->price . "<br>Speed: " . $this->speed . "<br>Fuel: " . $this->fuel . "<br>Mileage: " . $this->mileage . "<br>Tax: " . $this->tax . "<br>"; 
	}
}
$car1  = new Car(2000, "35mph", "Full", "15mpg");
$car2  = new Car(12000, "50mph", "Not Full", "19mpg");
$car3  = new Car(25000, "45mph", "Full", "30mpg");
$car4  = new Car(4000, "38mph", "Not Full", "17mpg");
$car5  = new Car(100000, "125mph", "Full", "60mpg");
?>