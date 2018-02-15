<?php
class Indexmeeting_model extends CI_model{
	
	public function form_insert($data){
		$result = $this->db->insert('index_meeting', $data[0]);

		//echo $data[1]['name'];
		if($result){
			$name = $data[1]['name'];
			$dept = $data[1]['department'];
			$email = $data[1]['email'];
			$emp = $data[1]['employee'];
			$sql1 = "insert into index_meeting_participants (index_meeting_id, name, department, email, employee)
					values (LAST_INSERT_ID(), '$name', '$dept', '$email', '$emp')";

		
			// $conclusion_type= $data[2]['conclusion_type'];
			// $conclusion_textarea= $data[2]['conclusion_textarea'];
			// $targetdate= $data[2]['targetdate'];
			// $delegated_dept= $data[2]['delegated_dept'];
			// $delegated_name= $data[2]['delegated_name'];
			// $sql2 = "insert into index_meeting_conclusion (index_meeting_id, conclusion_type, conclusion_textarea, targetdate, delegated_dept,delegated_name)
					// values (LAST_INSERT_ID(), '$conclusion_type', '$conclusion_textarea', '$targetdate', '$delegated_dept','$delegated_name')";
			// $this->db->query($sql1,$sql2);

		}
		//$this->db->insert('index_meeting_participants', $data[1]);
		//$this->db->insert('index_meeting_conclusion', $data[2]);
	}

	   public function get_meeting_status(){
		$this->db->select('*');
		$this->db->from('index_meeting');
		$this->db->join('index_meeting_participants','index_meeting.index_meeting_id=index_meeting_participants.index_meeting_id');
		$query = $this->db->get();
		return $query->result();
		if ($result->num_rows() > 0) {
		return $result->result();
		} else {
		return FALSE;
			}

	   }
	   
public function get_meeting(){
		$this->db->select("*"); 
		$this->db->from('index_meeting');
		$this->db->join('index_meeting_participants','index_meeting.index_meeting_id=index_meeting_participants.index_meeting_id');
		

		$query = $this->db->get();
		return $query->result();
		if ($result->num_rows() > 0) {
		return $result->result();
		} else {
		return FALSE;
			}
		}
}