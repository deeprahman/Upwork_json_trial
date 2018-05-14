<?php
//Start a session
session_start();
require_once "jason_data.php";


//if (isset($_SESSION['loginId'])) {
//    $key =& $_SESSION['loginId'];
//    if ($_SESSION['is_admin']== -1){
//        $fistname =& $data['logins'][$key];
//        $lastname =& $data['lastName'][$key];
//        $name = $fistname." ".$lastname;
//        include "views/report.html.php";
//        exit();
//    }
//    $name=$data['admins'][$key]." (Admin)";
//    include "views/report.html.php";
//    exit();
//
//}
//
//include "views/form.html.php";
include "views/upload.html.php";


