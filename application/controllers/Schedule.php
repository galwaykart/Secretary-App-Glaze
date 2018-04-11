<?php

	class Schedule extends CI_Controller 
	{ 
			public function __construct(){
				parent::__construct();
					$this->load->helper('url'); 
					$this->load->library('session');
					$this->load->model('Yearly_periodic_model');
					$this->load->model('Monthly_periodic_model');
					$this->load->model('Weekly_periodic_model');
					$this->load->model('Daily_periodic_model');
					$this->load->model('Appointment_model');
					$this->load->model('Indexmeeting_model');
					$this->load->model('Projectdelegation_model');
					$this->load->model('Reminder_sheet_model'); 
					$this->load->model('Schedule_model');  
					$this->load->library("pagination");
					$this->load->library(array('session', 'form_validation'));
					$this->load->library('email'); 
					date_default_timezone_set('Asia/Kolkata'); 
		}
		 
		
		public function yearly(){ 
		    // schdule should be work before 15, 7 ans same day of end date
			$current_date = date('Y-m-d h:i:s a', time()); 
			$date  = strtotime($current_date);
			$day   = date('d',$date);  
			$month = date('m',$date);
			$year  = date('Y',$date); 
			
			$data = $this->Schedule_model->yearly($current_date); 
			foreach($data as $dta){
				$yearlydate = $dta->yearly_periodic_end_date;
				$date1  = strtotime($yearlydate);
				$yearlyday   = date('d',$date1);  
				$yearlyday7   = $yearlyday - 7;  
				$yearlyday15   = $yearlyday - 15;  
				$yearlymonth = date('m',$date1);
				$yearlyyear  = date('Y',$date1); 
				
				if($yearlyday15 == $day && $month == $yearlymonth){
					// send Email According Email Template
					echo '15';
				}
				if($yearlyday7 == $day && $month == $yearlymonth){
					// send Email According Email Template
					echo '7';
				}
				if($yearlyday == $day && $month == $yearlymonth){
					// send Email According Email Template
					echo '1';
				}
			}
		}
		public function monthly(){ 
		    // schdule should be work before 15, 7 ans same day of end date
			$current_date = date('Y-m-d h:i:s a', time()); 
			$date  = strtotime($current_date);
			$day   = date('d',$date);  
			$month = date('m',$date);
			$year  = date('Y',$date); 
			
			$data = $this->Schedule_model->monthly($current_date); 
			foreach($data as $dta){
				$yearlydate = $dta->monthly_periodic_end_date;
				$date1  = strtotime($yearlydate);
				$monthlyday   = date('d',$date1);  
				$monthlyday7   = $monthlyday - 7;  
				$monthlyday3   = $monthlyday - 3;  
				$monthlymonth = date('m',$date1);
				$yearlyyear  = date('Y',$date1); 
				
				if($monthlyday7 == $day && $month == $monthlymonth){
					// send Email According Email Template
					echo '7';
				}
				if($monthlyday3 == $day && $month == $monthlymonth){
					// send Email According Email Template
					echo '3';
				}
				if($monthlyday == $day && $month == $monthlymonth){
					// send Email According Email Template
					echo '1';
				}
			}
				
		}
		public function weekly(){ 
		    // schdule should be work before 15, 7 ans same day of end date
			$current_date = date('Y-m-d h:i:s a', time()); 
			$date  = strtotime($current_date);
			$day   = date('d',$date);  
			$month = date('m',$date);
			$year  = date('Y',$date); 
			
			$data = $this->Schedule_model->weekly($current_date); 
			foreach($data as $dta){
				$weeklydate = $dta->weekly_periodic_end_date;
				$date1  = strtotime($weeklydate);
				$weeklyday   = date('d',$date1);   
				$weeklyday3   = $weeklyday - 3;  
				$weeklymonth = date('m',$date1);
				$weeklyyear  = date('Y',$date1); 
				 
				if($weeklyday3 == $day && $month == $weeklymonth){
					// send Email According Email Template
					echo '3';
				}
				if($weeklyday == $day && $month == $weeklymonth){
					// send Email According Email Template
					echo '1';
				}
				
			} 
		} 
		public function reminderhourly(){ 
		    // cron run once in a hour
			$current_date = date('Y-m-d h:i:s a', time()); 
			$date  = strtotime($current_date);
			$day   = date('d',$date); 
			$hour   = date('h',$date);			
			$month = date('m',$date);
			$year  = date('Y',$date); 
			
			$data = $this->Schedule_model->reminderhourly($current_date); 
			foreach($data as $dta){ 
					// send Email According Email Template 
			}
		}	 
		public function reminderdaily(){ 
		    // cron run once in a day
			$current_date = date('Y-m-d h:i:s a', time()); 
			$date  = strtotime($current_date);
			$day   = date('d',$date); 
			$hour   = date('h',$date);			
			$month = date('m',$date);
			$year  = date('Y',$date); 
			
			$data = $this->Schedule_model->reminderdaily($current_date); 
			foreach($data as $dta){ 
					// send Email According Email Template 
			}
		}	 
		public function reminderweekly(){ 
		    // cron run once in a week
			$current_date = date('Y-m-d h:i:s a', time()); 
			$date  = strtotime($current_date);
			$day   = date('d',$date); 
			$hour   = date('h',$date);			
			$month = date('m',$date);
			$year  = date('Y',$date); 
			$data = $this->Schedule_model->reminderweekly($current_date); 
			foreach($data as $dta){ 
					// send Email According Email Template 
			}
		} 	 
		public function remindermonthly(){ 
		    // cron run once in a week
			$current_date = date('Y-m-d h:i:s a', time()); 
			$date  = strtotime($current_date);
			$day   = date('d',$date); 
			$hour   = date('h',$date);			
			$month = date('m',$date);
			$year  = date('Y',$date); 
			$data = $this->Schedule_model->reminderweekly($current_date); 
			foreach($data as $dta){ 
					// send Email According Email Template 
			}
		} 	 
		public function reminderyearly(){ 
		    // cron run once in a week
			$current_date = date('Y-m-d h:i:s a', time()); 
			$date  = strtotime($current_date);
			$day   = date('d',$date); 
			$hour   = date('h',$date);			
			$month = date('m',$date);
			$year  = date('Y',$date); 
			$data = $this->Schedule_model->reminderweekly($current_date); 			 
			foreach($data as $dta){ 
					// send Email According Email Template 
			}
		} 
	}
?>	
		