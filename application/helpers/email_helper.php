<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
function sendEmail($to = '', $subject  = '', $body = '', $attachment = '', $cc = '')
{
	$controller = &get_instance();
	$controller->load->helper('path');

	$config = array();
	$config['useragent']            = "CodeIgniter";
	//$config['mailpath']             = "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
	$config['protocol']             = "smtp";
	$config['smtp_host']            = "ssl://smtp.googlemail.com";
	$config['smtp_port']            = "465";
	$config['smtp_timeout'] 		= '30';
	$config['smtp_user']    		= "umnradio@umn.ac.id";
	$config['smtp_pass']    		= "{10UMNradio77}";
	$config['mailtype'] 			= 'html';
	$config['charset']  			= 'utf-8';
	$config['newline']  			= "\r\n";
	$config['wordwrap'] 			= TRUE;

	$controller->load->library('email');

	$controller->email->initialize($config);

	$controller->email->from('no-reply@radio.umn.ac.id', 'UMN Radio Treasury');

	$controller->email->to($to);

	$controller->email->subject($subject);

	$controller->email->message($body);
	if ($cc != '') {
		$controller->email->cc($cc);
	}
	if ($attachment != '') {
		$controller->email->attach(base_url() . "pdfs/" . $attachment);
	}
	if ($controller->email->send()) {
		return true;
	} else {
		return false;
	}
}
