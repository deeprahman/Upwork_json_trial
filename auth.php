<?php
 use classes\auth_class\Auth;
 require_once "classes/auth_class/Auth.php";
 require_once  "jason_data.php";

 if (empty($_POST['username']) && empty($_POST['password'])){
     header("location:.");
 }

