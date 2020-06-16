<form method="post">
 <p>Login : <input type="text" name="login" /></p>
 <p>Mot de passe : <input type="password" name="password" /></p>
 <p>OTP : <input type="text" name="otp" /></p>
 <p><input type="submit" value="OK"></p>
</form>

<hr>

<?php 
require_once('otphp/lib/otphp.php');
$totp = new \OTPHP\TOTP("ORSXG5A=", array('interval'=>30));
$now = $totp->now();

if (isset($_POST['login']) && isset($_POST['password']))
    if ($_POST['login'] == "toto" && $_POST['password'] == "toto")
        echo ("Login ok");
        if ($now == $_POST['otp'])
            echo ("2FA login success");
       