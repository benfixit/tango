<?php
// define variables and set to empty values
$name = $email = $subject = $message = "";

$response = [
    'status' => 0,
    'message' => 'Your message could not be sent. Please try again'
];

if (isset($_POST['submit-button'])) {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $subject = test_input($_POST["subject"]);
    $message = test_input($_POST["message"]);

    if(empty($name) || empty($email)){
        $response['message'] = 'Some fields were left blank. Please fill up required fields.';
        toJSONAndExit($response);
    }

    if(!filter_var($email, FILTER_SANITIZE_EMAIL)){
        $response['message'] = 'Please enter a valid email address.';
        toJSONAndExit($response);
    }

    $to = "info@alanandgrant.com";

    $message = "<p>".$message."</p>";

    $header = "From:".$email." \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";

    $mailResponse = mail ($to,$subject,$message,$header);

    if($mailResponse == true) {
        $response['status'] = 1;
        $response['message'] = 'Thank you for your mail. We will get back to you soon.';
        toJSONAndExit($response);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function toJSONAndExit($array) {
    echo json_encode($array);
    exit();
}
