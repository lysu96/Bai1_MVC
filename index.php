<?php 
require_once 'Config/DBconfin.php';
_DLDT_base::Connect();
if (isset($_GET['Controller'])) {
	$Controller = $_GET['Controller'];
} else{
	$Controller = "";
}
switch ($Controller) {
	case 'thanh_vien':
		require 'Controllers/Xuly.php';
		break;
	default:
		require_once 'View/head_footer/header.php';
		require_once 'View/head_footer/footer.php';
		break;
}
 ?>