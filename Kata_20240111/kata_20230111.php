<?php


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

function arrayStudentsFromFile($filePath){
	
	$file = fopen($filePath, "r");
	
	while(($line = fgets($file) )!= null){
		$arrayStudents [] = $line;
	}
	
	fclose($file);
	
	return $arrayStudents;
}


function selectStudentFromArray(){
	//Nombres generados con https://generadordenombres.online/
	$students = array(
		"Carlos Jose Oliva",
		"Maria Consuelo Escribano",
		"Noah Correa",
		"Milagros Albert",
		"Maria Jesus Arnau",
		"Elvira Teruel"
	);

	selectStudentPresentation($students);
	selectStudentShortcut($students);
}

function selectStudentFromFile(){

	$studentsArr2 = arrayStudentsFromFile("./studentsList.txt");
	selectStudentPresentation($studentsArr2);
	selectStudentShortcut($studentsArr2);
}


function consoleListStudents(){
	
	echo "Write the names of the students one by one:";
	echo "Press just enter to end";
	$counter = 0;
	do{
		$inputCon = readline();
		
		if($counter == 0){
			if($inputCon != "" and $inputCon != "END" and $inputCon != "FINISH"){
				$students [] = $inputCon;
				$counter++;
			}
		}
		if($counter != 0){
			if($inputCon != "" and $inputCon != "END" and $inputCon != "FINISH"){
				$students [] = $inputCon;
				$counter++;
			}
		}
		
		
	}while($counter == 0 or ($inputCon != "" and $inputCon != "END" and $inputCon != "FINISH"));
	
	
	return $students;
}

function selectStudentsFromConsole(){
	
	
	$students = consoleListStudents();
	
	selectStudentPresentation($students);
	selectStudentShortcut($students);

}


echo "\n";
//selectStudentFromArray
selectStudentFromArray();
echo "\n";
//selectStudentFromFile
selectStudentFromFile();
echo "\n";
//selectStudentsFromConsole()
selectStudentsFromConsole();


?>
