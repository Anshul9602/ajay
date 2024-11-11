<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_data extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
    public function index() {



		if (empty($_POST)) {
            redirect(base_url());
        }

       
        $this->load->library('email');

        $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'ssl://smtp.gmail.com';
        $config['smtp_port']    = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = 'theodinjaipur@gmail.com';
        $config['smtp_pass']    = 'ilhphiqmihlvezxk';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not
        
        $this->email->initialize($config);


		
        $from = 'theodinjaipur@gmail.com';
         $to = 'info@ajaydiamltd.com';
         //$to='ronakvaya@gmail.com';
       

        $subject = 'New Message';
        $message = '<h2>Contact Request Submitted</h2><br>
		<p><b>Name: </b>'.$_POST["name"].'</p>
		<p><b>Email: </b>'.$_POST["email"].'</p>
		<p><b>Phone-Number: </b>'.$_POST["phone"].'</p>
		<h2>Diamond Details</h2><br>
		<p><b>Cut: </b>'.$_POST["cut"].'</p>
		 
		<p><b>Color: </b>'.$_POST["color"].'</p>
		<p><b>Clarity: </b>'.$_POST["clarity"].'</p>
		<p><b>Price-Range: </b>'.$_POST["price"].'</p>
		<p><b>Message: </b>'.$_POST["message"].'</p>';
        unset($_POST['g-recaptcha-response']);

        foreach ($_POST as $key => $value) {
            $message = $message . $key . '- ' . $value . '<br>';
        }

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ( $this->email->send() ) {
            echo "<script>
            alert('Message Sent Successfully!');
            window.location.href='http://www.ajaydiamltd.com/Connect_With_Us';
            </script>";
        } else {
        
            $errors = $this->email->print_debugger();
            print_r($errors);
        }
		
    }

}