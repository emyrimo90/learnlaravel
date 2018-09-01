<?php 
class Helper{
	 public static function tecko(){
	 	return 'tecko';
	 }

	 public static function userData(){
	 	return session()->get('data');
	 }
}