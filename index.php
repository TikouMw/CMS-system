<!DOCTYPE html>
<html>
	<head>
		<title>
			PHP Form
		</title>
	</head>
	<body>
		<form  method="post">
			<table>
				<tr>
					<td>name</td>
					<td><input type="text" name="1"></td>
				</tr>
				<tr>
					<td>age</td>
					<td><input type="number" name="2"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="vad"></td>
					<td><input type="submit" name=""></td>
				</tr>
			</table>
		</form>
	</body>
</html>

<?php 
	if(isset($_POST['vad'])){
		echo $_POST['1'].' '.$_POST['2'];
	}
	echo $_SERVER['HTTP_USER_AGENT'];
?>