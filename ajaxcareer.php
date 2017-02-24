<?php
$msg = '';
$message = '<table class="table" align="center" width="75%" border="1">
    <tbody align="center">
	  <tr>
	  	<td colspan="2" align="center">
	  		<h3>Career Resume Information</h3>
		</td>
	  </tr>
      <tr>
        <td align="left">User Name</td>
        <td align="left">'.$_POST['username'].'</td>
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
    </tbody>
  </table>';
  
if (array_key_exists('userfile', $_FILES)) 
{
    $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['userfile']['name']));
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) 
	{
        require 'PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->setFrom($_POST['useremail'], $_POST['username']);
        $mail->addAddress('sarathegopal@gmail.com', 'John Doe');
        $mail->Subject = 'Resume';
        $mail->msgHTML($message);
        // Attach the uploaded file
        $mail->addAttachment($uploadfile, 'My uploaded file');
        if (!$mail->send()) {
            $msg .= "Mailer Error: " . $mail->ErrorInfo;
        } else {
            $msg .= "Message sent!";
        }
    } 
	else 
	{
        $msg .= 'Failed to move file to ' . $uploadfile;
    }
echo "Resume has been submitted successfully";
}
?>