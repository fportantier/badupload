<?php

  error_reporting( E_ALL );
  ini_set('display_errors', 1);
  ini_set('display_startup_errors',1);
  ini_set('display_errors',1);
  ini_set('html_errors',1);
  error_reporting(-1);

  require_once 'vendor/autoload.php';

  if(isset($_FILES['image'])){
    $errors= array();
    $file_name =$_FILES['image']['name'];
    $file_tmp =$_FILES['image']['tmp_name'];
      
    move_uploaded_file($file_tmp,"files/".$file_name);
    header("Location: ".$_SERVER['HTTP_REFERER']);
    die();
  }
?>
