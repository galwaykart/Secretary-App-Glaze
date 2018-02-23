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
			$insert_id = $this->db->insert_id();
			$total_participants = $data[1]['delegates_name'];
	
			$name= $data[1]['delegates_name'];
			$email= $data[1]['delegates_email'];
	
	
			$fLen = count($total_participants);
					
			for($i = 0; $i < $fLen; $i++) {
				echo $i;
	
				$p_data = array(
					'delegates_name'=>$name[$i],
					'delegates_email'=>$email[$i],
				   );
	
				$existing_array = array();
				$existing_array = $p_data;
				$new_array = array('quick_work_id'=>$insert_id);
				$new_set_array = array_merge($existing_array, $new_array);
				//print_r($new_set_array);
				echo "<br>";
				 $this->db->insert('quick_work_delegates', $new_set_array);
			}
            
           
			}
	 
	}

	?>