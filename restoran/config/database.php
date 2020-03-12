<?php 
class database{
	private $db = [
		'host' => 'localhost',
		'username' => 'root',
		'password' => '',
		'database' => 'restoran'
	];

	public function data(){
		return $this->db;
	}
}
