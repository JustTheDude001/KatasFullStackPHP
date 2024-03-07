<?php

	class Fighter{
		public int $life;
		public int $attack;
		public int $defense;
		
		function __construct($attack, $defense){
			$this->life = 10;
			if($attack >= 1 && $attack <= 10){
				$this->attack = $attack;
			}else{
				echo "The attack of the fighter is not in the possible range 1 to 10 \n";
				//$this->__destruct();
				echo "The attack will be set to a random number in the range 1 to 10 \n";
				$this->attack = rand(1,10);
				
			}
			
			if($defense >= 1 && $defense <= 10){
				$this->defense = $defense;
			}else{
				echo "The defense of the fighter is not in the possible range 1 to 10 \n";
				//$this->__destruct();
				echo "The defense will be set to a random number in the range 1 to 10 \n";
				$this->defense = rand(1,10);
			}
			
			echo "Fighter was created succesfully\n";
		}
	
	}
	
	
	class Battle{
		public Fighter $fighter01;
		public Fighter $fighter02;
		
		public function __construct($fighter01, $fighter02){
			$this->fighter01 = $fighter01;
			$this->fighter02 = $fighter02;		
		}
		
		public function attackF01(){
			
			if($this->fighter01->attack == $this->fighter02->attack){
				$prob = rand(1,2);
				if($prob == 1){
					$damage = ($this->fighter01->attack - $this->fighter02->defense);
					if($damage <= 0 ){
						$damage = 1;
					}
					$this->fighter02->life -= $damage;
				}
					
			}else if($this->fighter01->attack > $this->fighter02->attack){
				
				$prob = rand(1,10);
				if($prob <= 7){
					$damage = ($this->fighter01->attack - $this->fighter02->defense);
					if($damage <= 0 ){
						$damage = 1;
					}
					$this->fighter02->life -= $damage;
				}
				
				
			}else if($this->fighter01->attack < $this->fighter02->attack){
				$prob = rand(1,10);
				if($prob <= 3){
					$damage = ($this->fighter01->attack - $this->fighter02->defense);
					if($damage <= 0 ){
						$damage = 1;
					}
					$this->fighter02->life -= $damage;
				}
			}
			
		}
		
		public function attackF02(){
			
			if($this->fighter01->attack == $this->fighter02->attack){
				$prob = rand(1,2);
				if($prob == 1){
					$damage = ($this->fighter02->attack - $this->fighter01->defense);
					if($damage <= 0 ){
						$damage = 1;
					}
					$this->fighter01->life -= $damage;
				}
					
			}else if($this->fighter02->attack > $this->fighter01->attack){
				
				$prob = rand(1,10);
				if($prob <= 7){
					$damage = ($this->fighter02->attack - $this->fighter01->defense);
					if($damage <= 0 ){
						$damage = 1;
					}
					$this->fighter01->life -= $damage;
				}
				
				
			}else if($this->fighter02->attack < $this->fighter01->attack){
				$prob = rand(1,10);
				if($prob <= 3){
					$damage = ($this->fighter02->attack - $this->fighter01->defense);
					if($damage <= 0 ){
						$damage = 1;
					}
					$this->fighter01->life -= $damage;
				}
			}
			
		}
		
		
		public function attackFirstToSecond($attacker, $defenser){
			
			if($attacker->attack == $defenser->attack){
				$prob = rand(1,2);
				if($prob == 1){
					$damage = ($attacker->attack - $defenser->defense);
					if($damage <= 0 ){
						$damage = 1;
					}
					$defenser->life -= $damage;
				}
					
			}else if($attacker->attack > $defenser->attack){
				
				$prob = rand(1,10);
				if($prob <= 7){
					$damage = ($attacker->attack - $defenser->defense);
					if($damage <= 0 ){
						$damage = 1;
					}
					$defenser->life -= $damage;
				}
				
				
			}else if($attacker->attack < $defenser->attack){
				$prob = rand(1,10);
				if($prob <= 3){
					$damage = ($attacker->attack - $defenser->defense);
					if($damage <= 0 ){
						$damage = 1;
					}
					$defenser->life -= $damage;
				}
			}
			
			if($defenser->life <= 0){
				echo "The winner is the attacker that attacked this turn!!! No name specified so... Incognita...";
			}
			
		}
		
		public static function attackFirstToSecondStatic(&$attacker, &$defenser){
			
			if($attacker->attack == $defenser->attack){
				$prob = rand(1,2);
				if($prob == 1){
					$damage = ($attacker->attack - $defenser->defense);
					if($damage <= 0 ){
						$damage = 1;
					}
					$defenser->life -= $damage;
				}
					
			}else if($attacker->attack > $defenser->attack){
				
				$prob = rand(1,10);
				if($prob <= 7){
					$damage = ($attacker->attack - $defenser->defense);
					if($damage <= 0 ){
						$damage = 1;
					}
					$defenser->life -= $damage;
				}
				
				
			}else if($attacker->attack < $defenser->attack){
				$prob = rand(1,10);
				if($prob <= 3){
					$damage = ($attacker->attack - $defenser->defense);
					if($damage <= 0 ){
						$damage = 1;
					}
					$defenser->life -= $damage;
				}
			}
			
			if($defenser->life <= 0){
				echo "The winner is the attacker that attacked this turn!!! No name specified so... Incognita...\n";
			}else{
				echo "Defenser life = ".$defenser->life . "\n";
			}
			
		}
		
		
		
	
	}
	
	
	function test01(){
		$fighter_01 = new Fighter(0,10);
		$fighter_02 = new Fighter(1,1);
		$fighter_03 = new Fighter(10,10);
	}
	
	function test02(){
		$fighter_01 = new Fighter(0,10);
		$fighter_02 = new Fighter(1,1);
		$fighter_03 = new Fighter(10,10);
		
		$fight_01 = new Battle($fighter_01, $fighter_02);
		$fight_01->attackF01();
		$fight_01->attackF02();	
	}
	
	function test03(){
		$fighter_01 = new Fighter(0,10);
		$fighter_02 = new Fighter(1,1);
		$fighter_03 = new Fighter(10,10);
		
		$fight_01 = new Battle($fighter_01, $fighter_02);
		$fight_01->attackFirstToSecond($fighter_01, $fighter_02);
		$fight_01->attackFirstToSecond($fighter_02, $fighter_01);	
	}
	
	//With Static Methode
	function test04(){
		$fighter_01 = new Fighter(4,10);
		$fighter_02 = new Fighter(1,8);
		//$fighter_03 = new Fighter(10,10);
		
		//$fight_01 = new Battle($fighter_01, $fighter_02);
		Battle::attackFirstToSecondStatic($fighter_01, $fighter_02);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);	
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);	
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);	
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);	
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
		Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);	
	}
	
	/*
	test01();
	test02();
	test03();*/
	test04();
?>
