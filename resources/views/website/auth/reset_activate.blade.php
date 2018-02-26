<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
 
    <h2>Hello {{$first_name}} {{$last_name}},</h2>
    
    <p>We assume that you by intention clicked Forgot Password </p><p>
      Click the below link to reset your password:</p>

      <p>{{ URL::to('reset_password_activate_account', array($user_id,$persist_code)) }}</p>

      <p>If you are unable to click the above link, please copy and paste the entire link into your web browser.</p>

       <p>If you are receiving this message in error or did not register this e-mail address on kalaavid.com, please ignore this email.</p>


      <p>Thank you,
      <br>
    Administrator,<br>
    kalaavid.com </p>
     
  </body>
</html>
