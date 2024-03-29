<?php
	
	
	/*
	 * Kata 28 per l'especialitat fullstackPHP 15-2-24

		L'altre dia, xerrant amb el vostre company @Aleixito sobre l'exercici 3 del tema de PHP Arrays, va sorgir el següent diàleg:

		- Existeix alguna funció a PHP per dir si una xifra concreta existeix dins d'un nombre? - Potser si...o potser pocs picar una funció tu.

		Doncs això....

		Crea una funció que, donat un nombre enter i una xifra, ens digui si existeix la xifra dins del nombre enter. No podeu fer servir strings per representar ni l'enter ni la xifra.

		Input

			1453 3
			1443 7
			3772341 7

		Output

			La xifra 3 existeix dins el nombre 1453.
			La xifra 7 NO existeix dins el nombre 1443.
			La xifra 7 existeix dins el nombre 3772341.
	*/

	function existsInt(int $longInt, int $searchInt): bool{

		
		$over = 0;
		while($over == 0){
			if( $longInt % 10 == $searchInt){
				return 1;
			}else{
				$longInt = $longInt / 10;
				if($longInt <= 10){
					$over = 1;
					return 0;
				}
			}
		}
	
	}
	
	
	
	function checkInputInt(){
		while(1){
			$line = readline("Give a search string and a character separated by an space in order to check if the character is contained in the first string: \n");
			$terms = preg_split("/[\s]+/", $line);
			
			if(is_array($terms)){
				if(count($terms) > 2){
					echo "Too many arguments given. The function only works with 2 arguments (separated by one space). \n";
				}else if(count($terms) < 2){
					echo "Too Few arguments given! You must give at least two arguments (separated by one space) \n";
				}else if(is_numeric($terms[0]) == False || is_numeric($terms[1]) == False){
					echo "Both of the arguments MUST be integers! \n";
				}else if($terms[0] < 0 || $terms[1] < 0){
					echo "Both of the arguments MUST be POSITIVE integers! \n";
				}else{
					//WARNING  - The function does not work for Negative Numbers!!!
					try{
						$valOne = intval($terms[0],10);
						$valTwo = intval($terms[1],10);
						
						$matches = null;
						$exists = existsInt($valOne, $valTwo);

						if($exists == 1){
							echo "The string ". $valTwo. " exists in the string ". $valOne . "\n";
						}else{
							echo "The string ". $valTwo. " does NOT exists in the string ". $valOne. "\n";
						}
						
					}catch (Exception $e){
						echo "The two arguments given must be Integers \n";
					}
				}
			}
		}
	}
	
	
	
	function test_02(){
		checkInputInt();
	}
	
	test_02();
