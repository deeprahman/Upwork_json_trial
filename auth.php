<?php
 use classes\auth_class\Auth;
 require_once "classes/auth_class/Auth.php";
 require_once  "jason_data.php";

 if (empty($_POST['username']) && empty($_POST['password'])){
     header("location:.");
     exit();
 }

$auth_inst = new Auth($_POST['username'],$_POST['password'],$data['logins'],$data['password'],$data['admins'],$data['adminPassword']);

// Auth class instantiated
$indiccator = $auth_inst->matchPass();

//User not found, reload the directory
if ($indiccator[1]===NULL){
    header("location:.");
    exit();
}
session_start();
$_SESSION["is_admin"] =& $indiccator[0];
$_SESSION["loginId"] =& $indiccator[1];

header("location:.");
exit();

