<?php
	class Daillynote_model extends CI_model{

		public function addDailyNotes($data){
		$this->db->insert('daily_notes', $data[0]);
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


		public function getDailyNotesList(){
			$query = $this->db->get("daily_notes"); 
			$list_daily_notes = $query->result();
			// print_r($list_daily_notes);
			return $list_daily_notes;

		}

		public function getDailyNotesListById($id){
			$query = $this->db->query("SELECT * FROM daily_notes
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
			$this->db->update("daily_notes", $data[0]);


			$total_participants = $data[1]['employee'];
			echo $total_participants;

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
						$new_array = array('daily_notes_id'=>$record_id);
						$new_set_array = array_merge($existing_array, $new_array);
						//print_r($new_set_array);
						echo "<br>";
						 $this->db->insert('daily_notes_participents', $new_set_array);
					}
				}


		



	} 