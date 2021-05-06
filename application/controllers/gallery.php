<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {
	public function __construct()
	{
	    parent::__construct();
	//	$this->load->library('session');
	     
	   
	}
	
	
	public function index()
	{
		
		$session = [];
		$header = [];
		$result = [];
		
		$page = "webview/pages/gallery.php";

		
		webview_helper($result, $page, $header, $session);
	
	}

	public function video()
	{
		
		$session = [];
		$header = [];
		$result = [];
		
		$page = "webview/pages/video.php";

		
		webview_helper($result, $page, $header, $session);
	
	}


}//end of class