<?php 

include("config.php");

					// insert validation with insert data in database
	if (isset($_POST['insert'])) {
		
		try{
			
			if(empty($_POST['option_a'])){
				throw new Exception("Option a can't be empty?");
			}
			if(empty($_POST['option_b'])){
				throw new Exception("Option b can't be empty?");
			}
			if(empty($_POST['option_c'])){
				throw new Exception("Option c can't be empty?");
			}
			if (empty($_POST['option_d'])) {
				throw new Exception("Option d can't be empty?");
			}


			
			$ans="";
			if(isset($_POST['ans1']))
			{
				$ans=$ans.'a';
			}
			if(isset($_POST['ans2']))
			{
				$ans=$ans.'b';
			}
			if(isset($_POST['ans3']))
			{
				$ans=$ans.'c';
			}
			if(isset($_POST['ans4']))
			{
				$ans=$ans.'d';
			}



			$result = mysql_query("insert into examtable (question, option_a, option_b, option_c, option_d, ans) 
				values('$_POST[question]', '$_POST[option_a]', '$_POST[option_b]', '$_POST[option_c]',  '$_POST[option_d]', '$ans') ");

			$success_message = "Data has been inserted";


		}

		catch(Exception $e){
			$nas = $e->getMessage();
		}

	}

 ?>




<!DOCTYPE html>
<html>
<head>
	<title>Online Exam</title>
</head>
<body>
<h2>Make your Questions........</h2>


<?php 

	if(isset($success_message)){ echo $success_message; }
	if(isset($nas)){ echo $nas; }

 ?>

<form action="" method="POST"> <!-- form strt insert question from this form. -->

	<table>
		<tr>
			<td>Question: </td>
			<td><input type="text" name="question" placeholder="  Write your question?"></td>
		</tr>

		<tr>
			<td style="text-align:right;">a</td>
			<td><input type="text" name="option_a"></td>
		</tr>

		<tr>
			<td style="text-align:right;">b</td>
			<td><input type="text" name="option_b"></td>
		</tr>

		<tr>
			<td style="text-align:right;">c</td>
			<td><input type="text" name="option_c"></td>
		</tr>

		<tr>
			<td style="text-align:right;">d</td>
			<td><input type="text" name="option_d"></td>
		</tr>

		<tr>
			<td>Answer:</td>
			<td>
				a<input type="checkbox" name="ans1" value="a">&nbsp &nbsp
				b<input type="checkbox" name="ans2" value="b">&nbsp &nbsp
				c<input type="checkbox" name="ans3" value="c">&nbsp &nbsp
				d<input type="checkbox" name="ans4" value="d"> 
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="insert" value="Insert Question"></td>	<!-- insert your question -->
			<td><input type="submit" name="show" value="Show Question"></td>	<!-- show your question -->
		</tr>

	</table>

</form><!-- form end insert -->
---------------------------------------------------------------------<br>





<table>		<!-- table start..... Show your all data -->
<?php 

if (isset($_POST['show'])) {

	$serial = 0;
	$e=0;
	
	$result = mysql_query("select * from examtable ");
		while ($row = mysql_fetch_array($result)){

			$serial++;
			$e = "----------------------------------------------------------------";


			?>

	<tr>
		<td><b><?php echo $serial; ?></b></td>
		<td><b><?php echo $row['question'] ?></b></td>
	</tr>

	<tr>
		<td></td>
		<td>Answer: Choose Single
			<input type="radio" name="single"> or Multiple
 			<input type="checkbox" name="multiple">
		</td>
	</tr>

	<tr>
		<td><input type="checkbox" name="a" value="<?php echo $row['option_a'] ?>">a. </td>
		<td>&nbspAfhjk</td>
	</tr>

	<tr>
		<td><input type="checkbox" name="a" value="<?php echo $row['option_b'] ?>">b. </td>
		<td>&nbspRdfasd</td>
	</tr>

	<tr>
		<td><input type="checkbox" name="a" value="<?php echo $row['option_c'] ?>">c. </td>
		<td>&nbspYdfasd</td>
	</tr>

	<tr>
		<td><input type="checkbox" name="a" value="<?php echo $row['option_d'] ?>">d. </td>
		<td>&nbspEdfas</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="button" name="result" value="Answer: <?php echo $row['ans'] ?>"></td>
	</tr>

	<tr>
		<td></td>
		<td><?php echo $e; ?></td>
	</tr>
		
		<?php
		}
}

 ?>

</table><!-- table end..... Show your all data -->




</body>
</html>