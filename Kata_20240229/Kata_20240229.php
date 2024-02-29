<?php
	
	class Count{
		public int $limit;
		public int $start;
		
		public function __construct($start, $limit){
			$this->start = $start;
			$this->limit = $limit;
		}
		public function count($start = 0){
			$numberToPrint = $this->start;
			$this->start ++;
			
			if($this->start <= $this->limit){
				$this->count($this->start);
			}else{
				echo "\n";
			}
			echo $numberToPrint . " ";
		}
	
	}
	
	
	function test_count(){
		$countObj = new Count(0,5);
		$countObj->count();
		echo "\n";
		
		$countObj = new Count(0,3);
		$countObj->count();
		echo "\n";
	}
	
	class Fibonacci{
		public int $limit;
		public int $start = 1;
		public  $numbers = array(1);
		public int $counter = 0;
		
		public function __construct($limit){
			$this->limit = $limit;			
		}
		public function fibonacci($counter = 0){
			
			if($this->numbers[$this->counter] >= $this->limit){
				return;
			}
			
			if($this->counter < 1){
				echo $this->numbers[0] . " ";
				$this->counter++;
				$this->numbers[] = $this->numbers[$this->counter - 1];
			}else{
				$this->counter++;
				$this->numbers[] = $this->numbers[$this->counter - 2] + $this->numbers[$this->counter - 1];;
			}
			
			echo $this->numbers[$this->counter]  . " ";
			
			if($this->numbers[$this->counter] <= $this->limit){
				$this->fibonacci($this->counter);
			}else{
				echo "\n";
			}
		}
	
	}
	
	
	function test_fibo(){
		$countFibo= new Fibonacci(5);
		$countFibo->fibonacci();
		echo "\n";
		
		$countFibo = new Fibonacci(3);
		$countFibo->fibonacci();
		echo "\n";
	}
	
	
	
	
	class Factorial{
		public int $limit;
		public int $start = 1;
		public  $numbers = array(1);
		public int $counter = 0;
		
		public function __construct($limit){
			$this->limit = $limit;			
		}
		public function factorial($counter = 0, $factRes = 1){
			
			if($counter == 0){
				return;
			}else{
				
				$factRes = $factRes * $counter;
				echo $factRes . " ";
				$counter --;
				return $this->factorial($counter, $factRes);
			}
			
			
		}
	
	}
	
	
	function test_factorial(){
		$countFibo= new Factorial(5);
		$countFibo->factorial(5);
		echo "\n";
		
		$countFibo = new Factorial(3);
		$countFibo->factorial(9);
		echo "\n";
	}
	
	
	test_count();
	echo "\n\n\n";
	
	test_fibo();
	
	test_factorial();

?>
