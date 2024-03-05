<?php 
	//Kata 2024-06-26
	/*
	 * Kata 26 per l'especialitat fullstackPHP 25-1-24
	Crea una interfície gràfica que ens permeti representar a una pàgina web la lògica creada anteriorment.
	L'output doncs aquí seria una plana web que faci servir la lògica creada anteriorment.
	Bonus track: Valida adequadament l'aplicació :)*/
	
	
	/*OLD FUNCTIONS:*/
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
	
	
	function selectStudentFromArray($students){

		selectStudentPresentation($students);
		selectStudentShortcut($students);
	}
	
	
	function selectStudent($arrayStudents = array ()){
		//return $arrayStudents[rand(0, count($arrayStudents)-1)];
		
		return str_replace("\n", "", $arrayStudents[rand(0, count($arrayStudents)-1)]);
	}

	function selectStudentPresentation($arrayStudents){
		echo "A en " . selectStudent($arrayStudents) . " li toca fer Masterclass! \n";
	}

	function selectStudentShortcut($arrayStudents = array ()){
		echo "A " . selectStudent($arrayStudents) . " li toca explicar el shortcut de la setmana! \n";
	}
	
	function test01(){
		
		$filePath = "./pupils.json";
		$arrayStudents = json_returnArrayForOldFunction($filePath);
		$student = selectStudentFromArray($arrayStudents);
		echo $student;
	}
	
	//test01();
	
	
	function choseStudentInFile($filePath){
		$arrayStudents = json_returnArrayForOldFunction($filePath);
		$student = selectStudentFromArray($arrayStudents);
		echo $student;
	}
	
	
?>
