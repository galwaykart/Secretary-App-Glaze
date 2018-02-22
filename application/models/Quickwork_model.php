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
			$total_participants = $data[1]['employee'];
	
			$dept= $data[1]['department'];
			$employee= $data[1]['employee'];
			$name= $data[1]['name'];
			$email= $data[1]['email'];
	
	
			$fLen = count($total_participants);
					
			for($i = 0; $i < $fLen; $i++) {
				echo $i;
	
				$p_data = array(
					'p_department'=>$dept[$i],
					'employee'=>$employee[$i],
					'name'=>$name[$i],
					'p_email'=>$email[$i],
				   );
	
				$existing_array = array();
				$existing_array = $p_data;
				$new_array = array('daily_notes_id'=>$insert_id);
				$new_set_array = array_merge($existing_array, $new_array);
				//print_r($new_set_array);
				echo "<br>";
				 $this->db->insert('daily_notes_participents', $new_set_array);
			}
            
           
			}
	 
	}

	?>