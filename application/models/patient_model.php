<?php

class Patient_model extends CI_Model
{



    function get_visit($patient_id)
    {

        $this->db->where('patient_id',$patient_id);
        $this->db->where('current_stage',1);
        $this->db->where('visit_status',1);
        $query=$this->db->get('visits');
        if($query->num_rows>0) {
            return $query->result();
        }else{
            return false;
        }

    }

    function get_malaria_total()
    {
        $query = $this->db->get('malaria_total');
        return $query->result();
    }

    function get_patient_history($patient_no)
    {


        $this->db->where('patient_id',$patient_no);

        $query = $this->db->get('visits');
        return $query->result();
    }
}

