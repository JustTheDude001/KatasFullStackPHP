<?php
	function json_returnArray(string $fileName){
		if(file_exists($fileName)){
			$fileContents = file_get_contents($fileName);
			$pupilsArray = json_decode($fileContents, true);
			return $pupilsArray;
		}else{
			echo "The file does not exists in the system. ";
		
		}
	}
	
	function json_returnArrayForOldFunction(string $fileName){
		if(file_exists($fileName)){
			$fileContents = file_get_contents($fileName);
			$pupilsArray = json_decode($fileContents, true);
			
			foreach($pupilsArray['alumnes'] as $pupil){
				$pupilsArrayOut[]= $pupil['nom'] . $pupil['cognom'];
			}	
			
			return $pupilsArrayOut;
		}else{
			echo "The file does not exists in the system. ";
		
		}
	}
	
	
	function test01(){
		$filePath = "./pupils.json";
		$varAux = json_returnArray($filePath);
		var_dump($varAux);
	}
	function test02(){
		$filePath = "./pupils.json";
		$varAux = json_returnArrayForOldFunction($filePath);
		var_dump($varAux);
	}
	
	
	test01();
	test02();
	
?>
