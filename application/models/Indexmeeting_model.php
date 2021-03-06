<?php
class Indexmeeting_model extends CI_model{
	
	// insert data
	public function form_insert($data,$data1){
	    $query = $this->db->query("select agenda_id FROM index_meeting_agenda WHERE agenda_name='$data1'");
		//print_r($query->result());
		$result_set = $query->result();
		$count = sizeof($query->result());
		//print_r($count);
		if($count == 0){
		//echo "inserted"; die();
		$result = $this->db->insert('index_meeting_agenda', $data[3]);
		$insert_id = $this->db->insert_id();
		if($result){
			$date_of_meeting=$data[0]['date_of_meeting'];
			$confidentiality=$data[0]['confidentiality'];
			$self_seating=$data[0]['self_seating'];
			$index_meeting_next_date = $data[0]['index_meeting_next_date'];
			$index_meeting_start_time = $data[0]['index_meeting_start_time'];
			$index_meeting_end_time = $data[0]['index_meeting_end_time'];
			$meeting_called_by = $data[0]['meeting_called_by'];
			$user_id = $data[0]['user_id'];
			$sql3="insert into index_meeting (date_of_meeting,agenda_id,confidentiality,self_seating,index_meeting_next_date,index_meeting_start_time,index_meeting_end_time ,user_id,meeting_called_by)values('$date_of_meeting','$insert_id','$confidentiality','$self_seating','$index_meeting_next_date','$index_meeting_start_time','$index_meeting_end_time' , '$user_id','$meeting_called_by')";
			$this->db->query($sql3);
			$insert_id2=$this->db->insert_id();
			$name = $data[1]['name'];
			$dept = $data[1]['department'];
			$email = $data[1]['email'];
			$emp = $data[1]['employee'];
			$is_employee = $data[1]['is_employee'];
			$phone_number = $data[1]['phone_number'];
			// insert 2 or more data
			$totalname = sizeof($name);
			for($i=0;$i<$totalname;$i++) {
			$insertname=$name[$i];
			$insertdept=$dept[$i];
			$insertemail=$email[$i];
			$insertemp=$emp[$i];
			$insertis_employee=$is_employee[$i];
			$insertphone_number=$phone_number[$i];
			
			$sql1 = "insert into index_meeting_participants (index_meeting_id, name, department, email, employee,is_employee,phone_number)
					values ('$insert_id2', '$insertname', '$insertdept', '$insertemail', '$insertemp','$insertis_employee','$insertphone_number')";
			$this->db->query($sql1);
			 }
			// echo $sql1; die;
			  $conclusion_type= $data[2]['conclusion_type'];
			  $conclusion_textarea= $data[2]['conclusion_textarea'];
			  $targetdate = $data[2]['targetdate'];
			  $delegated_dept= $data[2]['delegated_dept'];
			  $delegated_name= $data[2]['delegated_name'];
			  // insert 2 or more data
			  $totalname1 = sizeof($conclusion_type);
			  for($i=0;$i<$totalname1;$i++) {
			  $inserttype=$conclusion_type[$i];
			  $insertarea=$conclusion_textarea[$i];
			  $insertdate=$targetdate[$i];
			  $insertdept=$delegated_dept[$i];
			  $insertdelegatedname=$delegated_name[$i];
			  
			  $sql2 = "insert into index_meeting_conclusion (index_meeting_id, conclusion_type, conclusion_textarea, targetdate, delegated_dept,delegated_name)
					  values ('$insert_id2', '$inserttype', '$insertarea', '$insertdate', '$insertdept','$insertdelegatedname')";
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
			$index_meeting_next_date = $data[0]['index_meeting_next_date'];
			$index_meeting_start_time = $data[0]['index_meeting_start_time'];
			$index_meeting_end_time = $data[0]['index_meeting_end_time'];
			$user_id = $data[0]['user_id'];
			$meeting_called_by = $data[0]['meeting_called_by'];
			$sql3="insert into index_meeting (date_of_meeting,agenda_id,confidentiality,self_seating,index_meeting_next_date ,index_meeting_start_time,index_meeting_end_time,user_id,meeting_called_by)values('$date_of_meeting','$insert_id','$confidentiality','$self_seating','$index_meeting_next_date','$index_meeting_start_time','$index_meeting_end_time','$user_id','$meeting_called_by')";
			$this->db->query($sql3);
			$insert_id1=$this->db->insert_id();
			
			$name = $data[1]['name'];
			$dept = $data[1]['department'];
			$email = $data[1]['email'];
			$emp = $data[1]['employee'];
			$is_employee = $data[1]['is_employee'];
			$phone_number = $data[1]['phone_number'];
			// insert 2 or more data
			$totalname = sizeof($name);
			for($i=0;$i<$totalname;$i++) {
			$insertname=$name[$i];
			$insertdept=$dept[$i];
			$insertemail=$email[$i];
			$insertemp=$emp[$i];
			$insertis_employee=$is_employee[$i];
			$insertphone_number=$phone_number[$i];
			$sql1 = "insert into index_meeting_participants (index_meeting_id, name, department, email, employee,is_employee,phone_number)
					values ('$insert_id1', '$insertname', '$insertdept', '$insertemail', '$insertemp','$insertis_employee','$insertphone_number')";
			$this->db->query($sql1);
			 }
			  $conclusion_type= $data[2]['conclusion_type'];
			  $conclusion_textarea= $data[2]['conclusion_textarea'];
			  $targetdate = $data[2]['targetdate'];
			  $delegated_dept= $data[2]['delegated_dept'];
			  $delegated_name= $data[2]['delegated_name'];
			  // insert 2 or more data
			  $totalname1 = sizeof($conclusion_type);
			  for($i=0;$i<$totalname1;$i++) {
			  $inserttype=$conclusion_type[$i];
			  $insertarea=$conclusion_textarea[$i];
			  $insertdate=$targetdate[$i];
			  $insertdept=$delegated_dept[$i];
			  $insertdelegatedname=$delegated_name[$i];
			  
			  $sql2 = "insert into index_meeting_conclusion (index_meeting_id, conclusion_type, conclusion_textarea, targetdate, delegated_dept,delegated_name)
					  values ('$insert_id1', '$inserttype', '$insertarea', '$insertdate', '$insertdept','$insertdelegatedname')";
			 $this->db->query($sql2);
			  		  }
			}  
		}
			//echo $sql2; die;
		//$this->db->insert('index_meeting_participants', $data[1]);
		//$this->db->insert('index_meeting_conclusion', $data[2]);
	}
		//get all meetings
	   public function get_allmeeting($limit, $start){
		   $result = array();
		   $user_id = $this->session->userdata['id'];
		   $this->db->limit($limit, $start);
		   $this->db->where("user_id", $user_id);
		   $this->db->select('index_meeting.agenda_id');
		   $this->db->distinct();
		   $query= $this->db->get('index_meeting');

		   //$query = $this->db->query("SELECT DISTINCT index_meeting.agenda_id FROM index_meeting  ");
		 $res = $query->result(); 
		  if($res){
			 
			  $counting = sizeof($res);
			  for($i=0 ;$i<$counting ; $i++){
					//echo $res[$i]->agenda_id;
					$agenda_id = $res[$i]->agenda_id;
					$query = $this->db->query("SELECT DISTINCT index_meeting.agenda_id ,index_meeting.index_meeting_next_date,index_meeting_agenda.agenda_name ,meeting_called_by,agenda_status,index_meeting_id,(select count(index_meeting.agenda_id) from index_meeting where index_meeting.agenda_id = $agenda_id) as counter FROM index_meeting JOIN index_meeting_agenda on index_meeting.agenda_id=index_meeting_agenda.agenda_id where index_meeting.agenda_id = $agenda_id and index_meeting.user_id=$user_id ");
					$output = $query->result();
					$result[$i] =  $output[0];
			  }
			 // print_r($result);
		  }
		   return $result;

	   }
	   // pagination count for all meetings
	   public function record_count(){
		   $user_id = $this->session->userdata['id'];
		   $this->db->where("user_id", $user_id);
		   $this->db->select('index_meeting.agenda_id');
		   $this->db->from('index_meeting');
		   $this->db->distinct();
		   $query = $this->db->count_all_results();//count all the results 
		 //  print_r($query);die;
		   return $query;
	   }
	   // get meeting status
	   public function get_meeting_status($limit,$offset,$url_id){
			$this->db->select('*');
			$this->db->from('index_meeting');
			$this->db->join('index_meeting_agenda','index_meeting.agenda_id=index_meeting_agenda.agenda_id','left');
			$this->db->where('index_meeting.agenda_id',$url_id);
			$this->db->limit($limit,$offset);
			$query = $this->db->get();
			return $query->result();
	   }
	   // pagination code for meeting status
	   	public function record_counting($url_id){
			$user_id = $this->session->userdata['id'];
			$this->db->select('count(*)');
			$this->db->from('index_meeting');
			$this->db->join('index_meeting_agenda','index_meeting.agenda_id=index_meeting_agenda.agenda_id','left');
			$this->db->where('index_meeting.agenda_id',$url_id)
			->where('user_id', $user_id);
			$num_results = $this->db->count_all_results();
			return $num_results;
	   }
	   
	    public function get_meeting($id){
			$this->db->select('*');
			$this->db->from('index_meeting') ;
			$this->db->join('index_meeting_participants' , 'index_meeting.index_meeting_id = index_meeting_participants.index_meeting_id','left') ;
			$this->db->where('index_meeting.index_meeting_id', $id); 
			$data1 = $this->db->get();
			//echo sizeof($data1->result());
			//echo sizeof($data1->result());
			$size =sizeof($data1->result());
			if($size == 0){
			//echo "I am in.";
				return false;
			}
			//print_r($data1->result());die;
			$this->db->select('*');
			$this->db->from('index_meeting ') ;
			$this->db->join('index_meeting_agenda  ' , 'index_meeting.agenda_id=index_meeting_agenda.agenda_id','left') ;
			$this->db->where('index_meeting.index_meeting_id', $id); 
			$data2 = $this->db->get();
			
			// 2nd query of $data2 
			//Select agenda_name, agenda_id from index_meeting_agenda where agenda_id = (Select agenda_id from index_meeting Where index_meeting.index_meeting_id = 22)
			// end of 2nd query of $data2
			$this->db->select('*');
			$this->db->from('index_meeting') ;
			$this->db->join('index_meeting_conclusion' , 'index_meeting.index_meeting_id = index_meeting_conclusion.index_meeting_id') ;
			$this->db->where('index_meeting.index_meeting_id', $id); 
			$data3 = $this->db->get();
		

				 $fetch = array('data1'=>$data1->result(),
								'data2'=>$data2->result(),
								'data3'=>$data3->result(),
				 );
				return $fetch;
			}
		
		// update the meeting
		public function updatemeeting($data ,$record_id){
			$this->db->delete("index_meeting_participants", "index_meeting_id = $record_id");
			$this->db->delete("index_meeting_conclusion", "index_meeting_id = $record_id");
            $this->db->set($data[0]); 
            $this->db->where("index_meeting_id", $record_id); 
            $this->db->update("index_meeting", $data[0]);
			$name = $data[1]['name'];
			$dept = $data[1]['department'];
			$email = $data[1]['email'];
			$emp = $data[1]['employee'];
			$is_employee = $data[1]['is_employee'];
			$phone_number = $data[1]['phone_number'];
			// insert 2 or more data
			$totalname = sizeof($name);
			for($i=0;$i<$totalname;$i++) {
			$insertname=$name[$i];
			$insertdept=$dept[$i];
			$insertemail=$email[$i];
			$insertemp=$emp[$i];
			$insertis_employee=$is_employee[$i];
			$insertphone_number = $phone_number[$i];
			
			$sql1 = "insert into index_meeting_participants (index_meeting_id, name, department, email, employee,is_employee,phone_number)
					 values ('$record_id', '$insertname', '$insertdept', '$insertemail', '$insertemp','$insertis_employee','$insertphone_number')";
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
		//this function is used for suggested search
		public function getagenda($keyword){
			$this->db->select('*');
			$this->db->from('index_meeting_agenda');
		   //$this->db->where('agenda_name', 0);
			$this->db->like('agenda_name', $keyword,'after');
			$query = $this->db->get();
			return $query->result();
        }
		
		public function changeStatus($id ,$status){
			$this->db->set('agenda_status',$status);
            $this->db->where("index_meeting_id", $id); 
            $this->db->update("index_meeting");
		 }
}