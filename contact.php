<?php 
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$emailfrom = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

$header = "from: ".$emailfrom;
$texto = "voçe Recebeu um Email do".$name.".\n\n".$message;
$mailTo = "joaonota23@gmail.com";
	mail($mailTo, $subject, $texto,$header);
	header("location:index.html");
}

 ?>
