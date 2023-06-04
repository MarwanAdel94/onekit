<?php
require "login.php";
?>

<main>
<div>
    <section>

<?php
$selector = $GET["selector"];
$validator = $GET["validator"];

if(empty($selector) || empty($validator)){
echo "could not validate your request";
}else{
    if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false){
?>

<form action="reset-password.inc.php" method="post">
<input type="hidden" name="selector" value="<?php echo $selector?>" >
<input type="hidden" name="validator" value="<?php echo $validator?>" >
<input type="password" name="pwd" placeholder="enter a new password.." >
<input type="password" name="pwd-repeat" placeholder="repeat new password.." >
<button type="submit" name="reset-password-submit">reset password</button>
</form>


<?php

    }
}
?>
    </section>
</div>

</main>