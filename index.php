<!DOCTYPE html>
<html>
	<head>
		<title>
			PHP Form
		</title>
	</head>
	<body>
		<form action="index.php" method="post">
			<table>
				<tr>
					<td>name</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>E-mail Address</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Subject</td>
					<td><input type="text" name="subject"></td>
				</tr>
				<tr>
					<td>Your Gender</td>
				</tr>
				<tr>
					<td>Male:<br/>Female:<br/></td>
					<td><input type="radio" value="male" name="gender"><br/><input type="radio" value="female" name="gender"></td>
				</tr>
				<tr>
					<td>
						Skills:
					</td>
					<td>
						<input type="checkbox" name="skill1" value="HTML">HTML <br />
						<input type="checkbox" name="skill1" value="PHP">PHP <br />
						<input type="checkbox" name="skill1" value="CSS">CSS <br />
						<input type="checkbox" name="skill1" value="JAVASCRIPT">JAVASCRIPT <br />
					</td>
				</tr>
				<tr>
					<td>Country</td>
					<td>
						<select name="country">
							<option> Select a country </option>
							<option value="us"> America </option>
							<option value="dz"> Algeria </option>
							<option value="rs"> Russia </option>
						</select>
					</td>
				</tr>		
				<tr>
					<td><input type="hidden" name="vad"></td>
					<td><input type="submit" name="submit"></td>
				</tr>
			</table>
		</form>
	</body>
</html>

<?php 
	if(isset($_POST['vad'])){
		if(empty($_POST['name']))
			echo 'The name field is empty';
		echo "The name ".$_POST['name'];
		echo "The name ".$_POST['email'];
		echo "The name ".$_POST['subject'];
		echo "The name ".htmlspecialchars($_POST['comment']);
	}
?>