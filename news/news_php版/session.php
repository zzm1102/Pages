<?php
session_start();
if (!empty($_POST['openid'])){
	$_SESSION['openid']=$_POST['openid'];
}else {
	$_SESSION['openid']="openid is null";
}

?>