<?php
	/*------STUDENT ID --> STUDENT ID NUMBER--------*/
	$candidatePresident = "";
	if(isset($_SESSION["student_id"])){
		$query = "SELECT * FROM candidates WHERE position='President'";
		$sql = mysqli_query($con,$query);
		$count = mysqli_num_rows($sql);
		if($count >= 1){
			while($rows = mysqli_fetch_array($sql)){
				$id_number = $rows["id_number"];
				$firstname = ucfirst($rows["firstname"]);
				$lastname = ucfirst($rows["lastname"]);
				$mi = ucfirst($rows["mi"]);
				$course = ucfirst($rows["course"]);
				$partylist = ucfirst($rows["partylist"]); 
				$position = ucfirst($rows["position"]);
				$candidatePresident .= '<tr>
								
  			  					<td class="candidate"><img src="images/'.$id_number.'.jpg" width="120" height="120">&nbsp&nbsp&nbsp'.$firstname.' '.$mi.'. '.$lastname.'<br>&nbsp<span class="partylist">('.$partylist.')</td>
     		  					<td class="radio"><input type="radio" name="'.$position.'" value="'									.$id_number.'"></td>
 								 </tr>';
			}
		}
	}


?>
<?php
	/*-------VICE_PRESIDENT INTERNAL----*/
	/*------STUDENT ID --> STUDENT ID NUMBER--------*/
	$candidateVPi = "";
	if(isset($_SESSION["student_id"])){
		$query = "SELECT * FROM candidates WHERE position='Vice-president(internal)'";
		$sql = mysqli_query($con,$query);
		$count = mysqli_num_rows($sql);
		if($count >= 1){
			while($rows = mysqli_fetch_array($sql)){
				$id_number = $rows["id_number"];
				$firstname = ucfirst($rows["firstname"]);
				$lastname = ucfirst($rows["lastname"]);
				$mi = ucfirst($rows["mi"]);
				$course = ucfirst($rows["course"]);
				$partylist = ucfirst($rows["partylist"]); 
				$position = ucfirst($rows["position"]);
				$candidateVPi .= '<tr>
  			  					<td class="candidate"><img src="images/'.$id_number.'.jpg" width="120" height="120">&nbsp&nbsp&nbsp'.$firstname.' '.$mi.'. '.$lastname.'<br>&nbsp<span class="partylist">('.$partylist.')</span></td>
     		  					<td class="radio"><input type="radio" name="'.$position.'" value="'									.$id_number.'"></td>
 								 </tr>';
			}
		}
	}


?>
<?php
	/*-------VICE_PRESIDENT EXTERNAL----*/
	/*------STUDENT ID --> STUDENT ID NUMBER--------*/
	$candidateVPe = "";
	if(isset($_SESSION["student_id"])){
		$query = "SELECT * FROM candidates WHERE position='Vice-president(external)'";
		$sql = mysqli_query($con,$query);
		$count = mysqli_num_rows($sql);
		if($count >= 1){
			while($rows = mysqli_fetch_array($sql)){
				$id_number = $rows["id_number"];
				$firstname = ucfirst($rows["firstname"]);
				$lastname = ucfirst($rows["lastname"]);
				$mi = ucfirst($rows["mi"]);
				$course = ucfirst($rows["course"]);
				$partylist = ucfirst($rows["partylist"]); 
				$position = ucfirst($rows["position"]);	
				$candidateVPe .= '<tr>
  			  					<td class="candidate"><img src="images/'.$id_number.'.jpg" width="120" height="120">&nbsp&nbsp&nbsp'.$firstname.' '.$mi.'. '.$lastname.'<br>&nbsp<span class="partylist">('.$partylist.')</span></td>
     		  					<td class="radio"><input type="radio" name="'.$position.'" value="'									.$id_number.'"></td>
 								 </tr>';
			}
		}
	}


?>
<?php 
	$candidateCouncilors = "";
	if(isset($_SESSION["student_id"])){
		$query = "SELECT * FROM candidates WHERE position='Councilor' ORDER BY RAND()";
		$sql = mysqli_query($con,$query);
		$count = mysqli_num_rows($sql);
		if($count > 1){
			while($rows = mysqli_fetch_array($sql)){
				$id_number = $rows["id_number"];
				$firstname = ucfirst($rows["firstname"]);
				$lastname = ucfirst($rows["lastname"]);
				$mi = ucfirst($rows["mi"]);
				$course = ucfirst($rows["course"]);
				$partylist = ucfirst($rows["partylist"]); 
				$position = $rows["position"];	
				$candidateCouncilors .= '<tr>
  			  					<td class="candidate"><img src="images/'.$id_number.'.jpg" width="120" height="120">&nbsp&nbsp&nbsp'.$firstname.' '.$mi.'. '.$lastname.'<br>&nbsp<span class="partylist">('.$partylist.')</span></td>
     		  					<td class="radio"><input type="checkbox" name="'.$position.'[]" value="'									.$id_number.'"></td>
   										
 										 </tr>';
			}
		}
	}
	
?>