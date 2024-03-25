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
		checkIfNarcissiticNumber(1);
		checkIfNarcissiticNumber(10);
		checkIfNarcissiticNumber(100);
		
		checkIfNarcissiticNumber(7);
		checkIfNarcissiticNumber(16);
		checkIfNarcissiticNumber(157);
		
		checkIfNarcissiticNumber(0);
		checkIfNarcissiticNumber(99);
		checkIfNarcissiticNumber(101);
		
		checkIfNarcissiticNumber(10913);
		checkIfNarcissiticNumber(-12340);
		checkIfNarcissiticNumber(-98172);
		
		checkIfNarcissiticNumber(0);
		checkIfNarcissiticNumber(1);
		checkIfNarcissiticNumber(153);
		checkIfNarcissiticNumber(371);
		checkIfNarcissiticNumber(407);
	}
	test_01();
	
?>
