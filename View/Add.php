<?php 
$tile = 'Thêm thành viên';
include 'head_footer/header.php';
?>

<div align="center">
	<?php if (isset($thanhcong)) {
		echo($thanhcong);
	} ?>
	<table>
		<form action="#" method="POST">
			<thead>
				<tr>
					<th>name: </th>
					<th><input type="text" name="textname"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Fullname</td>
					<td><input type="text" name="textfullname"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" name="textpassword"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="them" value="Add">
						<input type="reset" name="huy" value="Reset">
					</td>
				</tr>
			</tbody>
		</form>
	</table>
	<a href="index.php?Controller=thanh_vien&action=List">Quay lại</a>
</div>
<?php include 'head_footer/footer.php'; ?>