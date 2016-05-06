<?php
class Verifylogin extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('login_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                  if($this->session->userdata('logged_in'))
                   {
                   
                      redirect('http://localhost/uberroll/home', 'refresh');
                     
                     
                   }
                   else
                   {
                         $this->load->helper(array('form', 'url'));
                        $this->load->library('form_validation');
                    
                        $this->form_validation->set_rules('username', 'username', 'trim|required');
                        $this->form_validation->set_rules('password', 'password', 'trim|required|callback_check_database');
                        
                        if($this->form_validation->run() == FALSE)
                        {
                         //Field validation failed.  User redirected to login page
                         $this->load->view('login');
                        }
                        else
                        {
                         //Go to private area
                         redirect('http://localhost/uberroll/home', 'refresh');
                         //$this->load->view('home', 'refresh');
                        }
                        //$this->load->helper(array('form'));
                        //$this->load->view('home');
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
        function check_database($password)
        {
           //Field validation succeeded.  Validate against database
           $username = $this->input->post('username');
         
           //query the database
           $result = $this->login_model->validate_creds($username, $password);
         
           if($result)
           {
             $sess_array = array();
             foreach($result as $row)
             {
               $sess_array = array(
                 'uid' => $row->uid,
                 'username' => $row->uemail,
                 'fullname' => $row->uname,
                 'urole' => $row->urole,
                 'ucontact' => $row->ucontact,
                 'urep' => $row->urep
               );
               $this->session->set_userdata('logged_in', $sess_array);
             }
             return TRUE;
           }
           else
           {
             $this->form_validation->set_message('check_database', 'Invalid username or password');
             return false;
           }
        }      
}