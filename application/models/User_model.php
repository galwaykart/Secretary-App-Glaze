<?php
class User_model extends CI_model{



public function register_user($user){

	$this->db->insert('user', $user);

	}

public function login_user($username,$pass){
 
	  $this->db->select('*');
	  $this->db->from('user');
	  $this->db->where('username',$username);
	  $this->db->where('password',$pass);

	  if($query = $this->db->get())
	  {
		  return $query->row_array();
	  }
	  else{
		return false;
	  }


	}
public function username_check($username){

	  $this->db->select('*');
	  $this->db->from('user');
	  $this->db->where('username',$username);
	  $query=$this->db->get();
	  if($query->num_rows()>0){
		return false;
	  }else{
		return true;
	  }

	}


	public function getDashboardDetails(){
		$query1 = $this->db->query('SELECT *  FROM `index_meeting` JOIN index_meeting_agenda ON index_meeting.agenda_id = index_meeting_agenda.agenda_id WHERE `date_of_meeting` = CURDATE()');

		$query2 = $this->db->query('SELECT * FROM `daily_notes` WHERE `task_start_date` = CURDATE()');

		$query3 = $this->db->query('SELECT COUNT(*) AS `total_works` FROM `quick_work` WHERE `date` = CURDATE()');

		$query4 = $this->db->query('SELECT COUNT(*) AS `total_projects` FROM `project_delegation`  WHERE `project_delegation_date`  = CURDATE()');

		$query5 = $this->db->query('SELECT *   FROM `appointment` WHERE DATE_FORMAT(`appointment_start_time`, "%Y-%m-%d")  = CURDATE()');

		$query71 = $this->db->query('SELECT COUNT(*) AS total_yearlyTask FROM `yearly_periodic` WHERE DAY(CURDATE()) = DAY(yearly_periodic_start_date) AND  MONTH(CURDATE()) = MONTH(yearly_periodic_start_date) AND YEAR(CURDATE()) <= YEAR(yearly_periodic_end_date)');

		$query72 = $this->db->query('SELECT COUNT(*) AS total_monthlyTask FROM `monthly_periodic` WHERE DAY(CURDATE()) = DAY(`monthly_start_date`) AND YEAR(CURDATE()) <= YEAR(`monthly_periodic_end_date`)');

		$query73 = $this->db->query('SELECT COUNT(*) AS total_weeklyTask FROM `weekly_periodic` WHERE WEEKDAY(CURDATE()) = WEEKDAY(weekly_periodic_start_date) AND YEAR(CURDATE()) <= YEAR(weekly_periodic_end_date)');
		
		$total_periodic = $query71-> result()[0]->total_yearlyTask + 
		$query72-> result()[0]->total_monthlyTask +
		$query73-> result()[0]->total_weeklyTask ;
		// echo "<pre>";
		// print_r($query2->result());
		// echo "</pre>";

		$total_dashboard_details = array(
			"index_meeting" => array("data"=>$query1->result() , "count" => sizeof($query1->result())),
			"daily_notes" => array("data"=>$query2->result() , "count" => sizeof($query2->result())),
			"quick_work" => $query3->result(),
			"project_delegation" => $query4->result(),
			"appointment" => array("data"=>$query5->result() , "count" => sizeof($query5->result())),
			"periodic" => $total_periodic,			
		);

		// echo "<pre>";
		// print_r($total_dashboard_details);
		// echo "</pre>";		

		return $total_dashboard_details;

	}


    public function get_userlist(){
	
		$this->db->select("*"); 
		$this->db->from('user');
		$query = $this->db->get();
		return $query->result();
       }
	     
    public function get_user($id){
	
		$this->db->select("*"); 
		$this->db->from('user');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
       }
	   
	   public function updateuser($data,$record_id){
		  $this->db->set($data); 
          $this->db->where("id", $record_id); 
          $this->db->update("user", $data);
	   }
	   
	   public function delete_user($record_id){
		 $this->db->delete("user", "id = $record_id");

	   }
	}


?>
