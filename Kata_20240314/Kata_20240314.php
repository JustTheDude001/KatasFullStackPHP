<?php
//https://github.com/CloudSalander/kata-train-countdown/
	
	define('NumGoal', 67);
	define('NumTries', 10);
	define('MaxTime', 30);
	
	function deleteOutput(){
		 // Return to the beginning of the line
        echo "\r";
        // Erase to the end of the line
        echo "\033[K";
        // Move cursor Up a line
        echo "\033[1A";
        // Return to the beginning of the line
        echo "\r";
        // Erase to the end of the line
        echo "\033[K";
        // Return to the beginning of the line
        echo "\r";
        // Can be consolodated into
        // echo "\r\033[K\033[1A\r\033[K\r";
	}
	
	
	function numberRight($number){
		if($number > 0 && $number <= 9 && is_numeric($number)){
			return true;
		}else{
			return false;
		}
	}
	
	function tryToNumber( int $maxTries, int $maxTime, int $numGoal, bool $showSum){
		
		$actTries = 0;
		$startTime = time();
		$actTime = time();
		$sumNumbers = 0;
		$pendingTime = $maxTime - ($actTime - $startTime);
		
		echo "Give me 10 numbers in order to achieve the number ". $numGoal  . " with its sum \n";
		
		while($actTries < $maxTries && $actTime - $startTime < $maxTime && $sumNumbers <= $numGoal ){
			
			$newNumber = readline();
			$actTime = time();
			if(numberRight($newNumber)){
				$sumNumbers += (int) $newNumber;
				
				if($showSum == true){	
					echo "Actual Summatory = ".$sumNumbers . "\n";
					$pendingTime = $maxTime - ($actTime - $startTime);
					echo "Pending Time = ". $pendingTime . "\n";
					echo "Actual Tries = ". ($actTries + 1) . "\n";
				}else{
					deleteOutput();
				}
				
				$actTries++;
			}
		}
		
		if($sumNumbers == $numGoal){
			echo "Congratulations!!!\n";
			echo "You have deactivated the boom!!!\n";
		}else{
			echo "Booooooooom!!!!!\n";
		}

	}
	
	function test_02(){
		tryToNumber(NumTries, 999999999, NumGoal, true);
		$newGoal = rand(10,90);
		tryToNumber(NumTries, MaxTime, $newGoal , false);
	}
	test_02();
	
	
?>
