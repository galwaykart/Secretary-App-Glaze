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
		$year=date('20y');
		$month=date('m');
		$user_id = $this->session->userdata['id'];
		//echo $user_id;
		$query1 = $this->db->query('SELECT *  FROM `index_meeting` JOIN index_meeting_agenda ON index_meeting.agenda_id = index_meeting_agenda.agenda_id WHERE `date_of_meeting` = CURDATE() AND user_id = "$user_id"');

		$query12 = $this->db->query('SELECT *  FROM `index_meeting` JOIN index_meeting_agenda ON index_meeting.agenda_id = index_meeting_agenda.agenda_id WHERE user_id = "$user_id"');

		$query2 = $this->db->query('SELECT * FROM `daily_notes` WHERE `task_start_date` = CURDATE() AND user_id = "$user_id"');

		$query3 = $this->db->query('SELECT COUNT(*) AS `total_works` FROM `quick_work` WHERE `date` = CURDATE() AND user_id = "$user_id"');

		$query13 = $this->db->query('SELECT * FROM `quick_work` WHERE user_id = "$user_id"');


		$query4 = $this->db->query('SELECT COUNT(*) AS `total_projects` FROM `project_delegation`  WHERE `project_delegation_date`  = CURDATE() AND user_id = "$user_id"');

		$query14 = $this->db->query('SELECT * FROM `project_delegation` WHERE user_id = "$user_id"');

		$query5 = $this->db->query('SELECT *   FROM `appointment` WHERE DATE_FORMAT(`appointment_start_time`, "%Y-%m-%d")  = CURDATE() AND user_id = "$user_id"');

		$query15 = $this->db->query('SELECT *   FROM `appointment` WHERE user_id = "$user_id"');


		$query71 = $this->db->query('SELECT COUNT(*) AS total_yearlyTask FROM `yearly_periodic` WHERE DAY(CURDATE()) = DAY(yearly_periodic_start_date) AND  MONTH(CURDATE()) = MONTH(yearly_periodic_start_date) AND YEAR(CURDATE()) <= YEAR(yearly_periodic_end_date) AND user_id = "$user_id"');

		$this->db->select('*');
		$this->db->from('yearly_periodic');
		$this->db->where('Year(yearly_periodic_start_date) <=',$year);
		$this->db->where('Year(yearly_periodic_end_date) >=',$year);
		$this->db->where('user_id',$user_id);
		$queryYear = $this->db->get();
		$query711 =  $queryYear->result();


		$query72 = $this->db->query('SELECT COUNT(*) AS total_monthlyTask FROM `monthly_periodic` WHERE DAY(CURDATE()) = DAY(`monthly_start_date`) AND YEAR(CURDATE()) <= YEAR(`monthly_periodic_end_date`) AND user_id = "$user_id"');

		$this->db->select('*');
		$this->db->from('monthly_periodic');
		$this->db->where('Month(monthly_start_date) <=',$month);
		$this->db->where('Month(monthly_periodic_end_date) >=',$month);
		$this->db->where('user_id',$user_id);
		$queryMonthly = $this->db->get();
		$query721 = $queryMonthly->result();

		$query73 = $this->db->query('SELECT COUNT(*) AS total_weeklyTask FROM `weekly_periodic` WHERE WEEKDAY(CURDATE()) = WEEKDAY(weekly_periodic_start_date) AND YEAR(CURDATE()) <= YEAR(weekly_periodic_end_date) AND user_id = "$user_id"');

		
		$this->db->select('*');
		$this->db->from('weekly_periodic');
		$this->db->where('Month(weekly_periodic_start_date) <=',$month);
		$this->db->where('Month(weekly_periodic_end_date) >=',$month);
		$this->db->where('YEAR(weekly_periodic_end_date) >=',$year);
		$this->db->where('YEAR(weekly_periodic_end_date) >=',$year);
		$this->db->where('user_id',$user_id);
		$queryWeekly = $this->db->get();
		$query731 = $queryWeekly->result();


		$total_periodic = $query71-> result()[0]->total_yearlyTask + 
		$query72-> result()[0]->total_monthlyTask +
		$query73-> result()[0]->total_weeklyTask ;


		$total_meeting = $this->db->query("SELECT count(*) As total  FROM index_meeting  WHERE user_id = '$user_id'");
		//echo 'Gaurav='.$user_id;
		$total_daily_notes = $this->db->query("SELECT count(*) As total    FROM daily_notes  WHERE user_id = '$user_id'");
		$total_quickworks = $this->db->query("SELECT count(*)  As total   FROM quick_work  WHERE user_id = '$user_id'");	
		$total_appointment = $this->db->query("SELECT count(*)  As total   FROM appointment  WHERE user_id = '$user_id'");	
		//$total_periodic = $this->db->query('SELECT count(*)  FROM daily_notes  WHERE user_id = "$user_id"');		
		$total_projectDelegation = $this->db->query("SELECT count(*) As total    FROM project_delegation  WHERE user_id = '$user_id'");	

		$total_dashboard_details = array(
			"index_meeting" => array("data"=>$query1->result() , "all_data"=>$query12->result() , "count" => sizeof($query1->result())),
			"daily_notes" => array("data"=>$query2->result() , "count" => sizeof($query2->result())),
			"quick_work" => $query3->result(),
			"total_quick_work" => $query13->result(),
			"project_delegation" => $query4->result(),
			"total_project_delegation" => $query14->result(),
			"appointment" => array("data"=>$query5->result() , "all_data"=>$query15->result() , "count" => sizeof($query5->result())),
			"periodic" => $total_periodic,
			"yearly_periodic"=> $query711,	
			"monthly_periodic"=> $query721,		
			"weekly_periodic"=> $query731,
			"count_index_meeting" => $total_meeting->result(),
			"count_quickworks" => $total_quickworks->result(),
			"count_appointment" => $total_appointment->result(),
			"count_projectDelegation" => $total_projectDelegation->result(),
			"count_daily_notes" => $total_daily_notes->result(),
			
			//"count_daily_notes" => $total_daily_notes->result(),

		);
 
		return $total_dashboard_details;

	}


    public function get_userlist(){
	
		$this->db->select("*"); 
		$this->db->from('user');
		$query = $this->db->get();
		return $query->result();
       } 

    public function footer(){
	   $user_id = $this->session->userdata['id'];
		$this->db->select("*"); 
		$this->db->from('index_meeting');
		$this->db->where('user_id',$user_id);
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
