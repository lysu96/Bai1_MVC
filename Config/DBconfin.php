<?php 
class _DLDT_base
{
	public static $host = "localhost";
	public static $name = "root";
	public static $pass = "";
	public static $database = "ql_tv";
	
	public static $conn = NULL;
	public function Connect()
	{
		self::$conn = mysqli_connect(self::$host,self::$name,self::$pass,self::$database);
		if(!self::$conn){
			echo "Lỗi kết nối csdl";
		}
		else
		{
			mysqli_set_charset(self::$conn,'utf8');
		}
		return self::$conn;
	}
	// thuc thi
	public function excete($sql)
	{
		$reult = self::$conn->query($sql);
		return $reult;
	}
	// lay du lieu
	public function LayDLBang($table)
	{
		$sql = "SELECT * FROM $table";
		$reult = self::excete($sql);
		$data = array();
		if (mysqli_num_rows($reult)>0) {
			while ($datas = mysqli_fetch_array($reult)) {
				$data[] = $datas;
			}
		}
		return $data;
	}
	// lay du lieu id
	public function LayDLId($table,$id)
	{
		$sql = "SELECT * FROM $table WHERE id=$id";
		$reult = self::excete($sql);

		$data = array();
		if (mysqli_num_rows($reult)>0) {
			while ($datas = mysqli_fecth_array($reult)) {
				$data[] = $datas;
			}
		}
		return $data;
	}
	// them dl
	public function Them($table,$arr_data)
	{
		$data_key = '';
		$data_value = '';
		foreach ($arr_data as $key => $value) {
			$data_key = $data_key.$key;
			$data_value = $data_value."'".$value."',";
		}
		$data_key = rtrim($data_key,',');
		$data_value = rtrim($data_value,',');
		$sql="INSERT INTO $table($data_key) VALUES($data_value)";
		return self::excete($sql);
	}
	// sua dl 
	public function Sua($table,$arr_mang,$id)
	{
		$data_value = '';
		foreach ($arr_mang as $key => $value) {
			$data_value = $data_value."$key='".$value."',";
		}
		$data_value = rtrim($data_value,',');
		$sql = "UPDATE $table SET $data_value WHERE id=$id";
		return self::excete($sql);
	}
	// xoa dl id
	public function xoa($table,$id)
	{
		$sql = "DELETE FROM $table WHERE id=$id";
		return self::excete($sql);
	}
	// login
	public function Dangnhap($table,$username,$password)
	{
		$sql = "SELECT * FROM $table WHERE username=$username AND password=$password";
		$reult = self::excete($sql);
		$data = array();
		if (mysqli_num_rows($reult)>0) {
			while ($datas = mysqli_fecth_array($reult)) {
				$data[] = $datas;
			}
		}
		return $data;
	}
}

 ?>