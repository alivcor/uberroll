<?php
class Deny_request extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('ur_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                  $adminid=$this->input->get('uid');
                  if($this->session->userdata('logged_in'))
                   {
                         $session_data = $this->session->userdata('logged_in');
                         $data['username'] = $session_data['username'];
                         $data['uid'] = $session_data['uid'];
                         $data['urole'] = $session_data['urole'];
                        $reqid = $this->input->get('reqid');
                        
                        if($data['uid'] == $adminid && $data['urole']=='1'){
                            $isdone = $this->ur_model->deny_request($reqid);
                            if($isdone){
                                
                                redirect('http://localhost/uberroll/requests', 'refresh');
                            }
                        }
                     
                   }
                   else
                   {
                        redirect('http://localhost/uberroll/home', 'refresh');
                     
                        
                   }
               
        }

     
}