<?php 

	if(isset($_POST["submit"])){
		$student_id = mysqli_real_escape_string($con,$_SESSION["student_id"]);
		$President = mysqli_real_escape_string($con,$_POST["President"]);
		$vicePresidentInternal = mysqli_real_escape_string($con,$_POST["Vice-president(internal)"]);
		$vicePresidentExternal = mysqli_real_escape_string($con,$_POST["Vice-president(external)"]);
		$Councilor = $_POST["Councilor"];
			
		for($i =0; $i < 7; $i++){
			
			if(empty($Councilor[$i])){
				$Councilor[$i] = "abstain";
			}
		}
		
		if(empty($student_id)){
			header("location: index.php");
		}else {
			$sql = "INSERT INTO votes(voter,president,vicepresidentinternal,vicepresidentexternal,councilor1,councilor2,councilor3,councilor4,councilor5,councilor6,councilor7,date) VALUES ('$student_id','$President','$vicePresidentInternal','$vicePresidentExternal','$Councilor[0]','$Councilor[1]','$Councilor[2]','$Councilor[3]','$Councilor[4]','$Councilor[5]','$Councilor[6]',Now())";
			$query = mysqli_query($con,$sql);
			//insert kung nka vote na
			$sql2 ="UPDATE students SET vote = 'yes' WHERE ID_number = '$student_id'";
			$query2 = mysqli_query($con,$sql2);
			
			if($query){
				unset($_SESSION["student_id"]);
				unset($_SESSION["student_login"]);
				header("Location: Voted.php");
			}else {
				echo 'error';
			}
		}
	}

?>