<?php
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <noreply@example.com>' . "\r\n";

$to = "youremail@example.com";
$subject = 'New enquiry received';

$message = "Hi,<br><br>";
$message .= "New enquiry received please find the data below:<br>";
$message .= "First Name: {$_REQUEST['first_name']}<br>";
$message .= "Last Name: {$_REQUEST['last_name']}<br>";
$message .= "Email: {$_REQUEST['email']}<br>";
$message .= "Phone Number: {$_REQUEST['phone_number']}<br>";
$message .= "Message: {$_REQUEST['message']}<br><br>";
$message .= "Thank You";

if(mail($to, $subject, $message, $headers)){
    echo '<div class="mt-2 alert alert-success alert-dismissible fade show" role="alert">
      Email sent successfully.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
else {
    echo '<div class="mt-2 alert alert-danger alert-dismissible fade show" role="alert">
  An error occurred please try again.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>