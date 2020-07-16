<?php 

	class Image{
		private $fileFormates = ['image/jpg', 'image/jpeg', 'image/png', 'application/pdf'];
		private $fileSize = 1000000;


		public function fileUpload($file){

			if(in_array($file['type'], $this->fileFormates)){

				if($file['size'] < $this->fileSize){

					move_uploaded_file($file['tmp_name'], 'uploads/' . $file['name']);

					echo "File has been uploaded";
				}else{
					echo "File size is not valid";
				}
			}else{
				echo "File format is not supported";
			}
		}
	}


 ?>