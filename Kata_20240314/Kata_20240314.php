<?php
//https://github.com/CloudSalander/kata-train-countdown/

	/*
	//Class timer to count the time
	class Timer extends Thread{
		
		public $prevTime = null;
		public $actTime = null;
		public $time_s = null;
		public $countDeact = false;
		
		function __construct($time_s = 0){
			$this->prevTime = time();
			$this->time_s = $time;
		}
		
		public function run(){
			
			$this->actTime = time();
			while($this->actTime - $this->prevTime < $time_s && $this->countDeact == false){
				$this->actTime = time();
				echo $this->i;
				sleep(1);
			}
			if($this->countDeact == false){
				echo "Boooom!!!!";
			}else{
				echo "The boom has been deactivated on time!!!!";
			}
		}
	
	
	}
	
	function test_01(){
		$timer = new Timer(10);
	}
	test_01();
	*/
	
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
	
	
	function tryToNumber($maxTries, $maxTime,$numGoal , $showSum){
		
		$actTries = 0;
		$startTime = time();
		$actTime = time();
		$sumNumbers = 0;
		$pendingTime = $maxTime - ($actTime - $startTime);
		
		echo "Give me 10 numbers in order to achieve the number ". $numGoal  . " with its sum \n";
		while($actTries < $maxTries && $actTime - $startTime < $maxTime && $sumNumbers <= $numGoal ){
			$newNumber = readline();
			$actTime = time();
			if($newNumber > 0 && $newNumber <= 9 && is_numeric($newNumber)){
				$sumNumbers += (int) $newNumber;
				
				if($showSum == true){	
					echo "Actual Summatory = ".$sumNumbers . "\n";
					$pendingTime = $maxTime - ($actTime - $startTime);
					echo "Pending Time = ". $pendingTime . "\n";
					echo "Actual Tries = ". ($actTries + 1) . "\n";
				}else{
					echo "                          \r\r";
					deleteOutput();
				}
				
				$actTries++;
			}
		}
		
		if($sumNumbers == NumGoal){
			echo "Congratulations!!!\n";
			echo "You have deactivated the boom!!!\n";
		}else{
			echo "Booooooooom!!!!!\n";
		}

	}
	
	function test_02(){
		tryToNumber(NumTries, 999999999, NumGoal, true);
		$newGoal = rand(10,90);
		tryToNumber(NumTries, MaxTime,$newGoal , false);
	}
	test_02();
	
	
?>
