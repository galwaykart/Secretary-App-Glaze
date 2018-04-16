<?php

	class Schedule extends CI_Controller 
	{ 
			public function __construct(){
				parent::__construct();
					$this->load->helper('url'); 
					$this->load->library('session');
					$this->load->model('Schedule_model'); 
					$this->load->model('Indexmeeting_model');
					$this->load->model('Appointment_model'); 
					$this->load->model('Projectdelegation_model');
					$this->load->model('Reminder_sheet_model');
					$this->load->model('Yearly_periodic_model');
					$this->load->model('Monthly_periodic_model');
					$this->load->model('Weekly_periodic_model');
					$this->load->library("pagination");
					$this->load->library(array('session', 'form_validation'));
					$this->load->library('email'); 
					date_default_timezone_set('Asia/Kolkata'); 
		}
		 
		
		public function yearly(){ 
		    // schdule should be work before 15, 7 ans same day of end date
			$current_date = date('Y-m-d 00:00:00', time()); 
			echo "today time =  ".$current_date."<br>";
			echo"check =  ".(new DateTime($current_date))->modify('-48 hours')->format('Y-m-d H:i:s');
			echo "<br>";
			$date  = strtotime($current_date);
			$data = $this->Schedule_model->yearly($current_date); 
			foreach($data as $dta){
				$modi_date = $dta->yearly_periodic_end_date;
				$yearlySameDay = (new DateTime($modi_date))->modify('+1 min')->format('Y-m-d 00:00:00');				
				$yearlybefore15days = (new DateTime($modi_date))->modify('-15 days')->format('Y-m-d 00:00:00');
				$yearlybefore7days = (new DateTime($modi_date))->modify('-7 days')->format('Y-m-d 00:00:00');
				$data_pack['fetch'] = $this->Yearly_periodic_model->get_periodic_task($dta->yearly_periodic_id);
				if($yearlybefore7days == $current_date){
										// send Email According Email Template
										$a=array();
											for($j=0 ; $j<count($data_pack['fetch']['data2']) ; $j++){
												array_push($a,$data_pack['fetch']['data2'][$j]->yearly_periodic_delegates_email);
											}
										/* ...........................Mail sending start here!.......................................*/
					
										 $mail_to = implode(",",$a);
										$config = array (
											'mailtype' => 'html',
											'charset'  => 'utf-8',
											'priority' => '1'
											);
										$this->email->initialize($config);
										$this->email->set_newline("\r\n");
										$this->email->from('surender.singh@glazegalway.com', 'Surender');
										$data_quick["quickwork_data"] = $dta;
										$this->email->to($mail_to);
					
										$this->email->subject('schedule yearly before 7days');
					
										$body = $this->load->view('email_template/quickwork.php',$data_quick,TRUE);
													
										$this->email->message($body);
					
										$this->email->send();
					
										/* ...........................Mail sending end here!................................................*/
								
				}
				if($yearlybefore15days == $current_date){
					// send Email According Email Template
					$a=array();
						for($i=0 ; $i<count($data_pack['fetch']['data2']) ; $i++){
							array_push($a,$data_pack['fetch']['data2'][$i]->yearly_periodic_delegates_email);
						}
					/* ...........................Mail sending start here!.......................................*/

					 $mail_to = implode(",",$a);
					$config = array (
						'mailtype' => 'html',
						'charset'  => 'utf-8',
						'priority' => '1'
						);
					$this->email->initialize($config);
					$this->email->set_newline("\r\n");
					$this->email->from('surender.singh@glazegalway.com', 'Surender');
					$data_quick["quickwork_data"] = $dta;
					$this->email->to($mail_to);

					$this->email->subject('schedule yearly before 15days');

					$body = $this->load->view('email_template/quickwork.php',$data_quick,TRUE);
								
					$this->email->message($body);

					$this->email->send();

					/* ...........................Mail sending end here!................................................*/
			
				}

				if($yearlySameDay == $current_date){
					// send Email According Email Template
										$a=array();
											for($k=0 ; $k<count($data_pack['fetch']['data2']) ; $k++){
												array_push($a,$data_pack['fetch']['data2'][$k]->yearly_periodic_delegates_email);
											}
										/* ...........................Mail sending start here!.......................................*/
					
										 $mail_to = implode(",",$a);
										$config = array (
											'mailtype' => 'html',
											'charset'  => 'utf-8',
											'priority' => '1'
											);
										$this->email->initialize($config);
										$this->email->set_newline("\r\n");
										$this->email->from('surender.singh@glazegalway.com', 'Surender');
										$data_quick["quickwork_data"] = $dta;
										$this->email->to($mail_to);
					
										$this->email->subject('schedule yearly same day');
					
										$body = $this->load->view('email_template/quickwork.php',$data_quick,TRUE);
													
										$this->email->message($body);
					
										$this->email->send();
					
										/* ...........................Mail sending end here!................................................*/
								
				}
			}
		}


		public function monthly(){ 
		    // schdule should be work before 15, 7 ans same day of end date
			$current_date = date('Y-m-d 00:00:00', time()); 
			echo "today time =  ".$current_date."<br>";
			echo"check =  ".(new DateTime($current_date))->modify('-48 hours')->format('Y-m-d H:i:s');
			echo "<br>";
			$date  = strtotime($current_date);
			$data = $this->Schedule_model->monthly($current_date); 
			foreach($data as $dta){
				echo "<pre>";
				//print_r($dta);
				echo "</pre>";
				$modi_date = $dta->monthly_periodic_end_date;
				$monthlySameDay = (new DateTime($modi_date))->modify('+1 min')->format('Y-m-d 00:00:00');				
				$monthlybefore3days = (new DateTime($modi_date))->modify('-3 days')->format('Y-m-d 00:00:00');
				$monthlybefore7days = (new DateTime($modi_date))->modify('-7 days')->format('Y-m-d 00:00:00');
				$data_pack['fetch'] = $this->Monthly_periodic_model->get_periodic_task($dta->monthly_periodic_id);
				echo "<pre>";
				//print_r($data_pack);
				echo "</pre>";
				if($monthlybefore7days == $current_date){
										// send Email According Email Template
										$a=array();
											for($j=0 ; $j<count($data_pack['fetch']['data2']) ; $j++){
												array_push($a,$data_pack['fetch']['data2'][$j]->monthly_periodic_delegates_email);
											}
										/* ...........................Mail sending start here!.......................................*/
					
										 $mail_to = implode(",",$a);
										$config = array (
											'mailtype' => 'html',
											'charset'  => 'utf-8',
											'priority' => '1'
											);
										$this->email->initialize($config);
										$this->email->set_newline("\r\n");
										$this->email->from('surender.singh@glazegalway.com', 'Surender');
										$data_quick["quickwork_data"] = $dta;
										$this->email->to($mail_to);
					
										$this->email->subject('schedule monthly before 7days');
					
										$body = $this->load->view('email_template/quickwork.php',$data_quick,TRUE);
													
										$this->email->message($body);
					
										$this->email->send();
					
										/* ...........................Mail sending end here!................................................*/
								
				}
				if($monthlybefore3days == $current_date){
					// send Email According Email Template
					$a=array();
						for($i=0 ; $i<count($data_pack['fetch']['data2']) ; $i++){
							array_push($a,$data_pack['fetch']['data2'][$i]->monthly_periodic_delegates_email);
						}
					/* ...........................Mail sending start here!.......................................*/

					 $mail_to = implode(",",$a);
					$config = array (
						'mailtype' => 'html',
						'charset'  => 'utf-8',
						'priority' => '1'
						);
					$this->email->initialize($config);
					$this->email->set_newline("\r\n");
					$this->email->from('surender.singh@glazegalway.com', 'Surender');
					$data_quick["quickwork_data"] = $dta;
					$this->email->to($mail_to);

					$this->email->subject('schedule monthly before 3days');

					$body = $this->load->view('email_template/quickwork.php',$data_quick,TRUE);
								
					$this->email->message($body);

					$this->email->send();

					/* ...........................Mail sending end here!................................................*/
			
				}

				if($monthlySameDay == $current_date){
					// send Email According Email Template
										$a=array();
											for($k=0 ; $k<count($data_pack['fetch']['data2']) ; $k++){
												array_push($a,$data_pack['fetch']['data2'][$k]->monthly_periodic_delegates_email);
											}
										/* ...........................Mail sending start here!.......................................*/
					
										 $mail_to = implode(",",$a);
										$config = array (
											'mailtype' => 'html',
											'charset'  => 'utf-8',
											'priority' => '1'
											);
										$this->email->initialize($config);
										$this->email->set_newline("\r\n");
										$this->email->from('surender.singh@glazegalway.com', 'Surender');
										$data_quick["quickwork_data"] = $dta;
										$this->email->to($mail_to);
					
										$this->email->subject('schedule monthly same day');
					
										$body = $this->load->view('email_template/quickwork.php',$data_quick,TRUE);
													
										$this->email->message($body);
					
										$this->email->send();
					
										/* ...........................Mail sending end here!................................................*/
								
				}
			}
		}


		public function weekly(){ 
		    // schdule should be work before  3 and same day of end date
			$current_date = date('Y-m-d 00:00:00', time()); 
			echo "today time =  ".$current_date."<br>";
			echo"check =  ".(new DateTime($current_date))->modify('-48 hours')->format('Y-m-d H:i:s');
			echo "<br>";
			$date  = strtotime($current_date);
			$data = $this->Schedule_model->weekly($current_date); 
			foreach($data as $dta){
				echo "<pre>";
				//print_r($dta);
				echo "</pre>";
				$modi_date = $dta->weekly_periodic_end_date;
				$monthlySameDay = (new DateTime($modi_date))->modify('+1 min')->format('Y-m-d 00:00:00');				
				$monthlybefore3days = (new DateTime($modi_date))->modify('-3 days')->format('Y-m-d 00:00:00');
				$data_pack['fetch'] = $this->Weekly_periodic_model->get_periodic_task($dta->weekly_periodic_id);
				echo "<pre>";
				//print_r($data_pack);
				echo "</pre>";
				if($monthlybefore3days == $current_date){
					// send Email According Email Template
					$a=array();
						for($i=0 ; $i<count($data_pack['fetch']['data2']) ; $i++){
							array_push($a,$data_pack['fetch']['data2'][$i]->weekly_periodic_delegates_email);
						}
					/* ...........................Mail sending start here!.......................................*/

					 $mail_to = implode(",",$a);
					$config = array (
						'mailtype' => 'html',
						'charset'  => 'utf-8',
						'priority' => '1'
						);
					$this->email->initialize($config);
					$this->email->set_newline("\r\n");
					$this->email->from('surender.singh@glazegalway.com', 'Surender');
					$data_quick["quickwork_data"] = $dta;
					$this->email->to($mail_to);

					$this->email->subject('schedule monthly before 3days');

					$body = $this->load->view('email_template/quickwork.php',$data_quick,TRUE);
								
					$this->email->message($body);

					$this->email->send();

					/* ...........................Mail sending end here!................................................*/
			
				}

				if($monthlySameDay == $current_date){
					// send Email According Email Template
										$a=array();
											for($k=0 ; $k<count($data_pack['fetch']['data2']) ; $k++){
												array_push($a,$data_pack['fetch']['data2'][$k]->weekly_periodic_delegates_email);
											}
										/* ...........................Mail sending start here!.......................................*/
					
										 $mail_to = implode(",",$a);
										$config = array (
											'mailtype' => 'html',
											'charset'  => 'utf-8',
											'priority' => '1'
											);
										$this->email->initialize($config);
										$this->email->set_newline("\r\n");
										$this->email->from('surender.singh@glazegalway.com', 'Surender');
										$data_quick["quickwork_data"] = $dta;
										$this->email->to($mail_to);
					
										$this->email->subject('schedule monthly same day');
					
										$body = $this->load->view('email_template/quickwork.php',$data_quick,TRUE);
													
										$this->email->message($body);
					
										$this->email->send();
					
										/* ...........................Mail sending end here!................................................*/
								
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
		

		public function indexMeeting(){ 
		    // cron run once in a week
			$current_date = date('Y-m-d H:00:00', time()); 
			echo "today time =  ".$current_date."<br>";
			echo"check =  ".(new DateTime($current_date))->modify('-48 hours')->format('Y-m-d H:i:s');
			//echo "today time =  ".$current_date."<br>";
			echo "<br>";
			$date  = strtotime($current_date);
		

			$year  = date('Y',$date); 
			$data = $this->Schedule_model->indexMeeting($current_date);
			//print_r($data); 

			foreach($data as $dta){ 
					// send Email According Email Template 
					$modi_date = $dta->date_of_meeting ." ". $dta->index_meeting_start_time;

					$_before48hrs = (new DateTime($modi_date))->modify('-48 hours')->format('Y-m-d H:00:00');
					echo $dta->index_meeting_id." ++++++ " ."start time =  ". $_before48hrs;
					echo "<br>";
					
					if($_before48hrs === $current_date){
						$data_pack['fetch'] = $this->Indexmeeting_model->get_meeting($dta->index_meeting_id);
						echo "<pre>";
						print_r($data_pack);
						echo "</pre>";
						/* ...........................Mail sending start here!.......................................*/

						//$mail_to = implode(",",$data[1]['delegates_email']);
						$mail_to = "gaurav.gupta0705@gmail.com";
						$config = array (
							'mailtype' => 'html',
							'charset'  => 'utf-8',
							'priority' => '1'
							);
						$this->email->initialize($config);
						$this->email->set_newline("\r\n");
						$this->email->from('surender.singh@glazegalway.com', 'Surender');
						$data_quick["quickwork_data"] = $data;
						$this->email->to($mail_to);

						$this->email->subject('schedule');

						$body = $this->load->view('email_template/quickwork.php',$data_quick,TRUE);
									
						$this->email->message($body);

						$this->email->send();

						/* ...........................Mail sending end here!................................................*/
				
					}
				}
		}


		public function appointment(){ 
		    // cron run once in a week
			$current_date = date('Y-m-d H:00:00', time()); 
			echo "today time =  ".$current_date."<br>";
			echo"check =  ".(new DateTime($current_date))->modify('-48 hours')->format('Y-m-d H:i:s');
			//echo "today time =  ".$current_date."<br>";
			echo "<br>";
			$date  = strtotime($current_date);
			$data = $this->Schedule_model->appointment($current_date); 			 
			foreach($data as $dta){ 
					// send Email According Email Template 
					print_r($dta);
					$modi_date = $dta->appointment_start_time;

					$_before24hrs = (new DateTime($modi_date))->modify('-24 hours')->format('Y-m-d H:00:00');
					echo $dta->appointment_id." ++++++ " ."start time =  ". $_before24hrs;
					echo "<br>";
					if($_before24hrs === $current_date){
						$listOfDataById['appointment']	= $this->Appointment_model->getAppointmentById($dta->appointment_id);
						echo "<pre>";
						print_r($listOfDataById);
						echo "</pre>";
						/* ...........................Mail sending start here!.......................................*/

						//$mail_to = implode(",",$data[1]['delegates_email']);
						$mail_to = "gaurav.gupta0705@gmail.com";
						$config = array (
							'mailtype' => 'html',
							'charset'  => 'utf-8',
							'priority' => '1'
							);
						$this->email->initialize($config);
						$this->email->set_newline("\r\n");
						$this->email->from('surender.singh@glazegalway.com', 'Surender');
						$data_quick["quickwork_data"] = $data;
						$this->email->to($mail_to);

						$this->email->subject('schedule appointment');

						$body = $this->load->view('email_template/quickwork.php',$data_quick,TRUE);
									
						$this->email->message($body);

						$this->email->send();

						/* ...........................Mail sending end here!................................................*/
				
					}
			}
		}

		public function projectDelegation(){ 
			$current_date = date('Y-m-d 00:00:00', time()); 
			echo "today time =  ".$current_date."<br>";
			echo"check =  ".(new DateTime($current_date))->modify('-48 hours')->format('Y-m-d H:i:s');
			echo "<br>";
			$date  = strtotime($current_date);
			$data = $this->Schedule_model->projectDelegation($current_date); 			 
			foreach($data as $dta){ 
					// send Email According Email Template
					// echo "<pre>"; 
					// print_r($dta);
					// echo "</pre>"; 
					$modi_date = $dta->project_delegation_followup_date;

					$_before48hrs = (new DateTime($modi_date))->modify('-48 hours')->format('Y-m-d 00:00:00');
					echo $dta->project_delegation_id." ++++++ " ."start time =  ". $_before48hrs;
					echo "<br>";
					if($_before48hrs === $current_date){						
						
						$listOfDataById['records']	= $this->Projectdelegation_model->getProjectDelegationStatus($dta->project_delegation_id);						echo "<pre>";
						print_r($listOfDataById['records']['delegates_data']);
						$a=array();
						for($i=0 ; $i<count($listOfDataById['records']['delegates_data']) ; $i++){
							array_push($a,$listOfDataById['records']['delegates_data'][$i]->project_delegation_delegated_email);
						}
						echo "</pre>";


						/* ...........................Mail sending start here!.......................................*/

						$mail_to = implode(",",$a);
						//$mail_to = "gaurav.gupta0705@gmail.com";
						$config = array (
							'mailtype' => 'html',
							'charset'  => 'utf-8',
							'priority' => '1'
							);
						$this->email->initialize($config);
						$this->email->set_newline("\r\n");
						$this->email->from('surender.singh@glazegalway.com', 'Surender');
						$data_quick["quickwork_data"] = $data;
						$this->email->to($mail_to);

						$this->email->subject("schedule project delegation");

						$body = $this->load->view('email_template/quickwork.php',$data_quick,TRUE);
									
						$this->email->message($body);

						$this->email->send();

						/* ...........................Mail sending end here!................................................*/
				
					}
			}
		}


		public function remindersheet($frequency = null){ 
			$current_date = date('Y-m-d 00:00:00', time()); 
			echo "today time =  ".$current_date."<br>";
			echo"check =  ".(new DateTime($current_date))->modify('-48 hours')->format('Y-m-d H:i:s');
			echo "<br>";
			$date  = strtotime($current_date);
			$data = $this->Schedule_model->remindersheet($current_date , $frequency); 			 
			foreach($data as $dta){ 
				print_r($data);
										/* ...........................Mail sending start here!.......................................*/

										//$mail_to = implode(",",$a);
										$mail_to = "gaurav.gupta0705@gmail.com";
										$config = array (
											'mailtype' => 'html',
											'charset'  => 'utf-8',
											'priority' => '1'
											);
										$this->email->initialize($config);
										$this->email->set_newline("\r\n");
										$this->email->from('surender.singh@glazegalway.com', 'Surender');
										$data_quick["quickwork_data"] = $data;
										$this->email->to($mail_to);
				
										$this->email->subject("Reminder");
				
										$body = $this->load->view('email_template/quickwork.php',$data_quick,TRUE);
													
										$this->email->message($body);
				
										$this->email->send();
				
										/* ...........................Mail sending end here!................................................*/
								
			}
		}
		
	}
?>	
		