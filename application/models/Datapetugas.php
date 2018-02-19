<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Datapetugas extends CI_Model{
	
	public function __construct()
        {
            $this->load->database();
        }
		
	public function daftar(){
		return $this->db->get('petugas');
		//NB : Pakai script dibawah ini jika akam memakai filter Where
		//$query=$this->db->query('SELECT * FROM petugas WHERE AAAA="CCCC"');
		//return $result=$query;
	}
	public function id(){
		$query=$this->db->query('select max(kdpet) as maxid from petugas');
		return $result=$query->row()->maxid;
	}
	
	public function add($data) {
		return $this->db->insert('petugas',$data); 
    }
	
	
	public function edit($where,$table){		
		return $this->db->get_where($table,$where);
	}
	
	public function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
	function hapus($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
?>
