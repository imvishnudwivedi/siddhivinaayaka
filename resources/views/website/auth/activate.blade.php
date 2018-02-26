<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
 
    <h2>Hello {{$first_name}} {{$last_name}},</h2>
    
    <p>Thank you for registering on kalaavid.com.</p><p>
       One final step to go ahead with kalaavid.com. Use this link to activate your account:</p>

      <p>{{ URL::to('activate_account', array($user_id,$activation_code)) }}</p>

      <p>If you are unable to click the above link, please copy and paste the entire link into your web browser.</p>

      <p>Activation of your account will only allow you login to kalaavid.com</p>

      <p>If you are receiving this message in error or did not register this e-mail address on kalaavid.com, please ignore this email.</p>


      <p>Thank you,
      <br>
    Administrator,<br>
    kalaavid.com </p>
     
  </body>
</html>
