
<html>
<body>
	<form method="post" action=# enctype="multipart/form-data">
		<input type="file" id="jsonFile" name="jsonFile">
		<input type="submit" value="click">	
		
	</form>
	<?php
		require 'Kata_20240126.php';
	   if($_SERVER['REQUEST_METHOD'] =='POST')
	   {	
		   if(isset($_FILES['jsonFile']['tmp_name'])){
			   
			   $file = $_FILES['jsonFile']['tmp_name'];
			  
			   echo choseStudentInFile($file); 
		  }
	   }
	?>
    </body>
</html>


