<?php 

	class File{
		public $fileFormates = ['image/png','image/jpg','image/jpeg'];
		public $filesize = 4000000;


		function fileUpload($file){
			if(in_array($file['type'], $this->fileFormates)){
				if ($file['size'] < $this->filesize){
					move_uploaded_file($file['tmp_name'], 'uploads/' . $file['name']);
					echo "File has been uploaded";
				}else{
					echo "Invalid file size";
				}
			}else{
				echo "Invalid file formate";
			}
		}
	}



 ?>