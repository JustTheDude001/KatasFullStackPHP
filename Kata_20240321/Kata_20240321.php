<?php 

	function countPositions(int $number): int{
		$countPos = 0;
		
		if($number == 0){
			return 1;
		}
		
		while(($number % (10 ** $countPos)) != $number){
			$countPos = $countPos + 1;
		}
		return $countPos;
	}
	
	function digitsArray(int $number): array
	{
		
		$digits = [];
		
		while ($number > 0) {
			$digit = $number % 10;
			$digits[] = $digit;
			$number = (int)($number / 10);
		}
		return $digits;
	
	}
	
	function computeNNumber(int $positions, array $digits): int
	{
		$nNumber = 0;
		foreach($digits as $digit)
		{
			$nNumber += $digit ** $positions;
		}
		return $nNumber;
	}
	
	function narcissistNumber(int $number): int
	{
		if($number < 0)
		{
			echo "The function narcissistNumber does NOT work with negative integers!!!\n";
			return -1;
		}
		
		$positions = countPositions($number);
		//echo "Positions Number = ".$positions."\n";
		
		$digitsArray = digitsArray($number);
		//echo "arrayNumbers = ".var_dump($digitsArray)."\n";
		
		$nNumber = computeNNumber($positions, $digitsArray);
		echo "Narcissitic Number = ".$nNumber."\n";
		
		return $nNumber;
		
	}
	
	function checkIfNarcissiticNumber(int $number): bool
	{
		if($number == narcissistNumber($number))
		{
			echo "The number ".$number." is YES a Narcissitic Number \n";
			return True;
		}else{
			echo "The number ".$number." is NOT a Narcissitic Number \n";
			return False;
		}
	}
	
	function test_01()
	{
		
		$values = array(
			1,
			10,
			100,
			7,
			16,
			157,
			0,
			99,
			101,
			10913,
			-12340,
			-98172,
			0,
			1,
			153, 
			371,
			407,
			
		);
		
		
		foreach($values as $value){
			checkIfNarcissiticNumber($value);
		}
		
	}
	test_01();
	
?>
