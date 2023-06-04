<?php

if(isset($_POST["reset-request-submit"])){

$selector = bin2hex(random_bytes(8));

//token to make sure its a valid user
$token = random_bytes(32);

// the link that will be sent to the user by email (write the website url here)
$url = "www.onekitgroup.com/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

$expiers = date("U") + 1800;

require 'dbh.inc.php';

$userEmail = $_POST["email"];

$sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)){
echo "there was an error";
exit();
}else{
    mysqli_stmt_bind_param($stmt, "s" , $userEmail);
    mysqli_stmt_execute($stmt);
}

$sql = "INSERT INTO pwdReset, pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpiers) VALUES (?, ?, ?, ?);";

$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)){
echo "there was an error";
exit();
}else{
    $hashedToken = password_hash($token, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss" , $userEmail, $selector,   $hashedToken, $expiers);
    mysqli_stmt_execute($stmt);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
// creating the email 
$to = $userEmail;

$subject = "reset your password for onekitgroup";

$message = '<p> we recieved a password reset request. the link to reset your password is belw , if you did not make this request you can ignore this email </p>';

// using .= means you are 
$message .= '<p> here is your password reset link: </br>';
$message .= '<a href="' .$url . '">' .$url . '</a></p>';

$hedears = "from: onekit <marwanadel94@hotmail.com>\r\n" ;
$hedears .= "reply-to: marwanadel94@hotmail.com\r\n ";
$hedears .= "content-type: text/html\r\n";

mail($to, $subject, $message, $hedears);
hedear("location: reset-password.php?reset=success");

}else {
    header("location index.php");
}