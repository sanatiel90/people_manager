<?php

 class Connection{

 	private static $con;


 	public static function getCon(){

 		if(!isset(self::$con)){


 			$host = "mysql.hostinger.com.br";
 			$user = "u478662225_root";
 			$password = "vertrigo";
 			$database = "u478662225_crud";
 			self::$con = new PDO("mysql:host=$host; dbname=$database", $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));

 			self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 			self::$con->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);


 		}


 		return self::$con;

 	} //fim getCon
 



 	public static function closeCon(){
 		if(self::$con != null){
 			self::$con = null;
 		}

 	} //fim closeCon








 } //fim class









?>