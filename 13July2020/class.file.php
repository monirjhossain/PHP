<?php
	class Image {
		
		private $supportFormats = ['image/png', 'image/jpeg', 'image/jpg','application/pdf'];
		private $supportsize = 1000000;
				
		public function fileUpload($file){
			
			if(in_array($file['type'], $this->supportFormats)) {

				if ($file['size'] < $this->supportsize) {
					
					move_uploaded_file($file['tmp_name'], 'upload/'. $file['name']);

					echo "File has been uploaded";
				}

				else
				{
					echo "File size is not valid";
				}
			
			}
			else {
				echo "File format is not supported";	
			}	
	}
}	
?>
