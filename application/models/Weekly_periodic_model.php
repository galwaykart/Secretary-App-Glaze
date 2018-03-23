<?php

	class Weekly_periodic_model extends CI_model{
		
        public function insertweekly($data){
					
            $result = $this->db->insert('weekly_periodic', $data[0]);
               if($result){
               $insert_id = $this->db->insert_id();
               $delegates_name = $data[1]['weekly_periodic_delegates_name'];
               $delegates_email = $data[1]['weekly_periodic_delegates_email'];
               $totalname = sizeof($delegates_name);
               for($i=0;$i<$totalname;$i++) {
                   $insertdelegate_to = $delegates_name[$i];
                   $insertemail = $delegates_email[$i];
               
                   $sql = "insert into weekly_periodic_delegates(weekly_periodic_id,weekly_periodic_delegates_name,weekly_periodic_delegates_email)
                           values('$insert_id','$insertdelegate_to','$insertemail')";
                   //print_r($sql);die;
                   $this->db->query($sql);
                   }
               }
            }
            
            public function getmonthly($month,$limit, $start){
                $year = 2018;
                $this->db->select('*');
                $this->db->from('weekly_periodic');
                $this->db->where('Month(weekly_periodic_start_date) <=',$month);
                $this->db->where('Month(weekly_periodic_end_date) >=',$month);
                $this->db->where('YEAR(weekly_periodic_end_date) >=',$year);
                $this->db->where('YEAR(weekly_periodic_end_date) >=',$year);
                $this->db->limit($limit, $start);
                $query = $this->db->get();
                //print_r($query->result()); 	die;
                return $query->result();
            }
            
            public function record_count($month){
                $this->db->select('*');
                $this->db->from('weekly_periodic');
                $this->db->where('Month(weekly_periodic_start_date) <=',$month);
                $this->db->where('Month(weekly_periodic_end_date) >=',$month);
                $query = $this->db->count_all_results();
                return $query;
   
               //print_r($query);die;
            }
            public function get_periodic_task($id){
                $this->db->select('*');
                $this->db->from('weekly_periodic');
                //$this->db->join('monthly_periodic_delegates',' monthly_periodic.monthly_periodic_id = monthly_periodic_delegates.monthly_periodic_id');
                $this->db->where('weekly_periodic_id',$id);
                $data1 = $this->db->get();
               //print_r($query->result()); 
                $size =sizeof($data1->result());
                 if($size == 0){	
                  return false;
                    }
                $this->db->select('*');
                $this->db->from('weekly_periodic_delegates');
                $this->db->where('weekly_periodic_id',$id);
                $data2 = $this->db->get();
                
                $this->db->select('*');
                $this->db->from('weekly_periodic_status');
                $this->db->where('weekly_periodic_id',$id);
                $data3 = $this->db->get();
                
                $list = array('data1'=>$data1->result(),
                              'data2'=>$data2->result(),
                              'data3'=>$data3->result(),
                );
               return $list;
            }
            public function updatetask($data ,$record_id){
               $this->db->delete("weekly_periodic_delegates", "weekly_periodic_id = $record_id");
               $this->db->delete("weekly_periodic_status", "weekly_periodic_id = $record_id");
   
               
               $delegates_name = $data[1]['weekly_periodic_delegates_name'];
               $delegates_email = $data[1]['weekly_periodic_delegates_email'];
               $totalname = sizeof($delegates_name);
               for($i=0;$i<$totalname;$i++) {
               $insertdelegate_to = $delegates_name[$i];
               $insertemail = $delegates_email[$i];
               $sql = "insert into weekly_periodic_delegates(weekly_periodic_id,weekly_periodic_delegates_name,weekly_periodic_delegates_email)
                       values('$record_id','$insertdelegate_to','$insertemail')";
               //	print_r($sql);die;
               $this->db->query($sql);
               }
               $status_date = $data[2]['weekly_periodic_status_date'];
               $status_note = $data[2]['weekly_periodic_status_note'];
               $totalname1 = sizeof($status_note);
               for($i=0;$i<$totalname1;$i++) {
               $insertstatus_date = $status_date[$i];
               $insertstatus_note = $status_note[$i];
               $sql1 = "insert into weekly_periodic_status(weekly_periodic_id,weekly_periodic_status_date,weekly_periodic_status_note)
                       values('$record_id','$insertstatus_date','$insertstatus_note')	";
               //print_r($sql1);die;
               $this->db->query($sql1);	 
                 }
                 //echo "success";
            }
		 	
    }
    

    
	
?>