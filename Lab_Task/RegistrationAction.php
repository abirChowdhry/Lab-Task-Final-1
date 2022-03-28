<!DOCTYPE html>
<html>
<head>
	<title>Registration Action</title>
</head>
<body>

	<?php 

		if ($_SERVER["REQUEST_METHOD"] === "POST") 
		{

			function test($data) {
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

			$fname = test($_POST['fname']);
			$lname = test($_POST['lname']);
			$gender = test($_POST['gender']);
			$username = test($_POST['username']);
			$pass = test($_POST['pass']);
			$conpass = test($_POST['conpass']);

		$fnameerr = $lnameerr = $gendererr = $usernameerr =
		$passerr = $conpasserr = $matcherr = "";


        if (empty($_POST["fname"])) {
        $fnameerr = "First Name Required!";
        echo $fnameerr;
        }

		else if (empty($_POST["lname"])) {
		$lnameerr = "Last Name Required!";
		echo $lnameerr;
		}

		else if (empty($_POST["gender"])) {
		$gendererr = "Gender Required!";
		echo $gendererr;
		}

	    else if(empty($_POST["username"])){
	    $usernameerr = "Username Required!";
	    echo $usernameerr;
		}

	    else if(empty($_POST["pass"])){
	    $passerr = "Password Required!";
	    echo $passerr;
		}

	    else if(empty($_POST["conpass"])){
	    $conpasserr = "Confirm Password Required!";
	    echo $conpasserr;
		}

	    else if(($_POST["conpass"]) !== ($_POST["pass"])){
	    $matcherr = "Password & Confirm Password Doesn't Match!";
	    echo $matcherr;
		}

		else 
		{
			echo "Name: " . $_POST["fname"] . $_POST["lname"];
			echo "<br><br>";
            echo "Gender: ". $_POST["gender"]; 
            echo "<br><br>";
            echo "Username: ". $_POST["username"]; 
            echo "<br><br>";
            echo "Password: ". $_POST["pass"]; 
            echo "<br><br>";
		}

		}
		
	    else 
	    {
		echo "No valid request";
	    }
	?>

</body>
</html>