<?php
require_once __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;

$accountSid = 'AC11c1048e2f8c3d9514ae4242721560e0';
$authToken = '6e319d0ae08e0d2c5a43c16c3050953e';
$twilioNumber = '+14406893437';
$toNumber = '+918104760633';

$name = $_POST['name'];
$number = $_POST['number'];
$message = $_POST['message'];

$client = new Client($accountSid, $authToken);

$client->messages->create(
  $toNumber,
  array(
    'from' => $twilioNumber,
    'body' => "From $name 
    Phone number:$number
    $message",
  )
);

?>

<?php 
header("Location: http://localhost/MyProject/Project/index.php");
exit();
?>