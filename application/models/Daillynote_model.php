<?php
	class Daillynote_model extends CI_model{

		public function addDailyNotes($data){
			$output = $this->db->insert('daily_notes', $data[0]);
			if($output){
			$insert_id = $this->db->insert_id();
			$total_participants = $data[1]['employee'];

			$dept= $data[1]['department'];
			$employee= $data[1]['employee'];
			$name= $data[1]['name'];
			$email= $data[1]['email'];


			$fLen = count($total_participants);
					
			for($i = 0; $i < $fLen; $i++) {
				

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
				$result =	$this->db->insert('daily_notes_participents', $new_set_array);
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

		public function record_count() {
			
				  return $this->db->count_all("daily_notes");
			
			  }


		public function getDailyNotesList($limit, $start){
			$this->db->limit($limit, $start);
			$query = $this->db->get("daily_notes"); 


			if ($query->num_rows() > 0) {
				
				foreach ($query->result() as $row) {
	
					$data[] = $row;
	
				}
				//print_r($data);
				return $data;
				
				}
				
				return false;


			// $list_daily_notes = $query->result();
			// print_r($list_daily_notes);
			//return $list_daily_notes;

		}

		public function getDailyNotesListById($id){
			$query = $this->db->query("SELECT * ,DATE_FORMAT(	task_target_date,'%Y-%m-%d') AS endDate , DATE_FORMAT(	task_start_date,'%Y-%m-%d') AS startDate  FROM daily_notes
			 JOIN daily_notes_participents 
			 ON daily_notes.daily_notes_id = daily_notes_participents.daily_notes_id 
			 WHERE daily_notes.daily_notes_id = $id"); 
			$list_daily_notesById = $query->result();
			// print_r($list_daily_notesById);
			// die;
			return $list_daily_notesById;

		}

		public function updateDailyNotes($data ,$record_id){
			$this->db->delete("daily_notes_participents", "daily_notes_id = $record_id");
			$this->db->set($data[0]); 
			$this->db->where("daily_notes_id", $record_id); 
			$output = $this->db->update("daily_notes", $data[0]);
			if($output){


			$total_participants = $data[1]['employee'];
			

			$dept= $data[1]['department'];
			$employee= $data[1]['employee'];
			$name= $data[1]['name'];
			$email= $data[1]['email'];
			
			
					$fLen = count($total_participants);
							
			for($i = 0; $i < $fLen; $i++) {
				
	
				$p_data = array(
					'p_department'=>$dept[$i],
					'employee'=>$employee[$i],
					'name'=>$name[$i],
					'p_email'=>$email[$i],
					);
	
				$existing_array = array();
				$existing_array = $p_data;
				$new_array = array('daily_notes_id'=>$record_id);
				$new_set_array = array_merge($existing_array, $new_array);
				//print_r($new_set_array);
				echo "<br>";
				$result =	$this->db->insert('daily_notes_participents', $new_set_array);

				
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