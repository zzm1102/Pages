<?php
@header("Content-type: text/html; charset=utf-8");
ini_set('date.timezone','Asia/Shanghai');

class news{
	public $db_hostname;
	public $db_username;
	public $db_userpwd;
	public $db_conn;
	
	function __construct($db_hostname,$db_username,$db_userpwd){
		$this->db_hostname=$db_hostname;
		$this->db_username=$db_username;
		$this->db_userpwd=$db_userpwd;
		$this->dbConn();
	}
	
	function dbConn(){
		$this->db_conn=mysql_connect($this->db_hostname,$this->db_username,$this->db_userpwd) or die (mysql_error()."数据库无法连接");
		mysql_select_db("svrid7i2e3r05oa") or die (mysql_error()."数据库无法选择");
		mysql_query("SET NAMES UTF8");
	}
	
	function newsInsert($openid,$userName,$dishes){
		$insertTime=date("Y-m-d H:i:s");
		$query="INSERT INTO jly_news (openid,user_name,dishes,insert_time) VALUES ('$openid','$userName','$dishes','$insertTime')";
		$result=mysql_query($query)  or die (mysql_error()."数据无法插入");
		
		$id=mysql_insert_id();
		return $id;
	}

	function newsSelect($id){
		$query="SELECT openid,user_name,dishes,insert_time FROM jly_news WHERE id='{$id}'";
		$result=mysql_query($query) or die (mysql_error()."数据无法查询");
		$newsDetail=& mysql_fetch_array($result);
		
		return $newsDetail;
	}
	
	function checkOpenid($openid){
		
		$query="SELECT id FROM jly_news WHERE openid='".$openid."'";
		$result=mysql_query($query) or die (mysql_error()."数据无法查询");
		$ID=mysql_fetch_array($result);// or die (mysql_error()."数据无法fetch");
		
		if (isset($ID)){
			return $ID;
		}
		
		//return $ID;
	}
	
	function __destruct(){
		mysql_close($this->db_conn);
	}
	
}
