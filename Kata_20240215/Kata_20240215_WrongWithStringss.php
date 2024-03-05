<?php
	function exists(string $subject, string $search_string, &$matches = null): bool{
			
		$exists = preg_match("/".$search_string."/", $subject, $matches, PREG_OFFSET_CAPTURE);
		return $exists;
	}
		
	function checkInput(){
		while(1){
			$line = readline("Give a search string and a character separated by an space in order to check if the character is contained in the first string \n");
			
			$terms = preg_split("/[\s]+/", $line);
			
			if(is_array($terms)){
				if(count($terms) > 2){
					echo "Too many arguments given. The function only works with 2 arguments (separated by one space). \n";
				}else if(count($terms) < 2){
					echo "Too Few arguments given! You must give at least two arguments (separated by one space) \n";
				}else{
					$matches = null;
					$exists = exists($terms[0], $terms[1], $matches);
					
					if($exists == 1){
						echo "The string ". $terms[1]. " exists in the string ". $terms[0] . "\n";
					}else{
						echo "The string ". $terms[1]. " does NOT exists in the string ". $terms[0]. "\n";
					}
					
				}
			}
		}
	}
	
	
	function test_01(){
		checkInput();
	}
