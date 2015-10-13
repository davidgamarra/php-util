<?php
class FileUpload {
	
/*********************** default params ************************************************************/
	private static $destination = './img/';
	private static $fileName = 'file.jpg';
	private static $maxSize = '10485760'; //10 mb
	private static $allowedExtensions = array('image/jpg', 'image/jpeg','image/png','image/gif');
 
//Set methods to change default params
	public static function setDestination($newDestination) {
		self::$destination = $newDestination;
	}
	
	public static function setFileName($newFileName) {
		self::$fileName = $newFileName;
	}
	
  	public static function setMaxSize($newSize) {
		self::$maxSize = $newSize;
	}
	
  	public static function setAllowedExtensions($newExtensions) {
    	if (is_array($newExtensions)) {
      		self::$allowedExtensions = $newExtensions;
    	} else {
      		self::$allowedExtensions = array($newExtensions);
    	}
	}
	
//Get file properties
	public static function getName($file){
		return $_FILES[$file]["name"];
	}
	
	public static function getType($file){
		return $_FILES[$file]["type"];
	}
	
	public static function getSize($file){
		return $_FILES[$file]["size"];
	}
	
	public static function getTmpName($file){
		return $_FILES[$file]["tmp_name"];
	}
 
//Upload Files methods
	public static function upFile($file){
		move_uploaded_file($_FILES[$file]["tmp_name"], self::$destination.self::$fileName);
	}
	
}