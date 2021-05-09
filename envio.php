<?PHP
$sender = 'inscripcionposgrado2020@gmail.com';
$recipient = 'inscripcionposgrado2020@gmail.com';

$subject = "php mail test";
$message = "php test message";
$headers = 'From:' . $sender;

if (mail($recipient, $subject, $message, $headers))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}
?>