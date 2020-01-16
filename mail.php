<!DOCTYPE html>
<html>
<head>
	<title>send email</title>
</head>
<body>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<div class="container">
		
		<h1>welcome</h1>
		
		<form method="post" action="mail.php">
		<div class="form-group">
			<label>Recipent name</label>
			<input type="text" name="rname" class="form-control">
		</div>
		<div class="form-group">
			<label>subject</label>
			<input type="text" name="subject" class="form-control">
		</div>
		<div class="form-group">
			<label>body</label>
			<input type="text" name="body" class="form-control">
		</div>
		
		<br>
		<div class="form-group">
			<input class="form-control" type="submit" name="submit" value="sent mail"> <br>
			
		</div>
	</div>
</form>
</body>
</html>
<?php 
if (isset($_POST['submit'])){

		$rec = $_POST['rname'];
		$sub = $_POST['subject'];
		$body = $_POST['body'];
		mail($rec,$sub,$body);

		echo "mail sent success";

}else{

	echo "mail not sent ";

}

?>  