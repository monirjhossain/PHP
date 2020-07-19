<?php 

	class File{
		public $fileformate = ['image/jpg','image/jpeg','image/png','application/pdf'];
		public $filesize = 1000000;


		public function FileUpload($file){
			if (in_array($file['type'], $this->fileformate)) {
				if($file['size'] < $this->filesize){
					move_uploaded_file($file['tmp_name'], 'uploads/' . $file['name']);
					echo "File has been uploaded";
				}else{
					echo "Invalid file size";
				}
			}else{
				echo "Invalid file format";
			}
		}
	}




 ?>