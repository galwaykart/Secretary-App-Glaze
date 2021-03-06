<?php

	class Yearly_periodic_model extends CI_model{
		
		public function insertyear($data){
			$result = $this->db->insert('yearly_periodic', $data[0]);
			if($result){
			$insert_id = $this->db->insert_id();
			$delegates_name = $data[1]['yearly_periodic_delegates_name'];
			$delegates_email = $data[1]['yearly_periodic_delegates_email'];
			$delegates_phone = $data[1]['phone_number'];
			$totalname = sizeof($delegates_name);
			for($i=0;$i<$totalname;$i++) {
				$insertdelegate_to = $delegates_name[$i];
				$insertemail = $delegates_email[$i];
				$insertphone = $delegates_phone[$i];
				$sql = "insert into yearly_periodic_delegates(yearly_periodic_id,yearly_periodic_delegates_name,yearly_periodic_delegates_email,phone_number)
						values('$insert_id','$insertdelegate_to','$insertemail','$insertphone')";
				//print_r($sql);die;
				$this->db->query($sql);
				}
			}
		}

		public function getyear($year,$limit,$start){
			 $user_id = $this->session->userdata['id'];
			 $this->db->select('*');
			 $this->db->from('yearly_periodic');
			 $this->db->where('Year(yearly_periodic_start_date) <=',$year);
			 $this->db->where('Year(yearly_periodic_end_date) >=',$year);
			 $this->db->where("user_id", $user_id);
			 $this->db->limit($limit, $start);		
			 $query = $this->db->get();
		    // print_r($query->result()); 	
			 return $query->result();
		} 
		
		  public function record_count($year){
			 $user_id = $this->session->userdata['id'];
			 $query = $this->db->where('user_id', $user_id)
			 ->where('Year(yearly_periodic_start_date) <=',$year)
			 //->where('Year(yearly_periodic_end_date) >=',$year)
			 ->get('yearly_periodic');
			 return $query->num_rows();

			//print_r($query);die;
		  }
		 public function get_periodic_task($id){
			 $this->db->select('*');
			 $this->db->from('yearly_periodic');
			 $this->db->where('yearly_periodic_id',$id);
			 $data1 = $this->db->get();
    		//print_r($query->result()); 
			 $size =sizeof($data1->result());
			  if($size == 0){	
			   return false;
				 }
			 $this->db->select('*');
			 $this->db->from('yearly_periodic_delegates');
			 $this->db->where('yearly_periodic_id',$id);
			 $data2 = $this->db->get();
			 
			 $this->db->select('*');
			 $this->db->from('yearly_periodic_status');
			 $this->db->where('yearly_periodic_id',$id);
			 $data3 = $this->db->get();
			 
			 $list = array('data1'=>$data1->result(),
						   'data2'=>$data2->result(),
						   'data3'=>$data3->result(),
			 );
			return $list;
		}
 
		 public function updatetask($data ,$record_id){
		    $this->db->delete("yearly_periodic_delegates", "yearly_periodic_id = $record_id");
		    $this->db->delete("yearly_periodic_status", "yearly_periodic_id = $record_id");
			$delegates_name = $data[1]['yearly_periodic_delegates_name'];
			$delegates_email = $data[1]['yearly_periodic_delegates_email'];
			$delegates_phone = $data[1]['phone_number'];
			$totalname = sizeof($delegates_name);
			for($i=0;$i<$totalname;$i++) {
			$insertdelegate_to = $delegates_name[$i];
			$insertemail = $delegates_email[$i];
			$insertphone= $delegates_phone[$i];
			$sql = "insert into yearly_periodic_delegates(yearly_periodic_id,yearly_periodic_delegates_name,yearly_periodic_delegates_email,phone_number)
					values('$record_id','$insertdelegate_to','$insertemail','$insertphone')";	
			//	print_r($sql);die;
			$this->db->query($sql);
			}
			$status_date = $data[2]['yearly_periodic_status_date'];
			$status_note = $data[2]['yearly_periodic_status_note'];
			$totalname1 = sizeof($status_note);
			for($i=0;$i<$totalname1;$i++) {
			$insertstatus_date = $status_date[$i];
			$insertstatus_note = $status_note[$i];
			$sql1 = "insert into yearly_periodic_status(yearly_periodic_id,yearly_periodic_status_date,yearly_periodic_status_note)
					values('$record_id','$insertstatus_date','$insertstatus_note')	";
			//print_r($sql1);die;
			$this->db->query($sql1);	 
			  }
		 }
		 
		 public function changeStatus($id ,$status){
			$this->db->set('yearly_periodic_status',$status); 
			$this->db->set('yearly_periodic_end_date',date("Y-m-d")); 
            $this->db->where("yearly_periodic_id", $id); 
            $this->db->update("yearly_periodic");
			 echo "Hurray i am in";
		 }
	}
	
?>