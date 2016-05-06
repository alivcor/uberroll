<?php
class Login_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
        public function validate_creds($username, $password)
        {       
                /*$this->db->select('UID, email, password');
                $this->db->from('users');
                $this->db->where('email', $username);
                $this->db->where('password', $password);
                $this->db->limit(1);
                $query = $this->db->get();*/
                $sql = "SELECT * FROM ur_users WHERE uemail = '$username' AND upassword = '$password'";
                $query = $this->db->query($sql); 
               if($query->num_rows() == 1)
               {
                 return $query->result();
               }
               else
               {
                 return false;
               }
                //echo "<script>alert('hisweety this is your model')</script>";
                /*if ($loginid === FALSE)
                {
                        //$query = $this->db->get('pind');
                        //echo "<script>alert('hisweety this is your model')</script>";
                        return false;
                }
                
                $query = $this->db->get_where('users', array('email' => $loginid));
                return $query->row_array();*/
        }
}