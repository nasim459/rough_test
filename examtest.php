<?php 
include("config.php");

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Online Exam</title>
</head>
<body>
<h2>Make your Questions........</h2>


<form action="" method="POST"> <!-- form strt insert question from this form. -->
	<table>
		<tr>
			<td></td>
			<td><input type="submit" name="insert" value="Hide Question"></td>	<!-- hide your question -->
			<td><input type="submit" name="show" value="Show Question"></td>	<!-- show your question -->
		</tr>
	</table>
</form><!-- form end insert -->
---------------------------------------------------------------------<br>



<?php 

include("config.php");
		

		if (isset($_POST['ansform'])) {
			
			echo "<h2>Your Answer given below..........</h2>";
			$mark=0;
			for($i=1;$i<=$_POST['serial'];$i++){
			
				$ans="";

				if(isset($_POST['ans_a'.$i]))
				{
					$ans=$ans.'a';
				}
				if(isset($_POST['ans_b'.$i]))
				{
					$ans=$ans.'b';
				}
				if(isset($_POST['ans_c'.$i]))
				{
					$ans=$ans.'c';
				}
				if(isset($_POST['ans_d'.$i]))
				{
					$ans=$ans.'d';
				}
				//echo "<b>$sl</b>" .  ". " . $_POST['question' . $i] . "<br> Ans: " . $ans . "<br>";
				if($ans==$_POST['co'.$i]){
					$mark=$mark+1;
				}
				$ansch[$i]=$ans;
			}


				?>
				Total Question <?php echo $_POST['serial'] ?> <br>
				You Score <?php echo $mark ?> <br><br>
				Check you ans : <br>
				.................................<br><br>

				<?php
					for($i=1;$i<=$_POST['serial'];$i++){
						if($_POST['co'.$i]==$ansch[$i]){
							echo $i.". ".$_POST['question' . $i]." <span style='color: green;font-size: 20px; '><b>Right</b></span> <br>";
						}else{
							echo $i.". ".$_POST['question' . $i]." <span style='color: red; font-size: 20px; '><b>wrong</b></span> <br>";
						}
					}

echo "<br>"."--------------"."<br>";



		}	//end isset function

// for ($i=1; $i <= $n; $i++) { 
// 	print_r($count);
// 	//echo $i."=".
// }

// echo "<br>";



/*$result = mysql_query("select * from examtable ");
		$s_id=0;
		while ($row = mysql_fetch_array($result)){


			$s_id++;
			$c_ans = $row['ans']."<br>";
			echo $s_id;
			echo $c_ans;
		}*/





 ?>




<?php 


if (isset($_POST['show'])) {
?> 

<form action="" method="POST">
<table>		<!-- table start..... Show your all data -->

<?php
	$serial = 0;
	$e=0;
	
	$result = mysql_query("select * from examtable ");
		while ($row = mysql_fetch_array($result)){

			$serial++;
			$e = "----------------------------------------------------------------";


			?>

	<tr>
		<td><b><?php echo $serial; ?></b></td>
		<td>
			<b><?php echo $row['question'] ?></b>
			<input type="hidden" name="question<?php echo $serial; ?>" value="<?php echo $row['question'] ?>">
			<input type="hidden" name="co<?php echo $serial; ?>" value="<?php echo $row['ans'] ?>">
				
		</td>
	</tr>
	<tr>
		<td><input type="checkbox" name="ans_a<?php echo $serial; ?>" value="a">a. </td>
		<td><?php echo $row['option_a'] ?></td>
	</tr>

	<tr>
		<td><input type="checkbox" name="ans_b<?php echo $serial; ?>" value="b">b. </td>
		<td><?php echo $row['option_b'] ?></td>
	</tr>

	<tr>
		<td><input type="checkbox" name="ans_c<?php echo $serial; ?>" value="c">c. </td>
		<td><?php echo $row['option_c'] ?></td>
	</tr>

	<tr>
		<td><input type="checkbox" name="ans_d<?php echo $serial; ?>" value="d">d. </td>
		<td><?php echo $row['option_d'] ?></td>
	</tr>
	<tr>
		<td></td>
		<td><?php echo $e; ?></td>
	</tr>
		
		<?php

		}
		
?>
		</table><!-- table end..... Show your all data -->
		
	<input type="hidden" name="serial" value="<?php echo $serial; ?>">
	<input type="Submit" name="ansform" value="Answers Submit">
</form>
		<?php
}

 ?>



</body>
</html>