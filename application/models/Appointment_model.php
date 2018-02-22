<?php
class Appointment_model extends CI_model{
    public function getAppointmentList(){
        $query = $this->db->get("appointment"); 
        $list_daily_notes = $query->result();
         print_r($list_daily_notes);
        return $list_daily_notes;

    }
}

?>