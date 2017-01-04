<?php 

mysql_connect('localhost','root','') or die ('Error connecting to mysql');

mysql_select_db('onlineexam') or die ('Unable to select database!');


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



<?php 

// if (isset($_POST['insert'])) {
// 	$q1 = $_POST['question'];

// 	$a1 = $_POST['option_a'];
// 	$b1 = $_POST['option_b'];
// 	$c1 = $_POST['option_c'];
// 	$d1 = $_POST['option_d'];



// 	echo "1. "."$q1<br> "."a. "."$a1<br> "."b. "."$b1<br> "."c. "."$c1<br> "."d. "."$d1<br>";


// }

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

<form action="" method="POST"> 

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
			<td><input type="submit" name="insert" value="Insert Question"></td>
		</tr>

	</table>

</form>
-------------------------------------------------------------<br>

</body>
</html>