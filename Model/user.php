<?php 
require_once 'Config/DBconfin.php';
/**
 * 
 */
class Xuly_mode extends _DLDT_base
{
	public static $tbl_table = "tbl_thanhvien";

	public function getAllData()
	{
		return parent::LayDLBang(self::$tbl_table);
	}
	public function getIdData($id)
	{
		return parent::LayDLId(self::$tbl_table,$id);
	}
	public function Insertdata($arr_mang)
	{
		return parent::Them(self::$tbl_table,$arr_mang);
	}
	public function UpdateData($arr_mang,$id)
	{
		return parent::Sua(self::$tbl_table,$arr_mang,$id);
	}
	public function DeleteData($id)
	{
		return parent::Xoa(self::$tbl_table,$id);
	}
}
 ?>