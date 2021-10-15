<!doctype>

<html>
	<head>
		<title>Email</title>
		<link rel="stylesheet" href="styles.css">
		<style>
			#main {
				margin: 10px 300px;
				border: 6px inset grey;
				padding: 10px 40px;
			}
	</style>
</head>
	<body>   
            <?php
$firstName = $_REQUEST["fn"];
$lastName = $_REQUEST["ln"];
$emailAddress = $_REQUEST["eaddr"];
$dayPhone = $_REQUEST["dphone"];
$homePhone = $_REQUEST["hphone"];
$streetAddress = $_REQUEST["saddr"];
$city = $_REQUEST["city"];
$state = $_REQUEST["state"];
$zip = $_REQUEST["zip"];
$comments = $_REQUEST["comm"];


// use wordwrap() if lines are longer than 70 characters
$comments = wordwrap($comments,50,"\r\n");

$content = $firstName . " " . $lastName . "<br>";
$content .= "Email: " . $emailAddress . "<br>";
$content .= "Day Phone: " . $dayPhone . "<br>";
$content .= "Home Phone: " . $homePhone . "<br>";
$content .= $streetAddress . "<br>";
$content .= $city . ", " . $state . " " . $zip . "<br>";
$content .= $comments;
echo $content;

$content = "Message sent at " . date('m/d/Y H:i:s') . "\n";
$content .= $firstName . " " . $lastName . "\n";
$content .= "Email: " . $emailAddress . "\n";
$content .= "Day Phone: " . $dayPhone . "\n";
$content .= "Home Phone: " . $homePhone . "\n";
$content .= $streetAddress . "\n";
$content .= $city . ", " . $state . " " . $zip . "\n";
$content .= $comments;

// send email
mail($emailAddress, "Please Contact Me", $content);
?>

    <div id="main">
			<h1>Thank you for your interest.</h1>
			<h2>An email has been sent to Shifty Mike.</h2>
		</div>
	</body>
</html>
