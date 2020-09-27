<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<?php
	class sum{
		public $number1;
		public $number2;

		public function setnumber($number1,$number2){
			$this->number1=$number1;
			$this->number2=$number2;
		}

		public function getnumber(){
			return $this->number1+$this->number2;
			
		}
	}
	$obj11=new sum();
	$obj11->setnumber(20,10);
	$obj11->getnumber();

	echo $obj11->getnumber();

?>