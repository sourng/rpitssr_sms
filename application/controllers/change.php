<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Change extends CI_Controller {

    
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        /*cache control*/
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); 
        $this->load->model('m_teacher', '', true);
    }
    
    /***default functin, redirects to login page if no admin logged in yet***/
    public function index()
    {
        
    }
    
    
    function district($param1 = '')
    {
    
        $page_data['district'] = $this->m_teacher->get_district($param1);
        $page_data['select'] = 'district' ;
        $this->load->view('change' ,$page_data);
    }

    function commune($param1 = '')
    {
   
        $page_data['commune'] = $this->m_teacher->get_commune($param1);
        $page_data['select'] = 'commune' ;
        $this->load->view('change' ,$page_data);
    }
}

