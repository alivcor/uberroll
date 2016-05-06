<?php
class UR_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
        public function get_logs($uid = FALSE)
        {       
                //echo "<script>alert('hisweety this is your model')</script>";
                if ($uid === FALSE)
                {
                       // $query = $this->db->get('prepassist');
                        //echo "<script>alert('hisweety this is your model')</script>";
                        return 0;
                }
                 $sql = "SELECT * from ur_logs WHERE uid = ".$uid;
                $query = $this->db->query($sql); 
                
                $results = $query->result();
                return $results;
        }
        public function get_alltotalhours($slab = FALSE)
        {       
                //echo "<script>alert('hisweety this is your model')</script>";
                if ($slab === FALSE)
                {
                       // $query = $this->db->get('prepassist');
                        //echo "<script>alert('hisweety this is your model')</script>";
                        return 0;
                }
                 $sql = "SELECT * from ur_logs WHERE slab = ".$slab;
                $query = $this->db->query($sql); 
                 $ath = 0;
                $results = $query->result();
                foreach($results as $row){
                    $ath = $ath + intval($row->clockedhours);
                }
                return $ath;
        }
         public function get_salreq($uid = FALSE, $slab = FALSE)
        {       
                //echo "<script>alert('hisweety this is your model')</script>";
                if ($slab === FALSE)
                {
                       // $query = $this->db->get('prepassist');
                        //echo "<script>alert('hisweety this is your model')</script>";
                        return 0;
                }
                 $sql = "SELECT * from ur_sals WHERE uid = '$uid' AND slab = '".$slab."'";
                $query = $this->db->query($sql); 
                $results = $query->result();
                
                return $results;
        }
           public function get_pendingreq()
        {       
            
                 $sql = "SELECT * from ur_users  RIGHT JOIN ur_sals ON ur_users.uid=ur_sals.uid WHERE ur_sals.status='0' OR ur_sals.status='1'";
                $query = $this->db->query($sql); 
                $results = $query->result();
                
                return $results;
        }
         public function approve_request($reqid=FALSE)
        {       
            
                 $sql = "UPDATE ur_sals SET status='3' WHERE reqid=$reqid";
                $query = $this->db->query($sql); 
                //$results = $query->result();
                
                return TRUE;;
        }
        public function deny_request($reqid=FALSE)
        {       
            
                 $sql = "UPDATE ur_sals SET status='2' WHERE reqid=$reqid";
                $query = $this->db->query($sql); 
                //$results = $query->result();
                
                return TRUE;;
        }
        public function review_request($reqid=FALSE)
        {       
            
                 $sql = "UPDATE ur_sals SET status='1' WHERE reqid=$reqid";
                $query = $this->db->query($sql); 
                //$results = $query->result();
                
                return TRUE;;
        }
         public function get_totalhours($uid = FALSE, $slab = FALSE)
        {       
                //echo "<script>alert('hisweety this is your model')</script>";
                if ($uid === FALSE)
                {
                       // $query = $this->db->get('prepassist');
                        //echo "<script>alert('hisweety this is your model')</script>";
                        return 0;
                }
                 $sql = "SELECT * from ur_logs WHERE uid = $uid AND slab = ".$slab;
                $query = $this->db->query($sql); 
                $th = 0;
                $results = $query->result();
                foreach($results as $row){
                    $th = $th + intval($row->clockedhours);
                }
                return $th;
        }
         public function get_totalsal($uid = FALSE, $slab = FALSE, $urep=0)
        {       
                //echo "<script>alert('hisweety this is your model')</script>";
                $totalhours = intval($this->get_totalhours($uid, $slab));
                //$bonus = intval(get_bonus($uid, $slab));
                $bonus = 0;
                switch(intval($urep)){
                    case 0:
                        $totalsal = 12*$totalhours + $bonus;
                        break;
                    case 1:
                        $totalsal = 21*$totalhours + 1.5*$bonus;
                        break;
                    case 2:
                        $totalsal = 34*$totalhours + 2*$bonus;
                        break;
                }
                return $totalsal;
        }
        public function validate_request($uid = FALSE, $slab = FALSE, $urep = 0, $comments = FALSE){
            
             if ($uid === FALSE)
                {
                       // $query = $this->db->get('prepassist');
                        //echo "<script>alert('hisweety this is your model')</script>";
                        return 0;
                }
                // TODO: HERE ------------------------------------------------------------------------
                $totalsal = $this->get_totalsal($uid, $slab, $urep);
                 $sql = "INSERT INTO ur_sals (uid, slab, totalsal, status, comments) VALUES ('$uid', '$slab', '$totalsal', '0', '$comments')";
                $query = $this->db->query($sql); 
                
                //$results = $query->result();
                
                return TRUE;
            
            
        }
        
        // ADMIN =======================================================
        
        public function get_emplist()
        {       
            //echo "<script>alert('hisweety this is your model')</script>";
            
           // $sql = "SELECT * from ur_users RIGHT JOIN ur_sals ON ur_users.uid=ur_sals.uid WHERE ur_users.urole = '0'";
           $sql = "SELECT * from ur_users, ur_sals WHERE ur_users.uid=ur_sals.uid AND ur_users.urole = '0'";
            //$sql = "SELECT * from ur_users WHERE urole = '0' UNION SELECT * FROM ur_sals ORDER BY uid";
            $query = $this->db->query($sql); 
            $results = $query->result();
            
            return $results;
        }
     
        
        
        
}