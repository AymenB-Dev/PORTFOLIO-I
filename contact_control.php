<?php
session_start();
require './lang_config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Control</title>
  <link rel="stylesheet" href="./style/css/contact_control.css">
</head>
<body>

<?php 
  
  use PHPMailer\PHPMailer\PHPMailer; 
  use PHPMailer\PHPMailer\Exception; 

  
  require './mailer/vendor/autoload.php'; 
  require './mailer/verifyEmail.class.php';

  function nameValidation($name)
  {
     $name_regex =  "/^[a-zA-Z][a-zA-Z ]*$/"; //alphabet and space only 
     if (!preg_match($name_regex,$name) or empty($name)) 
       return false;
     else
       return true;
  }

  function emailChecker($email)
  {
      $mailChecker= new VerifyEmail();
      $mailChecker->setStreamTimeout(20);
      $mailChecker->Debug=FALSE;
      $mailChecker->Debugoutput='html';
      
      $mailChecker->setEmailFrom($email);

      if($mailChecker->check($email))
      {
        return 0; //email exist
      }

      else if($mailChecker->isValid($email))
      {
        return 1 ; //email valid but doesn't exist
      }

      else 
      {
        return 2 ; // email not valid and doesn't exist
      }
  }

  //get the form elements
  $name=$_POST["name"];
  $email=$_POST["email"];
  $subject=$_POST["subject"];
  $msg=$_POST["message"];
  $phoneNum=$_POST["phone"];

  try 
  {
      //check form data form
      if(!(nameValidation($name)  and !empty($subject) and !empty($msg)))
      {
        //throw and exception if the data is invalid
        throw new Exception($lang["invalidDataError"]);
      }

      //check if the email exist or not 
      if(emailChecker($email)==1 or emailChecker($email)==2)
      {
         throw new Exception($lang["emailExistError"]);
      }
      
      


      //send the form data to a personal email using gmail SMTP SERVER
      
      $mail = new PHPMailer;

      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->SMTPDebug = 0;                                        
      $mail->isSMTP();   
      $mail->Debugoutput = 'html';                                          
      $mail->Host = "tls://smtp.gmail.com"; // use gmail SMTP SERVER
      $mail->SMTPAuth   = true;                              
      $mail->Username   = 'web.project.server@gmail.com';  //SMTP USER            
      $mail->Password   = 'smtpEmail1234';   //SMTP PASSWORD               
      $mail->SMTPSecure = 'tls';                               
      $mail->Port       = 587 ;//TLS required;   
      $mail->SMTPAuth = true;


      $mail->setFrom($email, $name." ".$email);     //email where the message will be sent        
      $mail->addAddress($mail->Username); //the receiver email 

      $mail->isHTML(true);                                   
      $mail->Subject = $subject; //email subject
      $mail->Body    = $msg."<br><br>".$lang["phone"]." : ".$phoneNum;  //email content
      

      //if the email isn't sent
      if(!($mail->send()))
      {
        echo
        '
          <script>
          alert(" '.$lang["failureMsg"].'");
          window.location.href="./contact.php";
          </script>
        ';
      } 
      //if the email is sent successfully
      else
      {
        echo
        '
          <script>
          alert(" '.$lang["successMsg"].'");
          </script>
        ';

       echo 
       '
          <table>
            <tr>
              <th>'.$lang["name"].'</th>
              <td>'.$name.'</td>
            </tr>

            <tr>
              <th>'.$lang["email"].'</th>
              <td>'.$email.'</td>
            </tr>


            <tr>
              <th>'.$lang["phone"].'</th>
              <td>'.$phoneNum.'</td>
            </tr>

            <tr>
              <th>'.$lang["subject"].'</th>
              <td>'.$subject.'</td>
            </tr>

            <tr>
              <th>'.$lang["message"].'</th>
              <td>'.$msg.'</td>
            </tr>


          </table>
       ';
      }
  }
  catch(Exception $e)
  {
        
    echo
    '
      <script>
      alert(" '.$e->getMessage().'");
      window.location.href="./contact.php";
      </script>
    ';
  }
  
?> 
</body>
</html>