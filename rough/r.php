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
				a<input type="checkbox" name="ans[]" value="a">&nbsp &nbsp
				b<input type="checkbox" name="ans[]" value="b">&nbsp &nbsp
				c<input type="checkbox" name="ans[]" value="c">&nbsp &nbsp
				d<input type="checkbox" name="ans[]" value="d"> 
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