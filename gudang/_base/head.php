<?php
ini_set("display_errors",0);
session_start();
if(!isset($_SESSION['nik'])){
	die('Anda belum login');
}
if($_SESSION['level']!='1'){
	die('Page Error !');
}
include "../../koneksi.php"
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PT Globalnine Indonesia</title>
  <link rel="shortcut icon" href="../_controller/img/global.png">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../_controller/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../_controller/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../_controller/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../_controller/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../_controller/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../_controller/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
