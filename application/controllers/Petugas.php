<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if ($this->session->userdata('level') !== '10') { $this->dataload->tolak_user(); }

		$this->load->model('datapetugas');
		$this->load->helper('url');
	}

	public function daftar()
	{	
		
		$data['data'] = $this->datapetugas->daftar()->result();
		
		$data['title'] = "Daftar Petugas";
		$data['isi'] = "daftarptg";
		
		$this->load->view('daftar',$data);
	}
	
	public function input()
	{
		
		$maxid=$this->datapetugas->id();
		$noUrut = (int) substr($maxid,2,4);
		$noUrut++;
		$newID = "P".sprintf("%04s",$noUrut);
		$tglsekarang = date("Y-m-d");
		
		$data['title']="Input Petugas";
		$data["idbaru"] = $newID;
		
		$this->load->view('struktur/input_atas',$data);
		$this->load->view('petugas/inputptg',$data);
		$this->load->view('struktur/input_bawah');
	}
	
	public function create()
	{	
		// memanggil private function untuk upload gambar
		$get_foto = $this->upload_gambar();

			// mendapatkan nama file foto
		$foto = $get_foto['file_name'];

			// setup nama thumbnail foto --> hasil foto lebih kecil
		$thumb_foto = $get_foto['raw_name'].'_thumb'.$get_foto['file_ext'];

		$data = array(
			'idptg' => $this->input->post('idptg'),
			'nmptg' => $this->input->post('nmptg'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'level' => $this->input->post('level'),
			'foto' => $foto
		);
		
		$this->datapetugas->add($data);
		redirect('petugas/daftar');
	}	
	
	public function edit($idptg)
	{
		$data['title']="Edit Petugas";
		
		//enkripsi link
		$getid = $idptg; //data diambil dari kiriman form -> Get id
		$id_decrypt = substr($getid,10); //10 data depan tidak tampil, sehingga hanya md5(id) saja agar bisa dicocokkan dengan id database

		$where = array(
			'md5(idptg)' => $id_decrypt
		);
		$data['petugas'] = $this->datapetugas->edit($where,'petugas')->result();
		
		$this->load->view('struktur/input_atas',$data);
		$this->load->view('petugas/editptg',$data);
		$this->load->view('struktur/input_bawah');
	}
	
	public function update(){
		// memanggil private function untuk upload gambar
		$get_foto = $this->upload_gambar();

			// mendapatkan nama file foto
		$foto = $get_foto['file_name'];

		$idptg = $this->input->post('idptg');
		
		$data = array(
			'nmptg' => $this->input->post('nmptg'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'level' => $this->input->post('level'),
			'foto' => $foto
		);
		
		$where = array(
			'idptg' => $idptg
		);
		
		$this->datapetugas->update($where,$data,'petugas');
		redirect('petugas/daftar');
	}
	
	public function hapus($idptg){
		
		//enkripsi link
		$getid = $idptg; //data diambil dari kiriman form -> Get id
		$id_decrypt = substr($getid,10); //10 data depan tidak tampil, sehingga hanya md5(id) saja agar bisa dicocokkan dengan id database

		$where = array(
			'md5(idptg)' => $id_decrypt
		);
		
		$this->datapetugas->hapus($where,'petugas');
		redirect('petugas/daftar');
	}

	private function upload_gambar() {

 		// Setup folder upload path
		$config['upload_path']		= './uploads/';

 		// Setup file yang di izinkan
		$config['allowed_types']	= 'gif|jpg|png|jpeg';

 		// Encrpt nama foto agar tidak sama
		$config['encrypt_name']		= TRUE;

 		// Memanggil library upload disertai dengan paramter $config array
		$this->load->library('upload', $config);

 		// jika upload gagal, return false
		if( $this->upload->do_upload( 'foto' ) == false) {
			return false;
 			#return $this->upload->display_errors();
		} 
		
 		// jika upload berhasil, return nama file dan membuat thumbnail foto
		else 
		{
 			// Mengambil data yang berhasil di upload
			$uploaded_data = $this->upload->data();

 			// Mendapatkan nama file
			$file_name = $uploaded_data['file_name'];

 			// Memanggil library GD 2
			$config['image_library'] = 'gd2';

			// Memanggil nama file images
			$config['source_image'] = './uploads/'.$file_name;

			// Membuat thumbnail
			$config['create_thumb'] = FALSE;

			// Mempertahankan foto berdasarkan ratio, hal ini digunakan agar foto tidak gepeng
			$config['maintain_ratio'] = TRUE;

			// Setting lebar dan tinggi
			//$config['width']         = 100;
			//$config['height']       = 100;

			// Memanggil library image_lib untuk memproses images resize disertai dengan parameter $config
			$this->load->library('image_lib', $config);

			// Melakukan resize
			$this->image_lib->resize();

			// Return data
			return $uploaded_data;
		}
	}
}
