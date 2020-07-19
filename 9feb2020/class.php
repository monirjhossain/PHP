<?php 

	class File{

		private $fileFormates = ['image/jpg','image/jpeg','image/png'];
		private $filesize = 4000000;


		public function fileupload($file){
			if(in_array($file['type'], $this->fileFormates)){
				if($file['size'] < $this->filesize){
					move_uploaded_file($file['tmp_name'], 'uploads/' . $file['name']); 
					echo "Congratulations! File has been upload";
				}else{
					echo "Invalid file size";
				}
			}else{
				echo "invalid file formate";
			}
		}
	}



 ?>