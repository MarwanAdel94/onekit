<?php
session_start();
?>

<main>
<div>
    <section>
        <h1>reset your password</h1>
<p>an e-mail will be send to you with instructions on how to reset your password.</p>
<form action="reset-request.inc.php" method="post">
<input type="text" name="email" placeholder="enter your e-mail address">
<button type="submit" name="reset-request-submit">recive new password by email.</button>
</form>
<?php
if(isset($_POST["reset"])){
if($_GET["reset"] == "success"){
echo '<p> check your email </p>';
 }
}
?>
    </section>
</div>

</main>