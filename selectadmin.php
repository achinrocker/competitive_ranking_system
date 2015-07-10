<?php
ob_start();
session_start();
$admin=$_POST['admin'];
$pword=$_POST['pword'];
$admin=mysql_real_escape_string($admin);
#echo 'on select.php'.$value;
/*if($admin&&$pword)
{
	if($admin=="coder"&&$pword=="albert"){
		setcookie("Admin",$admin, time()+3600*24);
	}else{
		header('Location:invalid.php');
	}
}
	else
	{   
		setcookie("Admin",'', time()-3600*24);
		#header('Location:blank_update.php');
	}
	if(isset($_SERVER['HTTP_REFERER']))
	{
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}*/
	if(!empty($admin)&&!empty($pword)){
		if($admin!="coder"||$pword!="albert"){
			header('Location:invalid.php');
		}else{
			session_regenerate_id();
			$_SESSION['Admin']=$admin;
			session_write_close();
			header('Location:admin.php');
		}
	}else{
		header('Location:blank_update.php');
	}
	if($_GET['remove']=='logout'){
			session_unset();
			session_destroy();
			header('Location:admin.php');
	}
?>
