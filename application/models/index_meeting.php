<?php
class index_meeting extends CI_model{
	
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
		$this->db->where('index_meeting_participants.index_meeting_id','102');
		$query = $this->db->get();
		return $query->result();
		if ($result->num_rows() > 0) {
		return $result->result();
		} else {
		return FALSE;
			}
		}
}