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



		public function getProjectDelegationStatus($record_id){
			$query = $this->db->get_where("project_delegation_status",array("project_delegation_id"=>$record_id)); 
			
			
					if ($query->num_rows() > 0) {
												

						foreach ($query->result() as $row) {
			
							$status_data[] = $row;
			
						}

						$query_delegates = $this->db->query("SELECT * FROM `project_delegation` JOIN project_delegation_delegates ON project_delegation.project_delegation_id = project_delegation_delegates.project_delegation_id WHERE project_delegation.project_delegation_id = $record_id"); 
						$delegates_data =array();
						if ($query_delegates->num_rows() > 0) {

							
							foreach ($query_delegates->result() as $row) {
								
							$delegates_data[] = $row;

							}
						}
						
						$query_dates = $this->db->get_where("project_delegation_dates",array("project_delegation_id"=>$record_id));
						
						$delegates_date_data =array();
						if ($query_dates->num_rows() > 0) {

							
							foreach ($query_dates->result() as $row) {
								
							$delegates_date_data[] = $row;

							}
						}

						$project_data = array("status_data"=>$status_data, "delegates_data"=>$delegates_data , "delegates_date_data"=>$delegates_date_data);

			
						return $project_data;
						
						}
						
						return false;
		}


		public function addProjectDelegationStatus($data){
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";die;
			$output = $this->db->insert('project_delegation_status', $data[0]);
			if($output){
				return true;
			}else{
				return false;
			}
		}


		
		public function joinData(){
			 $res= $this->db->query('SELECT * FROM `project_delegation_status` JOIN `project_delegation_delegates` ON project_delegation_status.project_delegation_id = project_delegation_delegates.project_delegation_id WHERE project_delegation_status.project_delegation_id = 1');
			 echo "<pre>";
			print_r($res->result());
			echo "</pre>";
		}
		
		
		public function UpdateDelegates($data){
			//print_r($data);die;
			$record_id = $data['project_delegation_id'];
			$extend_date__data = array(
				'project_delegation_id' => $record_id,
				'project_delegation_dates_extend_date'=>$data['extend_date'],
				'project_delegation_dates_remark'=>$data['reason']
			); 
			$status = $this->db->delete("project_delegation_delegates", "project_delegation_id = $record_id");
			if($status){

				for($i=0; $i<sizeof($data['delegates_name']) ; $i++){
					$name = $data['delegates_name'][$i];
					$email = $data['delegates_email'][$i];
					$res = $this->db->query("INSERT INTO project_delegation_delegates (project_delegation_id, project_delegation_delegated_name, project_delegation_delegated_email) VALUES ($record_id,'$name','$email')");
				}
				if($data['extend_date'] != null && $data['reason'] != null){
					$output_extend_date = $this->db->insert('project_delegation_dates', $extend_date__data);
				}
			}

			if($output_extend_date || $res){
				return true;
			}else{
				return false;
			}
			
		}
 

	}


?>
