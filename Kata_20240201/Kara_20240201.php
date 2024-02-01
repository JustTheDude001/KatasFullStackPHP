<?php
//Kata 2024 - 02 - 01 -- CATAN

	class Player{
	
		public string $name = "";
		public int $wood_amount = 0;
		public int $wool_amount = 0;
		public int $cereals_amount = 0;
		public int $clay_amount = 0;
		public int $metal_amount = 0;
		public int $development_card_amount = 0;
		
		public int $road_amount = 0;
		public int $town_amount = 0;
		
		function __construct(string $name){
				$this->name = $name;
		}
		
		
		function setResources($wood_amount, $wool_amount, $cereals_amount, $clay_amount, $metal_amount){
			$this->wood_amount = $wood_amount;
			$this->wool_amount = $wool_amount;
			$this->cereals_amount = $cereals_amount;
			$this->clay_amount = $clay_amount;
			$this->metal_amount = $metal_amount;
		}
		function addResources($wood_amount, $wool_amount, $cereals_amount, $clay_amount, $metal_amount){
			$this->wood_amount += $wood_amount;
			$this->wool_amount += $wool_amount;
			$this->cereals_amount += $cereals_amount;
			$this->clay_amount += $clay_amount;
			$this->metal_amount += $metal_amount;
		}
		
		
		function build_road(){
			if($this->wood_amount >= 1 and $this->clay_amount >=1){
				$this->wood_amount--;
				$this->clay_amount -- ;

				$this->road_amount ++;

				echo "The player " . $this->name . " has YES built a road!\n"; 
			}else{
				echo "The player " . $this->name . " has NOT the needed resources to build a road!\n"; 
			}
		}
		
		function build_town(){
			if($this->wood_amount >= 1 and $this->clay_amount >=1 and $this->cereals_amount >=1 and $this->wool_amount >=1){
				$this->wood_amount--;
				$this->clay_amount -- ;
				$this->wool_amount--;
				$this->cereals_amount -- ;

				$this->town_amount ++;

				echo "The player " . $this->name . " has YES built a town!\n"; 
			}else{
				echo "The player " . $this->name . " has NOT the needed resources to build a town!\n"; 
			}
		}
		
		function build_city(){
			if($this->cereals_amount >= 2 and $this->metal_amount >= 3){
				$this->cereals_amount = $this->cereals_amount  - 2 ;
				$this->metal_amount = $this->metal_amount - 3 ;

				$this->road_amount ++;

				echo "The player " . $this->name . " has YES built a city!\n"; 
			}else{
				echo "The player " . $this->name . " has NOT the needed resources to build a city!\n"; 
			}
		}
		
		
		function buyDevelopmentCard(){
			
			
			if($this->cereals_amount >= 1 and $this->wool_amount >=1 and $this->metal_amount >=1){
				$this->cereals_amount--;
				$this->wool_amount -- ;
				$this->metal_amount -- ;

				$this->development_card_amount ++;

				echo "The player " . $this->name . " has YES bougth a development card!\n"; 
			}else{
				echo "The player " . $this->name . " has NOT the needed resources to buy a development card!\n"; 
			}
		}
		
	}


	function test01(){
		$player_01 = new Player("Jose");
		$player_02 = new Player("Katerina");
		
		$player_02->setResources(4,4,4,4,4);
		$player_02->build_road();
		$player_02->build_road();
		$player_02->build_road();
		$player_02->build_road();
		$player_02->build_road();
		
		
		$player_01->setResources(4,4,4,4,4);
		$player_01->build_road();
		$player_01->build_town();
	}
	
	test01();

?>
