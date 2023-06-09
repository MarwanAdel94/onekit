<?php

if(isset($POST["reset-password-submit"])){

$selector = $_POST["selector"];
$validator = $_POST["validator"];
$password = $_POST["pwd"];
$passwordRepeat = $_POST["pwd-repeat"];

if(empty($password) || empty($passwordRepeat)){
    header("location: signup.php");
    exit();
    }else if($password != $passwordRepeat){
        header("location: signup.php?newpwd=empty");
        exit();
    }   

$currentDate = date("U");

require 'dbh.in.php';

$sql = "SELECT * FROM pwdReset WHERE pwdResetSelector=? AND pwdResetExpiers >= ?";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
echo "there was an error";
exit();
}else{
    mysqli_stmt_bind_param($stmt, "ss" , $selector, $currentDate);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
if(!$row = mysqli_fetch_assoc($result)){
echo "you need to re-submit your reset request";
exit();
 } else {

$tokenBin = hex2bin($validator);
$tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);

if($tokenCheck === false){
    echo "you need to re-submit your reset request";
    exit();
} else if($tokenCheck === true) {

$tokenEmail = $row['pwdResetEmail'];

$sql = "SELECT * FROM users WHERE emailUsers=?;";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
echo "there was an error";
exit();
}else{
    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if(!$row = mysqli_fetch_assoc($result)){
    echo "there was an error!";
    exit();
     } else {

        $sql = "UPDATE users SET pwdUsers=? WHERE emailUsers=?";
        $stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
echo "there was an error";
exit();
}else{
    $newPwdHash = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $tokenEmail);
    mysqli_stmt_execute($stmt);

    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "there was an error";
        exit();

                }else{
                    $mysqli_stmt_param($stmt, "s", $tokenEmail);
                    $mysqli_stmt_execute($stmt);
                    header("location: signup.php?newpwd=passwordupdated");
                }
              }
            }
          }
       }
     }
  }

}else{
    header("location: index.php?newpwd=pwdnotsame");
}




