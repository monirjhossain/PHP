<?php include 'inc/header.php'; ?>

<?php include 'lib/config.php';
	  include 'lib/Database.php'; 
	  $db = new Database();
?>	

				<div class="myform">
					<?php 
					if ($_SERVER['REQUEST_METHOD'] == "POST") {
						$permited = array('jgp','png','gif','jpeg');
						$file_name = $_FILES['image']['name'];
						$file_size = $_FILES['image']['size'];
						$file_temp = $_FILES['image']['tmp_name'];

						$div = explode('.', $file_name);
						$file_ext = strtolower(end($div));
						$unique_image = substr(md5(time()), 0,10). '.' . $file_ext;
						$uploades_image = "uploads/" . $unique_image;

						if (empty($file_name)) {
							echo "<span class='error'>Please select image!</span>";
						}elseif ($file_size > 1048579) {
							echo "<span class='error'>Image should be more than 1 MB !</span>";
						}elseif (in_array($file_ext, $permited) == fales) {
							echo "<span class='error'>You can upload only:- '.implode(', ', $permited)'</span>";
						}else{
						move_uploaded_file($file_temp, $uploades_image);
						$query = "INSERT INTO tbl_image(image) VALUES ('$uploades_image')";
						$inserted_rows = $db->insert($query);
						if ($inserted_rows) {
							echo "<span class='success'>Image inserted Successfully</span>";
						}else{
							echo "<span class='error'>Image not inserted !</span>";
						}

						}
					}

					 ?>
					<form action="" method="post" enctype="multipart/form-data">
						<table>
							<tr>
								<td>Select Image</td>
								<td><input type="file" name="image"></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" name="submit" value="Upload"></td>
							</tr>
						</table>
					</form>
					<?php 
					$query = "select * from tbl_image order by id desc limit 1";
					$getImage = $db->select($query);
					if ($getImage) {
						while ($result = $getImage->fetch_assoc()) {
					 ?>	
					 <img src="<?php echo $result['image'] ?>" height="100" width="200" alt="Picture">
					<?php }} ?>


					
				</div>

<?php include 'inc/footer.php' ?>