<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 
class Dataemail extends CI_Model{
	
	public function __construct()
        {
            $this->load->database();
        }
		
	public function tigabulan(){
		$query=$this->db->query('SELECT * FROM perizinan WHERE CURDATE() = DATE_SUB(sampaitgl, INTERVAL 3 MONTH)');
		return $result=$query;
		// CURDATE() = date
		// NOW()	 = datetime
	}

	public function satubulan(){
		$query=$this->db->query('SELECT * FROM perizinan WHERE CURDATE() = DATE_SUB(sampaitgl, INTERVAL 1 MONTH)');
		return $result=$query;
	}
	public function satuminggu(){
		$query=$this->db->query('SELECT * FROM perizinan WHERE CURDATE() = DATE_SUB(sampaitgl, INTERVAL 1 WEEK)');
		return $result=$query;
	}

	public function petugas(){
		$this->db->select('email','nmptg');
		$this->db->from('petugas');
		return $this->db->get();
	}
}
?>
