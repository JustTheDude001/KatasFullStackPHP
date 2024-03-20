<?php

	class Fighter{
		public string $name;
		public int $life;
		public int $attack;
		public int $defense;
		
		
		private function checkRange($value){
			if($value>=1 && $value <=10){
				return true;
			}else{
				return false;
			}
		}
		
		
		function __construct($attack, $defense, $name = ""){
			$this->life = 10;
			$this->name = $name;
			if($this->checkRange($attack)){
				$this->attack = $attack;
			}else{
				echo "The attack of the fighter is not in the possible range 1 to 10 \n";
				//$this->__destruct();
				echo "The attack will be set to a random number in the range 1 to 10 \n";
				$this->attack = rand(1,10);
				
			}
			
			if($this->checkRange($defense)){
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
				echo "Whose Name is: ". $attacker->name ."\n";
			}else{
				echo $defenser->name . " life = ".$defenser->life . "\n";
			}
			
		}
	
	}
	
	//With Static Methode
	function test04(){
		$fighter_01 = new Fighter(4,10, "Asterix");
		$fighter_02 = new Fighter(1,8, "Obelix");
		//$fighter_03 = new Fighter(10,10);
		
		//$fight_01 = new Battle($fighter_01, $fighter_02);
		while($fighter_01->life >0 && $fighter_02->life >0 ){
			$rand = rand(0,1);
			if($rand == 1){
				Battle::attackFirstToSecondStatic($fighter_01, $fighter_02);
			}else{
				Battle::attackFirstToSecondStatic($fighter_02, $fighter_01);
			}

		}
		
	}
	
	test04();
?>
