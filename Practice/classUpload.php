<?php 

	class File{
		private $fileformates = ['image/jpg','image/jpeg','image/png','applicaltion/pdf'];
		private $filesize = 4000000;


		public function fileUpload($file){
			if(in_array($file['type'], $this->fileformates)){
				if($file['size'] < $this->fileformates){
					move_uploaded_file($file['tmp_name'], 'uploads/' . $file['name']);
					echo "Congratulatons! File has been uploaded";
				}else{
					echo "File size is invalid";
				}
			}else{
				echo "Invalid file formates";
			}
		}
	}


 ?>