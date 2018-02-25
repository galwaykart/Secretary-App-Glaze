<?php
class Appointment_model extends CI_model{
    public function getAppointmentList(){
        $query = $this->db->get("appointment"); 
        $list_daily_notes = $query->result();
         //print_r($list_daily_notes);
        return $list_daily_notes;

    }

    public function addAppointment($data){
        echo $this->db->insert('appointment', $data[0]);
        $insert_id = $this->db->insert_id();
        $total_participants = $data[1]['delegates_name'];

        $name= $data[1]['delegates_name'];
        $email= $data[1]['delegates_email'];


        $fLen = count($total_participants);
                
        for($i = 0; $i < $fLen; $i++) {
            echo $i;

            $p_data = array(
                'appointment_with_name'=>$name[$i],
                'appointment_with_email'=>$email[$i],
               );

            $existing_array = array();
            $existing_array = $p_data;
            $new_array = array('appointment_id'=>$insert_id);
            $new_set_array = array_merge($existing_array, $new_array);
            //print_r($new_set_array);
            echo "<br>";
             $this->db->insert('appointment_with', $new_set_array);
        }
        
       
        }


        public function getAppointmentById($id){
			$query = $this->db->query("SELECT *,DATE_FORMAT(appointment_start_time,'%Y-%m-%d') AS niceDate, DATE_FORMAT(appointment_end_time,'%Y-%m-%d') AS targetDate FROM appointment
			JOIN appointment_with 
			ON appointment.appointment_id = appointment_with.appointment_id 
			WHERE appointment.appointment_id = $id"); 
		   $list_appointmentById = $query->result();
		   //print_r($list_quickworkById);
		   return $list_appointmentById;
        }
        
        public function updateAppointment($data ,$record_id){
            $this->db->delete("appointment_with", "appointment_id = $record_id");
            $this->db->set($data[0]); 
            $this->db->where("appointment_id", $record_id); 
            $this->db->update("appointment", $data[0]);

                    $delegates_name= $data[1]['delegates_name'];
                    $delegates_email= $data[1]['delegates_email'];
            
            
                    $fLen = count($delegates_name);
                    echo "upadating the delegates";		
                    for($i = 0; $i < $fLen; $i++) {
                        //echo $i;
            
                        $p_data = array(
                            'appointment_with_name'=>$delegates_name[$i],
                            'appointment_with_email'=>$delegates_email[$i],
                           );
            
                        $existing_array = array();
                        $existing_array = $p_data;
                        $new_array = array('appointment_id'=>$record_id);
                        $new_set_array = array_merge($existing_array, $new_array);
                        //print_r($new_set_array);
                        echo "<br>";
                         $this->db->insert('appointment_with', $new_set_array);
                        
                    }
                }
}

?>
