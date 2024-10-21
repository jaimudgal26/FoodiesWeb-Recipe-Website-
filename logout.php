<?php 
require_once('config.php');
session_start();
session_destroy();
mysqli_query($conn,"DELETE FROM `tbl_login` WHERE `id`='".$_REQUEST['id']."'");
header('location:layout1.php?msg=3'); ?>