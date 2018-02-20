<?php
//print_r($_POST);

$message = '<table class="table" align="center" width="75%" border="1">
    <tbody align="center">
	  <tr>
	  	<td colspan="2" align="center">
	  		<h3>Trade Enquiry Information</h3>
		</td>
	  </tr>
      <tr>
        <td align="left">User Name</td>
        <td align="left">'.$_POST['username'].'</td>
      </tr>
      <tr>
        <td align="left">Firm Name</td>
        <td align="left">'.$_POST['firmname'].'</td>
      </tr>	  
      <tr>
        <td align="left">Email </td>
        <td align="left">'.$_POST['useremail'].'</td>
      </tr>
      <tr>
        <td align="left">Contact No.</td>
        <td align="left">'.$_POST['userphone'].'</td>
      </tr>
      <tr>
        <td align="left">Address</td>
        <td align="left">'.$_POST['useraddress'].'</td>
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
$mail->setFrom($_POST['useremail'], $_POST['firmname']);
$mail->addAddress('info@satpurabio.com', 'Satpura Bio');
$mail->Subject = 'Contact Enquiries';
$mail->msgHTML($message);
$mail->AltBody = 'This is a plain-text message body';
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

echo "Enquiry has been submitted successfully";
?>


 
