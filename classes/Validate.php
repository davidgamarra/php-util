<?php

class Validate {
    
    static function isEmail($value){
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
    
    static function isNumber($value){
        return filter_var($value, FILTER_VALIDATE_INT);
    }
    
    static function isFloat($value){
        return filter_var($value, FILTER_VALIDATE_FLOAT);
    }
    
    static function isIP($value){
        return filter_var($value, FILTER_VALIDATE_IP);
    }
    
    static function isURL($value){
        return filter_var($value, FILTER_VALIDATE_URL);
    }
    
    static function isMinLength($value, $length){
        return strlen($value) >= $length;
    }
	
	static function isLogin($value){
		 return preg_match('/^[A-Za-z][A-Za-z0-9]{5,9}$/', $value)	 
	}
    
}