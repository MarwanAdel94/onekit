<?php

if(isset($_POST['signup-submit'])) {

require 'dbh.inc.php';



$username = $_POST['uid'];
$email = $_POST['mail'];
$password = $_POST['pwd'];
$passwordRepeat = $_POST['pwd-repeat'];


// to check if the email address is not a fake email .
$api_key = "8e1e777eb9774c4abdb360d48a3e7575";
$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => "https://emailvalidation.abstractapi.com/v1?api_key=$api_key&email=$email",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true
]);
$response = curl_exec($ch);

$data = json_decode($response , true);

if($data['deliverability'] === "UNDELIVERABLE"){
    exit("incorect email address");
}
if($data["is_disposable_email"]["value"] === true) {
    exit("disposable");
}

echo "email address is valid";
//end of checking email address.


if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
   
 header("Location: index.php?error=emptyfields&uid=".$username."&mail=".$email);

exit();

    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: index.php?error=invalidmailuid");
        exit();
    }
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: index.php?error=invalidmail&uid=".$username);
exit();
}
else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: index.php?error=invaliduid&mail=".$email);
exit();
}
else if ($password !== $passwordRepeat){
    header("Location: index.php?error=passwordcheck&uid=".$username."&mail=".$email);
exit();
}
else {

$sql = "SELECT * FROM users WHERE uidUsers=?;";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
    header("Location: index.php?error=sqlerror");
exit();
} else {
    mysqli_stmt_bind_param($stmt, "s", $mailuid);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $resultCheck = mysqli_stmt_num_rows($stmt);
    if( $resultCheck  > 0 ){
        header("Location: index.php?error=usertaken&mail=".$email);
        exit();
    }else{
        $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
    header("Location: index.php?error=sqlerror");
exit();
}else{
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    header("Location: index.php?signup=success");
    exit();
        }
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}else{
    header("Location: index.php");
    exit();
}

