<?php
class Indexmeeting_model extends CI_model{
	
	public function form_insert($data,$data1){
	    $query = $this->db->query("select agenda_id FROM index_meeting_agenda WHERE agenda_name='$data1'");
		//print_r($query->result());
		$result_set = $query->result();
		$count = sizeof($query->result());
		//print_r($count);
		if($count == 0){
		//echo "inserted"; die();
		$result = $this->db->insert('index_meeting_agenda', $data[3]);
		$insert_id=$this->db->insert_id();
		if($result){
			
			$date_of_meeting=$data[0]['date_of_meeting'];
			$confidentiality=$data[0]['confidentiality'];
			$self_seating=$data[0]['self_seating'];
			$sql3="insert into index_meeting (date_of_meeting,agenda_id,confidentiality,self_seating)values('$date_of_meeting','$insert_id','$confidentiality','$self_seating')";
			$this->db->query($sql3);
			$insert_id1=$this->db->insert_id();
			
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
					values ('$insert_id1', '$insertname', '$insertdept', '$insertemail', '$insertemp')";
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
			  $insertdate=$tarIndexmeeting_modelgetdate[$i];
			  $insertdept=$delegated_dept[$i];
			  $insertdelegatedname=$delegated_name[$i];
			  
			  $sql2 = "insert into index_meeting_conclusion (index_meeting_id, conclusion_type, conclusion_textarea, targetdate, delegated_dept,delegated_name)
					  values ('$insert_id1', '$inserttype', '$insertarea', '$insertdate', '$insertdept','$insertdelegatedname')";
			  $this->db->query($sql2);
			  }
			} 
		
		}
		else{
		//echo "same id";
		$insert_id = $result_set[0]->agenda_id;
		

		if($result || $result_set ){
			
			$date_of_meeting=$data[0]['date_of_meeting'];
			$confidentiality=$data[0]['confidentiality'];
			$self_seating=$data[0]['self_seating'];
			$sql3="insert into index_meeting (date_of_meeting,agenda_id,confidentiality,self_seating)values('$date_of_meeting','$insert_id','$confidentiality','$self_seating')";
			$this->db->query($sql3);
			$insert_id1=$this->db->insert_id();
			
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
					values ('$insert_id1', '$insertname', '$insertdept', '$insertemail', '$insertemp')";
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
			  $insertdate=$tarIndexmeeting_modelgetdate[$i];
			  $insertdept=$delegated_dept[$i];
			  $insertdelegatedname=$delegated_name[$i];
			  
			  $sql2 = "insert into index_meeting_conclusion (index_meeting_id, conclusion_type, conclusion_textarea, targetdate, delegated_dept,delegated_name)
					  values ('$insert_id1', '$inserttype', '$insertarea', '$insertdate', '$insertdept','$insertdelegatedname')";
			  $this->db->query($sql2);
			  }
			}  
		}
			
		//$this->db->insert('index_meeting_participants', $data[1]);
		//$this->db->insert('index_meeting_conclusion', $data[2]);
	}
	   public function get_allmeeting(){
		   $result = array();
		   $query = $this->db->query("SELECT DISTINCT index_meeting.agenda_id FROM index_meeting");
		 $res = $query->result(); 
		  if($res){
			  $counting = sizeof($res);
			  for($i=0 ;$i<$counting ; $i++){
					//echo $res[$i]->agenda_id;
					$agenda_id = $res[$i]->agenda_id;
					$query = $this->db->query("SELECT DISTINCT index_meeting.agenda_id,(select count(index_meeting.agenda_id) from index_meeting  where index_meeting.agenda_id = $agenda_id) as counter FROM index_meeting  where index_meeting.agenda_id = $agenda_id");
					$output = $query->result();
					$result[$i] =  $output[0];
			  }
			 // print_r($result);
		  }
		   return $result;
		   
		   

		  
		   //$query = $this->db->query("SELECT DISTINCT index_meeting.agenda_id ,COUNT(index_meeting.index_meeting_id)FROM index_meeting join index_meeting_participants ON index_meeting.index_meeting_id=index_meeting_participants.index_meeting_id"); 
		  // $list = $query->result();
			//return $list;
		   
		   	// $this->db->distinct("");
		   // $this->db->select('*');
		   // $this->db->from('index_meeting');
		   // $query=$this->db->get();
		   // return $query->result();

	   }
	
	   public function get_meeting_status($url_id){
		$this->db->select('*');
		$this->db->from('index_meeting');
		$this->db->join('index_meeting_agenda','index_meeting.agenda_id=index_meeting_agenda.agenda_id','left');
		$this->db->where('index_meeting.agenda_id',$url_id);
		$query = $this->db->get();
		return $query->result();

	   }
	   
	    public function get_meeting($id){
		$this->db->select("*"); 
		$this->db->from('index_meeting');
		$this->db->join('index_meeting_participants','index_meeting.index_meeting_id=index_meeting_participants.index_meeting_id','left');
		$this->db->join('index_meeting_agenda','index_meeting.agenda_id=index_meeting_agenda.agenda_id','left');
		$this->db->join('index_meeting_conclusion','index_meeting.index_meeting_id=index_meeting_conclusion.index_meeting_id','left');
		$this->db->where('index_meeting_participants.index_meeting_id',$id);
		$query = $this->db->get();
		return $query->result();
		
		}
		public function updatemeeting($data ,$record_id){
			$this->db->delete("index_meeting_participants", "index_meeting_id = $record_id");
            $this->db->set($data[0]); 
            $this->db->where("index_meeting_id", $record_id); 
            $this->db->update("index_meeting", $data[0]);
			
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
					values ('$record_id', '$insertname', '$insertdept', '$insertemail', '$insertemp')";
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
					  values ('$record_id', '$inserttype', '$insertarea', '$insertdate', '$insertdept','$insertdelegatedname')";
			  $this->db->query($sql2);
			  }

        }
		public function getagenda($keyword){
		
		$this->db->select('*');
        $this->db->from('index_meeting_agenda');
       //$this->db->where('agenda_name', 0);
        $this->db->like('agenda_name', $keyword,'after');
		$query = $this->db->get();
        return $query->result();
        }
		


}