<?php


function kata( array $arrayOne, array $arrayTwo, bool $boolVar): array{
	
	$outputArray = [];
	
	if($boolVar == True){
		echo "Returning common elements in both arrays \n";
		
		for ($i=0;$i<count($arrayOne);$i++){
			for ($b=0;$b<count($arrayTwo);$b++){
				if ($arrayOne[$i] == $arrayTwo[$b]){
					$outputArray[] = $arrayOne[$i];
					// With OR without Break
					// Behaivour more reliable without
					// Faster With
					//Repeats values without BREAK, NO repeats values With BREAK
					//break;
				}
			}
		}
		
		//Missing some from second array
		
		
		
	}else{
		echo "Returning NOT common elements in both arrays \n";
		
		for ($i=0;$i<count($arrayOne);$i++){
			$twoInOne = False;
			for ($b=0;$b<count($arrayTwo);$b++){
				if ($arrayOne[$i] == $arrayTwo[$b]){
					$twoInOne = True;
					break;
				}
			}
			if($twoInOne == False){
				$outputArray[] = $arrayOne[$i];
			}
		}
		
		for ($i=0;$i<count($arrayTwo);$i++){
			$twoInOne = False;
			for ($b=0;$b<count($arrayOne);$b++){
				if ($arrayOne[$b] == $arrayTwo[$i]){
					$twoInOne = True;
					break;
				}
			}
			if($twoInOne == False){
				$outputArray[] = $arrayTwo[$i];
			}
		}
	
	}
	return $outputArray;
}


function test_01(){
	$array_01 = array(1, 3 , 4, "ta", "noTa", 182, "crakc", "blabla", 1);
	$array_02 = array(1, 3 , 4, "ta", "noTa", 182, "row");

	echo var_dump(kata($array_01, $array_02, True));
	echo var_dump(kata($array_01, $array_02, False));
}


function test_02(){
	$array_01 = array(1, 3 , 4, "ta", "noTa", 182, "crakc", "blabla", 1, 23);
	$array_02 = array(1, 3 , 4, "ta", "noTa", 182, "row", "loreal", 23, 4, "ta");

	echo var_dump(kata($array_01, $array_02, True));
	echo var_dump(kata($array_01, $array_02, False));
}


function test_03(){
	$array_01 = array("hol", 1 , "allfid");
	$array_02 = array(3 , 4, "ta", "kooo", "testing" , 14141);

	echo var_dump(kata($array_01, $array_02, True));
	echo var_dump(kata($array_01, $array_02, False));
}

function test_04(){
	$array_01 = array(3 , 4, "ta", "kooo", "testing" , 14141);
	$array_02 = array(3 , 4, "ta", "kooo", "testing" , 14141);

	echo var_dump(kata($array_01, $array_02, True));
	echo var_dump(kata($array_01, $array_02, False));
}


function test_05(){
	$array_01 = array(3 , 4, "ta", "kooo", "testing" , 14141);
	$array_02 = array(3 , 4, "ta", "kooo", "testing" , 14141);

	//echo var_dump(kata($array_01, $array_02, True));
	echo var_dump(kata($array_01, $array_02, False));
}
//test_01();
//test_02();
//test_03();
//test_04();
test_04();
?>
