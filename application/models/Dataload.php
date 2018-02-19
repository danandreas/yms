<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 
class Dataload extends CI_Model{
	
	public function __construct()
        {
            $this->load->database();
            $this->load->helper();
		}
		
	function tolak_user(){
		echo "<script language=javascript>alert('Anda tidak mempunyai hak akses untuk halaman ini! Silahkan login untuk mengakses halaman yang anda tuju.');</script>";
		redirect('login/logout','refresh');
		}
	
	public static function company(){
		$perusahaan = "PT. YMS";
		return($perusahaan);
		}
    
    public static function tgl_indonesia($date){
		$BulanIndo = array ("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
					
		$tahun = substr($date, 0, 4);
		$bulan = substr($date, 5, 2);
		$tgl = substr($date, 8, 2);
									
		$result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;
		return($result);
	}

	public static function hari_ini(){
		$hari = array ("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
		$bulan = array ("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
		$waktu[0]=$hari[date("w",time())];
		$waktu[1]=date("j",time());
		$waktu[2]=date("m",time());
		$waktu[3]=date("Y",time());
		$waktu[4]=date("H",time());
		$waktu[5]=date("i",time());
		$waktu[6]=date("s",time());
		$hariini="$waktu[0]";
		$tanggalini="$waktu[1] ".$bulan[$waktu[2]-1]." $waktu[3]";
		$jamini="$waktu[4]:$waktu[5]:$waktu[6]";
		$hr_tgl_ini = $waktu[0].", ".$tanggalini;
		return($hr_tgl_ini);
	}

	public static function tambahan_link(){
		$th4 = date("Y");
		$th2 = date("y");
		$bln = date("m");
		$tgl = date("d");
		$kata1 = "pb";
		$kata2 = "fd";
		$ubahlink = $tgl.$kata1.$bln.$kata2.$th2; //total 10 -> tambahan data sebelum link md5(id)
		return($ubahlink);
	}

	public static function footer(){
		date_default_timezone_set('Asia/Jakarta');
		$tahun = date("Y");
		$tulisanfooter = "Copyright &copy; ".$tahun." PT. YMS";
		return($tulisanfooter);
	}
}
?>
