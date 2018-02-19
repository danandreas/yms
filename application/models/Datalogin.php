<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datalogin extends CI_Model {

	function auth_petugas($username,$password){
		$query=$this->db->query("SELECT * FROM petugas WHERE username='$username' AND password=md5('$password') LIMIT 1");
		return $query;
	}
}
