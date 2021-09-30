<?php 
require_once 'Model/user.php';
if (isset($_GET['action'])) {
	$action = $_GET['action'];
}else{
	$action = NULL;
}
switch ($action) {
	case 'List':
		$datalist = Xuly_mode::getAllData();
		require 'View/List_view.php';
		break;
	case 'Add':
		if (isset($_POST['them'])) {
			$name = $_POST['textname'];
			$fullname = $_POST['textfullname'];
			$password = $_POST['textpassword'];
			// echo($name)."</br>";
			// echo($fullname)."</br>";
			// echo($password);
			if(Xuly_mode::Insertdata(['name'=>$name,'fullname'=>$fullname,'password'=>$password])){
				$thanhcong = "Thêm thành công.!";
			}
		}
		require 'View/Add.php';
		break;
	case 'Edit':
		$datalist = Xuly_mode::getAllData();
		require 'View/List_view.php';
		break;
	case 'Delete':
		$datalist = Xuly_mode::getAllData();
		require 'View/List_view.php';
		break;
	default:
		$datalist = Xuly_mode::getAllData();
		require_once 'View/List_view.php';
		break;
}
 ?>