<?php

function fullNameSplit($fullName){
  $separat=explode(" ",$fullName);
  return $separat;
}

function encryptPass($pwd){
  $encriptada=password_hash("$pwd",PASSWORD_DEFAULT);
  return $encriptada;
}

function emailValidation($email){
  $mail=filter_var($email,FILTER_VALIDATE_EMAIL);
  return $mail;
}
function pwdValidation($pwd,$pwdConfirm){
  if (strcmp($pwd,$pwdConfirm) == 0)
    return true;
  return false;
}

?>
