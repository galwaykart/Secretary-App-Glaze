<?php
class Projectdelegation_model extends CI_model{

	public function getprojectdelegation($limit, $start){

		$this->db->limit($limit, $start);
		$query = $this->db->get("project_delegation"); 


		if ($query->num_rows() > 0) {
			
			foreach ($query->result() as $row) {

				$data[] = $row;

			}

			return $data;
			
			}
			
			return false;

	}


	public function record_count() {
		
			  return $this->db->count_all("project_delegation");
			  
		
		  }


		public function  addProjectDelegation($data){
			$output = $this->db->insert('project_delegation', $data[0]);
			if($output){
			$insert_id = $this->db->insert_id();
			$total_participants = $data[1]['delegates_name'];
	
			$name= $data[1]['delegates_name'];
			$email= $data[1]['delegates_email'];
	
	
			$fLen = count($total_participants);
					
			for($i = 0; $i < $fLen; $i++) {
			   // echo $i;
	
				$p_data = array(
					'project_delegation_delegated_name'=>$name[$i],
					'project_delegation_delegated_email'=>$email[$i],
				   );
	
				$existing_array = array();
				$existing_array = $p_data;
				$new_array = array('project_delegation_id'=>$insert_id);
				$new_set_array = array_merge($existing_array, $new_array);
				//print_r($new_set_array);
				//echo "<br>";
				$result = $this->db->insert('project_delegation_delegates', $new_set_array);
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
