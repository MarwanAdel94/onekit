<?php
  $db_host = '162.159.24.201';
  $db_user = 'u106524071_onekit';
  $db_password = 'Marwan10415';
  $db_db = 'u106524071_onekit';
  

 $conn = mysqli_connect($db_host,$db_user,$db_password,$db_db);
 
 if ($conn->connect_error) {
  echo 'Errno: '.$conn->connect_errno;
  echo '<br>';
  echo 'Error: '.$conn->connect_error;
  exit();
}
