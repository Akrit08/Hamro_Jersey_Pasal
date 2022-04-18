<!-- this page creates the required layout for feedback page-->
<?php
//formFeedback.php
//session start
session_start();

//check sec`u`re key
$secure = $_SESSION['SECURE'];
if ($secure != 'AsDfGhJk!@#1234') {
    die('SECURE test failed.');
}

//check origin
$origin = $_SESSION['ORIGIN'];
if ($origin != "/~u22/submissions/submission06/pages/formFeedback.php") {
    die('ORIGIN test failed.');
}

//global variables
$salutation = $firstNmae = $lastName = "";
$email = $phoneber = "";
$subject = $message = "";

//sanitize and match pattern
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $salutation = sanitized_input($_POST["salutation"]);
    $firstName = sanitized_input($_POST["firstName"]);
    if (!preg_match("/^[A-Z][A-Za-z'-]*$/", $firstName)) {
        die("Bad first name");
    }
    $lastName = sanitized_input($_POST["lastName"]);
    if (!preg_match("/^[A-Z][A-Za-z'-]*$/", $lastName)) {
        die("Bad last name");
    }
    $email = sanitized_input($_POST["email"]);

    if (!preg_match(
        '/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})$/',
        $email
    )) {
        die("Bad e-mail");
    }
    $phone = sanitized_input($_POST["phone"]);
    $phone = !empty($_POST['phone']) ? $_POST['phone'] : "Not given";
    if (!preg_match("/^(\d{3}-)?\d{3}-\d{4}$/", $phone)) {
        die("Bad phone number");
    }
    $subject = sanitized_input($_POST["subject"]);
    $message = sanitized_input($_POST["message"]);
}

/**
 * It sanitizes the data, removes special characters
 */
function sanitized_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//create message that goes to the business
$messageToBusiness = "From: $salutation $firstName $lastName \r\n" .
    "E-mail address: $email\r\n" .
    "Phone number: $phone\r\n" .
    "------------------------\r\n" .
    "Subject: $subject\r\n" .
    "------------------------\r\n" .
    "$message\r\n" .
    "========================\r\n";

//header to business
$headerToBusiness = "From: $email\r\n";
//send mail to the business
mail("u50@mail.cs.smu.ca", $subject, $messageToBusiness, $headerToBusiness);

//create message that goes to the client
$messageToClient =
    "Dear $salutation $lastName: \r\n" .
    "The following message was received from you by Hamro Jersey Pasal:\r\n"
    .
    "========================\r\n" .
    $messageToBusiness .
    "Thank you for your interest and your feedback.\r\n" .
    "From the folks at Hamro Jersey Pasal\r\n" .
    "========================\r\n";

//if the get back from us is check append the given message
if (isset($_POST['reply'])) {
    $messageToClient .=
        "P.S. We will contact you shortly with more information.";
}

//header to the client
$headerToClient = "From: u22@ps.cs.smu.ca\r\n";
//send mail to the client
mail($email, "Re:$subject", $messageToClient, $headerToClient);

//add line breaks
$display = str_replace("\r\n", "\r\n<br>", $messageToClient);

//make html to desplay as confirmation
$display = "<!DOCTYPE  html>
    <html lang='en'>
    <head><meta charset='utf-8'><title>Your Message</title></head>
    <body>
    <code>$display</code>
    </body>
    </html>";
echo $display;

//open feedback.txt to write the feedbacks
$fileVar = fopen("../data/feedback.txt", "a") or
    die("Error:Could not open the log file.");
fwrite(
    $fileVar,
    "\n-----------------------------------------------------------------\n"
)
    or die("Error:Could not write to the log file.");

fwrite($fileVar, $messageToBusiness)
    or die("Error:Could not write to the log file.");
?>