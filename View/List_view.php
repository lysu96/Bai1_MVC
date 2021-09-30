<?php 
	$titel ="Danh sách thành viên";
	include 'head_footer/header.php';
 ?>
 <style type="text/css" media="screen">
 	.tbl_table{
 		width: 800px;
 		border: 1px solid #000;
 		margin: 0 auto;
 	}
 </style>
<div class="tbl_table">
	<table border="1px" align="center">
		<tr>
			<th>STT</th>
			<th>Tên</th>
			<th>Họ và tên</th>
			<th>Mật khẩu</th>
			<th>Hành động</th>
		</tr>
		<?php 
				// echo "<pre>";
				// print_r($datalist);
			$stt=0;
			foreach ($datalist as $value) {
				$stt++;
		?>
		<tr>
			<td><?php echo($stt); ?></td>
			<td><?php echo $value['name']; ?></td>
			<td><?php echo $value['fullname']; ?></td>
			<td><?php echo $value['password']; ?></td>
			<td>
				<a href="index.php?Controller=thanh_vien&action=Edit">Sửa</a>
				<a href="index.php?Controller=thanh_vien&action=Delete">Xóa</a>
			</td>
		<?php } ?>
		</tr>
	</table>
</div>
<?php 
include 'head_footer/footer.php';
 ?>