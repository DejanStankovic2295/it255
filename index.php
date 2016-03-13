<!DOCTYPE HTML> 
<html>
<head>
	<meta charset="UTF-8">
</head>
<body> 

	<?php
	$name = $index = $email = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	   if (empty($_POST["name"])) {
	     $name = "";
	   } else {
	     $name = test_input($_POST["name"]);
	   }
	   
	   if (empty($_POST["index"])) {
	     $index = "";
	   } else {
	     $index = test_input($_POST["index"]);
	   }
	     
	   if (empty($_POST["email"])) {
	     $email = "";
	   } else {
	     $email = test_input($_POST["email"]);
	   }
	}

	function test_input($data) {
	   $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	?>

	<h2>IT255-DZ01 Dejan Stanković 2295</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
	   Ime: <input type="text" name="name" required>
	   <span class="error">* </span>
	   <br><br>
	   Broj indeksa: <input type="text" name="index" required>
	   <span class="error">* </span>
	   <br><br>
	   Email: <input type="text" name="email">
	   <span class="error"></span>
	   <br><br>
	   <input type="submit" name="submit" value="Pošalji"> 
	</form>

	<?php
	echo "<h2>Vaši podaci:</h2>";
	echo "Ime: ".$name;
	echo "<br>";
	echo "Broj indeksa: ".$index;
	echo "<br>";
	echo "Email adresa: ".$email;
	?>

</body>
</html>