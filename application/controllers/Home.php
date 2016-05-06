<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->helper('url_helper');
   $this->load->model('ur_model');
 }
 
 function index()
 {
    
   if($this->session->userdata('logged_in'))
   {
   
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $data['uid'] = $session_data['uid'];
     $data['urole'] = $session_data['urole'];
    
     $data['fullname'] = $session_data['fullname'];
     $logs = $this->ur_model->get_logs($data['uid']);
     $data['logs']=$logs;
     
     $month = date('m', time());
     $year = date('Y', time());
     $slab = $month.$year;
     echo "<script>console.log('$slab')</script>";
     $ath = $this->ur_model->get_alltotalhours($slab);
     $th =  $this->ur_model->get_totalhours($data['uid'], $slab);
     $data['ath']= $ath;
     $data['th']=$th;
     
     
     $this->load->view('home', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('http://localhost/uberroll/login', 'refresh');
   }
   
 }
 
 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home', 'refresh');
 }
 
}
 
?>