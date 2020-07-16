<?php
class File{
	private $supportF = ['image/jpg','image/jpeg','image/png'];

	public function fileupload($file){

		if(in_array($file['type'], $this->supportF)){

			move_uploaded_file($file['tmp_name'],'uploads/'. $file['name']);
			
			echo "upload file sucess";
		}else{
			die ("not  support");
		}
	}
}

?>