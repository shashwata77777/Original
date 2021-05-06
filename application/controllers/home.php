<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
	    parent::__construct();
	//	$this->load->library('session');
	   
	   // $this->load->model('webviewmodels/homemodel','homemodel',TRUE);
	   
	}
	
	
	public function index()
	{
		
		$session = [];
		$header = [];
		$result = [];
		
		$page = "webview/pages/index.php";

		
		webview_helper($result, $page, $header, $session);
	
	}


}//end of class