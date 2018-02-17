<?php
class Indexmeeting_model extends CI_model{
	
	public function form_insert($data){
		
		$result = $this->db->insert('index_meeting', $data[0]);
		$insert_id=$this->db->insert_id();
		//echo $data[1]['name'];
		
		if($result){
			
			$name = $data[1]['name'];
			$dept = $data[1]['department'];
			$email = $data[1]['email'];
			$emp = $data[1]['employee'];
			// insert 2 or more data
			$totalname = sizeof($name);
			for($i=0;$i<$totalname;$i++) {
			$insertname=$name[$i];
			$insertdept=$dept[$i];
			$insertemail=$email[$i];
			$insertemp=$emp[$i];
			
			$sql1 = "insert into index_meeting_participants (index_meeting_id, name, department, email, employee)
					values ('$insert_id', '$insertname', '$insertdept', '$insertemail', '$insertemp')";
			$this->db->query($sql1);
			 }
			  $conclusion_type= $data[2]['conclusion_type'];
			  $conclusion_textarea= $data[2]['conclusion_textarea'];
			  $targetdate = $data[2]['targetdate'];
			  $delegated_dept= $data[2]['delegated_dept'];
			  $delegated_name= $data[2]['delegated_name'];
			  // insert 2 or more data
			  $totalname = sizeof($conclusion_type);
			  for($i=0;$i<$totalname;$i++) {
			  $inserttype=$conclusion_type[$i];
			  $insertarea=$conclusion_textarea[$i];
			  $insertdate=$targetdate[$i];
			  $insertdept=$delegated_dept[$i];
			  $insertdelegatedname=$delegated_name[$i];
			  
			  $sql2 = "insert into index_meeting_conclusion (index_meeting_id, conclusion_type, conclusion_textarea, targetdate, delegated_dept,delegated_name)
					  values ('$insert_id', '$inserttype', '$insertarea', '$insertdate', '$insertdept','$insertdelegatedname')";
			  $this->db->query($sql2);
			  }
		}
		//$this->db->insert('index_meeting_participants', $data[1]);
		//$this->db->insert('index_meeting_conclusion', $data[2]);
	}
	   public function get_allmeeting(){
		   $this->db->select('*');
		   $this->db->from('index_meeting');
		   $query=$this->db->get();
		   return $query->result();
		   	  if($query->num_rows()>0){
			      return false;
		     }else{
			      return true;
		         }
	   }
	
	   public function get_meeting_status($url_id){
		$this->db->select('*');
		$this->db->from('index_meeting');
		$this->db->join('index_meeting_participants','index_meeting.index_meeting_id=index_meeting_participants.index_meeting_id');
		$this->db->where('index_meeting.agenda_id',$url_id);
		$query = $this->db->get();
		return $query->result();

	   }
	   
public function get_meeting($id){
		$this->db->select("*"); 
		$this->db->from('index_meeting');
		$this->db->join('index_meeting_participants','index_meeting.index_meeting_id=index_meeting_participants.index_meeting_id');
		$this->db->where('index_meeting_participants.index_meeting_id',$id);
		$query = $this->db->get();
		return $query->result();
		
		}
		
		public function updatemeeting($data ,$record_id){
            $this->db->set($data[0]); 
            $this->db->where("index_meeting_id", $record_id); 
            $this->db->update("index_meeting", $data[0]);
        }
}