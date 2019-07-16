<?php
	echo '<b>Inherit  mechanism:</b>'.'</br>';

	abstract class Shape{

		// protected $x;
		// protected $y;
		abstract public function draw();
	}

	class Point extends Shape{
		public $x;
		public $y;

		public function __construct($x,$y){
			$this->x=$x;
			$this->y=$y;
		}
		public function draw(){
			echo 'Draw point with coordinates ('.$this->x.','.$this->y.')</br>';
		}
	} 

	$point= new Point(5,10);
	echo $point->draw();

?>