<?php

class Request {
    static function get($item){
        if(isset($_GET[$item])){
            return $_GET[$item];
        }
        return null;
    }
    
    static function post($item){
        if(isset($_POST[$item])){
            return $_POST[$item];
        }
        return null;
    }
    
    static function req($item){
        if(Server::isPost() && self::post($item) != null){
            return self::post($item);
        } 
        return self::get($item);
    }
}