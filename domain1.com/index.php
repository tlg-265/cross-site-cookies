<?php

echo getenv('ENVIRONMENT') . ' is working!';

if (isset($_POST['email'])) {

  $arr_cookie_options = array (
    'expires' => time() + 1*60*60,    // expire in 1 hour
    'path' => '/',
    'domain' => '.example.com',       // leading dot for compatibility or use subdomain
    'secure' => true,                 // or false
    'httponly' => true,               // or false
    'samesite' => 'None',             // None || Lax  || Strict
  );

  $email = $_POST['email'];
  setcookie('email', $email, $arr_cookie_options);

}

?>

<br />

<pre style="background-color:#e6e6e6;display:inline-block;padding:10px;margin:20px 0;">
Troubleshooting:
https://www.domain1.com.local
https://www.domain2.com.local
https://www.domain3.com.local
</pre>

<form method="POST">
  <table>
    <tbody>
      <tr>
        <td>Email:</td>
        <td><input type="text" name="email" value="bill.gates@microsoft.com" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" value="Submit" /></td>
      </tr>
    </tbody>
  </table>
</form>
