<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('id'))
        {
         redirect('login');
        }
    }

 function index()
 {
  $this->load->view('layouts/main',$data);
 }

 function logout()
 {
  $data = $this->session->all_userdata();
  foreach($data as $row => $rows_value)
  {
   $this->session->unset_userdata($row);
  }
  redirect('login');
 }
}

?>
