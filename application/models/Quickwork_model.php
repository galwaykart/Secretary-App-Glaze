<?php
	class Quickwork_model extends CI_model{
		public function getQuickworkList(){
			$query = $this->db->get("quick_work"); 
			$list_quickwork = $query->result();
			// print_r($list_daily_notes);
			return $list_quickwork;

        }
        
        public function addQuickwork($data){
            echo $this->db->insert('quick_work', $data[0]);
            
           
            }
    
    
    
    
            
	 
	}

	?>