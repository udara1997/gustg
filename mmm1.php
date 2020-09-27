<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		class animal{
			public $family;
			public $food;

			public function __construct($family,$food)
			{
				$this->family=$family;
				$this->food=$food;
			}
			public function animal1(){
				echo "this family is {$this->family} and food is {$this->food}";
			}
		}
		class rabbit extends animal{

		}
		$animal2=new rabbit("rabbit","carrat");
		echo $animal2->animal1();

	?>
</body>
</html>