<?php
	class Quickwork_model extends CI_model{

		public function record_count() {
					$user_id = $this->session->userdata['id'];
					$query = $this->db->where('user_id', $user_id)->get('quick_work');
					return $query->num_rows();
				  
			
			  }




		public function getQuickworkList($limit, $start){
			$user_id = $this->session->userdata['id'];
			$this->db->limit($limit, $start);
			$this->db->where("user_id", $user_id);
				  $query = $this->db->get("quick_work");

				  if ($query->num_rows() > 0) {
			
					  foreach ($query->result() as $row) {
			
						  $data[] = $row;
			
					  }
					  
					  return $data;
			
				  }
			
				  return false;
			// $query = $this->db->get("quick_work"); 
			// $list_quickwork = $query->result();
			// // print_r($list_daily_notes);
			// return $list_quickwork;

		}
		
		public function getQuickworkByList($id){
			$query = $this->db->query("SELECT *,DATE_FORMAT(date,'%Y-%m-%d') AS niceDate, DATE_FORMAT(target_date,'%Y-%m-%d') AS targetDate FROM quick_work
			JOIN quick_work_delegates 
			ON quick_work.quick_work_id = quick_work_delegates.quick_work_id 
			WHERE quick_work.quick_work_id = $id"); 
		   $list_quickworkById = $query->result();
		   //print_r($list_quickworkById);
		   return $list_quickworkById;
		}
        
        public function addQuickwork($data){
			$output = $this->db->insert('quick_work', $data[0]);
			 if($output){
				$insert_id = $this->db->insert_id();
				$total_participants = $data[1]['delegates_name'];
		
				$name= $data[1]['delegates_name'];
				$email= $data[1]['delegates_email'];
		
		
				$fLen = count($total_participants);
						
				for($i = 0; $i < $fLen; $i++) {
					//echo $i;
		
					$p_data = array(
						'delegates_name'=>$name[$i],
						'delegates_email'=>$email[$i],
					   );
		
					$existing_array = array();
					$existing_array = $p_data;
					$new_array = array('quick_work_id'=>$insert_id);
					$new_set_array = array_merge($existing_array, $new_array);
					 $result = $this->db->insert('quick_work_delegates', $new_set_array);
				}

				if($result)
				{
				return true;
				
				}
				else
				{
				return false;
				
				}


			 }			
            
           
			}


			public function updateQuickwork($data ,$record_id){
				$this->db->delete("quick_work_delegates", "quick_work_id = $record_id");
				$this->db->set($data[0]); 
				$this->db->where("quick_work_id", $record_id); 
				$output = $this->db->update("quick_work", $data[0]);
				if($output){
						$delegates_name= $data[1]['delegates_name'];
						$delegates_email= $data[1]['delegates_email'];
				
				
						$fLen = count($delegates_name);
						//echo "upadating the delegates";		
						for($i = 0; $i < $fLen; $i++) {
							//echo $i;
				
							$p_data = array(
								'delegates_name'=>$delegates_name[$i],
								'delegates_email'=>$delegates_email[$i],
							   );
				
							$existing_array = array();
							$existing_array = $p_data;
							$new_array = array('quick_work_id'=>$record_id);
							$new_set_array = array_merge($existing_array, $new_array);
							$result = $this->db->insert('quick_work_delegates', $new_set_array);
							
						}
						if($result)
						{
						return true;
						
						}
						else
						{
						return false;
						
						}
					}
				}
	 
	}

	?>