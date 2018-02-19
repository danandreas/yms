<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
  /**
   *
   */
class Email extends CI_Controller{
    function __construct(){
        parent::__construct();

        $this->load->model('dataemail');
        $this->load->library('MyPHPMailer'); // load library
    }

    function send(){
        $data = $this->dataemail->send()->result(); //daftar yang akan dikirim
        
        foreach ($data as $d):
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPSecure = "ssl";
            $mail->Port = 465;
            $mail->SMTPAuth = true;
            $mail->Username = '';
            $mail->Password = '';

            $mail->setFrom('pengirim@gmail.com', 'Nama Pengirim');
            $mail->addAddress('penerima@gmail.com','Nama Penerima');
            $recipients = $this->dataemail->petugas()->result();
                foreach($recipients as $e)
                {
                   $mail->AddCC($e->email, $e->email);
                }
            $mail->Subject = '';
            $mail->IsHTML(true);
            $mail->Body = '';
            if ($mail->send()) {
                echo "Email terkirim! <br>";
            } else {
                echo "Email gagal dikirim! <br>";
            }
        endforeach;
    }
}
?>
