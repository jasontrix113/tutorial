<?php
$db = mysqli_connect('127.0.0.1','root','','tutorial');
if(mysqli_connect_errno()) {
  echo 'Database connection failed with following errors: '. mysqli_connect_error();
  die();
}
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/tutorial/config.php';
require_once BASEURL.'helpers/helpers.php';
require_once BASEURL.'vendor/autoload.php';

$cart_id = '';
if(isset($_COOKIE[CART_COOKIE])){
  $cart_id = sanitize($_COOKIE[CART_COOKIE]);
}
