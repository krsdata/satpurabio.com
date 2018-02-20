<?php
//print_r($_POST);

$message = '<table class="table" align="center" width="75%" border="1">
    <tbody align="center">
	  <tr>
	  	<td colspan="2" align="center">
	  		<h3>Contact Enquiry Information</h3>
		</td>
	  </tr>
      <tr>
        <td align="left">User Name</td>
        <td align="left">'.$_POST['username'].'</td>
      </tr>
      <tr>
        <td align="left">Email </td>
        <td align="left">'.$_POST['user_email'].'</td>
      </tr>
      <tr>
        <td align="left">Contact No.</td>
        <td align="left">'.$_POST['user_phone'].'</td>
      </tr>
      <tr>
        <td align="left">Message</td>
        <td align="left">'.$_POST['message'].'</td>
      </tr>	  
    </tbody>
  </table>';

require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSendmail();
$mail->setFrom($_POST['user_email'], $_POST['username']);
$mail->addAddress('info@satpurabio.com', 'Satpura Bio');
$mail->Subject = 'Contact Enquiries';
$mail->msgHTML($message);
$mail->AltBody = 'This is a plain-text message body';
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

echo "Contact Enquiry has been submitted successfully";
?>




 



 

