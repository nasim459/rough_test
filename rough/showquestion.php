<!DOCTYPE html>
<html>
<head>
	<title>Show Question</title>
</head>
<body>
<h2>Show your questions........</h2>

<table>

	<tr>
		<td>1.</td>
		<td>what is your favourite colour, choice your options?</td>
	</tr>

	<tr>
		<td></td>
		<td>Answer: Choose Single
			<input type="radio" name="single"> or Multiple
 			<input type="checkbox" name="multiple">
		</td>
	</tr>

	<tr>
		<td><input type="checkbox" name="a" value="">a. </td>
		<td> &nbspAfhjk</td>
	</tr>

	<tr>
		<td><input type="checkbox" name="a" value="">b. </td>
		<td> &nbspRdfasd</td>
	</tr>

	<tr>
		<td><input type="checkbox" name="a" value="">c. </td>
		<td>&nbspYdfasd</td>
	</tr>

	<tr>
		<td><input type="checkbox" name="a" value="">d. </td>
		<td>&nbspEdfas</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Next"></td>
	</tr>


</table>----------------------------------------------------------------------------<br>


<?php 

if (isset($_POST['res'])) {

	$q1 = $_POST['q1'];

	$a1 = $_POST['a1'];
	$b1 = $_POST['b1'];
	$c1 = $_POST['c1'];
	$d1 = $_POST['d1'];
	//$ans = $_POST['ans'];
	
}

  ?>

<table>

	<tr>
		<td>1.</td>
		<td><?php if(isset($q1)){ echo $q1; } ?></td>
	</tr>

	<tr>
		<td></td>
		<td>Answer: Choose Single
			<input type="radio" name="single"> or Multiple
 			<input type="checkbox" name="multiple">
		</td>
	</tr>

	<tr>
		<td><input type="checkbox" name="a" value="<?php echo $a1; ?>">a. </td>
		<td> &nbspAfhjk</td>
	</tr>

	<tr>
		<td><input type="checkbox" name="a" value="<?php echo $b1; ?>">b. </td>
		<td> &nbspRdfasd</td>
	</tr>

	<tr>
		<td><input type="checkbox" name="a" value="<?php echo $c1; ?>">c. </td>
		<td>&nbspYdfasd</td>
	</tr>

	<tr>
		<td><input type="checkbox" name="a" value="<?php echo $d1; ?>">d. </td>
		<td>&nbspEdfas</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Next"></td>
	</tr>


</table>




</body>
</html>