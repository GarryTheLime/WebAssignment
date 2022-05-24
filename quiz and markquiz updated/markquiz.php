<!-- Begin Processing -->
<?php
//define variables and set to empty
$firstNameErr = $lastNameErr = $studentNumberErr = $categoryErr = $textAnswerErr = $protocolErr = $appNameErr = $favcolorErr = "";
$firstName = $lastName = $studentNumber = $category = $textAnswer = $protocol = $appName = $favcolor = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if(empty($_POST["firstName"])) {
			$firstNameErr = "Please enter a valid name";
		}
		else {
			$firstName = test_input($_POST["firstName"]);
			if(!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
				$nameErr = "Only letters and white spaces allowed";
			}
		}
	
	if(empty($_POST["lastName"])) {
		$lastNameErr = "Please enter a valid name";
	}
	else {
		$lastName = test_input($_POST["lastName"]);
		if(!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
			$nameErr = "Only letters and white spaces allowed";
		}
	}
	
	if(empty($_POST["studentNumber"])) {
        $studentNumberErr = "Please enter a valid student number";
    }
    else {
        $studentNumber = test_input($_POST["studentNumber"]);
        if(!preg_match("/^[0-9]*$/",$studentNumber)) {
            $studentNumberErr = "Only numbers allowed";
        }
    }

    if(empty($_POST["category"])) {
        $categoryErr = "Please enter a valid answer for 'Which of these platforms are the streaming media?' ";
    }
    else {
        $category = test_input($_POST["category"]);
    }

    if(empty($_POST["textAnswer"])) {
        $textAnswerErr = "Please enter a valid answer for 'What is the main difference between streaming and live streaming?' ";
    }
    else {
        $textAnswer = test_input($_POST["textAnswer"]);
    }

    if(empty($_POST["protocol"])) {
        $protocolErr = "Please enter a valid answer for 'What is the most used in streaming media protocol?' ";
    }
    else {
        $protocol = test_input($_POST["protocol"]);
    }

    if(empty($_POST["appName"])) {
        $appNameErr = "Please enter a valid answer for 'The most popular subscription streaming services in the world is' ";
    }
    else {
        $appName = test_input($_POST["appName"]);
    }

    if(empty($_POST["favcolor"])) {
        $favcolorErr = "Please enter a valid answer for 'Select the theme color of the Twitch' ";
    }
    else {
        $favcolor = test_input($_POST["favcolor"]);
    }
	}
	
	function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>

