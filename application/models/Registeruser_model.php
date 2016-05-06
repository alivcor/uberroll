<?php
class Registeruser_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
        public function valnsave_creds($fullname, $useremail, $password_s)
        {       
                /*$this->db->select('UID, email, password');
                $this->db->from('users');
                $this->db->where('email', $username);
                $this->db->where('password', $password);
                $this->db->limit(1);
                $query = $this->db->get();*/
                $sql = "SELECT * FROM ur_users WHERE uemail = '$useremail' AND upassword = '$password_s'";
                $query = $this->db->query($sql); 
               if($query->num_rows() == 1)
               {
                    return false;
               }
               else
               {
                    $sql = "INSERT INTO ur_users (uemail, uname, upassword) VALUES('$useremail','$fullname','$password_s')";
                    $query = $this->db->query($sql); 
                    $sql = "SELECT * FROM ur_users WHERE uemail = '$useremail' AND upassword = '$password_s'";
                    $query = $this->db->query($sql); 
                    return $query->result();
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