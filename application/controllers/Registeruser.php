<?php
class Registeruser extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('registeruser_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                
                $this->form_validation->set_rules('fullname', 'fullname', 'trim|required');
                $this->form_validation->set_rules('useremail', 'useremail', 'trim|required');
                $this->form_validation->set_rules('password_f', 'password_f', 'trim|required');
                $this->form_validation->set_rules('password_s', 'password_s', 'trim|required|callback_check_database');
                if($this->form_validation->run() == FALSE)
                {
                 //Field validation failed.  User redirected to login page
                 $this->load->view('register');
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

       /* public function validate_c($username = NULL)
        {
                $data['user_creds'] = $this->login_model->validate_creds($loginid);
                if(!empty($data['user_creds'])){
                    $this->session->set_userdata($data);
                    $this->load->view('home',$data);
                }
                
            
        }*/
        function check_database($password_s)
        {
           //Field validation succeeded.  Validate against database
           $useremail = $this->input->post('useremail');
            $fullname = $this->input->post('fullname');
            $password_f = $this->input->post('password_f');
            
            if($password_f != $password_s){
                $this->form_validation->set_message('check_database', 'Passwords are not same. !');
                 return false;
            }
            else{
           //query the database
               $results = $this->registeruser_model->valnsave_creds($fullname, $useremail, $password_s);
             
               if($results)
               {
                 $sess_array = array();
                 foreach($results as $row)
                 {
                   $sess_array = array(
                     'uid' => $row->uid,
                     'username' => $row->uemail,
                     'fullname' => $row->uname,
                     'urole' => $row->urole,
                     'urep' => $row->urep
                   );
                   $this->session->set_userdata('logged_in', $sess_array);
                 }
                 return TRUE;
               }
               else
               {
                 $this->form_validation->set_message('check_database', 'You are already registered, please login within your email address !');
                 return false;
               }
           }
        }      
}