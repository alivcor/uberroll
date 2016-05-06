<?php
class Pages extends CI_Controller {

         function __construct()
         {
           parent::__construct();
           $this->load->helper('url_helper');
            $this->load->model('ur_model');
         }
        public function view($page = 'home')
        {
            if($this->session->userdata('logged_in'))
               {
                 
                    $session_data = $this->session->userdata('logged_in');
                    $data['username'] = $session_data['username'];
                    $data['uid'] = $session_data['uid'];
                    $data['urole'] = $session_data['urole'];
                    $data['username'] = $session_data['username'];
                   // $data['ucontact'] = $session_data['ucontact'];
                    $data['fullname'] = $session_data['fullname'];
                 
                    if($data['urole']=='1'){
                        // "<script>alert('1')</script>";
                        $data['employees'] =  $this->ur_model->get_emplist();
                        $data['requests'] = $this->ur_model->get_pendingreq();
                    } else {
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
                        $month = date('m', strtotime('last month'));
                        $year = date('Y', time());
                        $prevslab = $month.$year;
                        $data['prevslab']=$prevslab;
                        $data['salreq'] = $this->ur_model->get_salreq($data['uid'], $prevslab);
                    }
                
                $this->load->view($page, $data);
                 
                 
               }
               else
               {
                 //If no session, redirect to login page
                 redirect('http://localhost/uberroll/login', 'refresh');
               }
            if ( ! file_exists(APPPATH.'views/'.$page.'.php'))
            {
                
                    
                    // Whoops, we don't have a page for that!
                    show_404();
            }
    
            $data['title'] = ucfirst($page); // Capitalize the first letter
            //echo "<script>alert('its me pages')</script>";
            
            
        }
}