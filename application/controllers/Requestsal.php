<?php
class Requestsal extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('ur_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                  if($this->session->userdata('logged_in'))
                   {
                         $session_data = $this->session->userdata('logged_in');
                         $data['username'] = $session_data['username'];
                         $data['uid'] = $session_data['uid'];
                         $data['urole'] = $session_data['urole'];
                        
                         $comments = $this->input->post('comments');
                         $result = $this->ur_model->validate_request($data['uid'], $comments);
         
                     
                   }
                   else
                   {
                        redirect('http://localhost/uberroll/home', 'refresh');
                     
                        
                   }
               
        }

       /* public function validate_c($username = NULL)
        {
                $data['user_creds'] = $this->login_model->validate_creds($loginid);
                if(!empty($data['user_creds'])){
                    $this->session->set_userdata($data);
                    $this->load->view('home',$data);
                }
                
            
        }*/
        function post_request()
        {
            $session_data = $this->session->userdata('logged_in');
             
             $uid = $session_data['uid'];
             $month = date('m', strtotime('last month'));
             $year = date('Y', time());
             $slab = $month.$year;
               //Field validation succeeded.  Validate against database
               $comments = $this->input->post('comments');
         
           //query the database
           $result = $this->ur_model->validate_request($uid, $slab, 0, $comments);
         
           if($result)
           {               
                    $sess_array = array(
                       'uid' => $uid,
                        'salreq' => "1"
                    );
                    $this->session->set_userdata('sal_req', $sess_array);
                    //$this->form_validation->set_message('check_database', 'We are unable to process your request at this time.');
                   redirect('http://localhost/uberroll/request-salary', 'refresh');
             
             return TRUE;
           }
           else
           {
             $this->form_validation->set_message('check_database', 'We are unable to process your request at this time.');
             return false;
           }
        }      
}