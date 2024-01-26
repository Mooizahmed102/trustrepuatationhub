<?php

require "vendor/autoload.php";

$robo = 'info@Trustreputationhub.com';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if($_SERVER['REQUEST_METHOD'] != "POST"){
    die("This request method is not supported for this request");
}

if(!isset($_REQUEST['name']) ||
!isset($_REQUEST['email'])||
!isset($_REQUEST['phone']) ||
!isset($_REQUEST['brief'])
)
{
    die("Name,email,phone,brief is required for the request");
}
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$brief = $_REQUEST['brief'];

//lead work here 
$message = "<h1>Request to start</h1>";
$message.= "<table width='100%' border='1'>";
$message.= "<tbody>";
$message.= "<tr><td colspan='5' align='center' style='font-size: 25px;font-weight: 800;'>User Details</td></tr>";
$message.= "<tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>brief</th>
        </tr>";
$message.= "<tr>
            <td>$name</td>
            <td>$email</td>
            <td>$phone</td>
            <td>$brief</td>
        </tr>";
$message.= "</tbody>";
$message.= "</table>";
$developmentMode = true;
$mailer = new PHPMailer($developmentMode);

try {
    $mailer->SMTPDebug = 2;
    $mailer->isSMTP();

    if ($developmentMode) {
    $mailer->SMTPOptions = [
        'ssl'=> [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        ]
    ];
    }


    $mailer->Host = 'smtp.gmail.com';
    $mailer->SMTPAuth = true;
    $mailer->Username = 'info@Trustreputationhub.com';
    $mailer->Password = 'hlbdbgjzuhymrxnf';
    $mailer->SMTPSecure = 'ssl';
    $mailer->Port = 465;

    $mailer->setFrom('info@Trustreputationhub.com', 'Sign Up Lead');
    $mailer->addAddress('info@Trustreputationhub.com', 'Query Alert');

    $mailer->isHTML(true);
    $mailer->Subject = 'Query';
    $mailer->Body = $message;

    $mailer->send();
    $mailer->ClearAllRecipients();
    echo "MAIL HAS BEEN SENT SUCCESSFULLY";
    header("location:/thank-you/");
    

} catch (Exception $e) {
    echo "EMAIL SENDING FAILED. INFO: " . $mailer->ErrorInfo;
}
