<?php

class Doctor_model extends CI_Model
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



    function get_medical_profile($visit_id)
    {

        $this->db->where('visit_id',$visit_id);
        $query=$this->db->get('medical_profile');
        if($query->num_rows > 0)
        {
            return $query->result();
        }else
        {
            return false;
        }
    }

    function get_prescription($visit_id)
    {

        $this->db->where('visit_id',$visit_id);
        $query=$this->db->get('prescription');
        if($query->num_rows > 0)
        {
            return $query->result();
        }else
        {
            return false;
        }

    }

    function get_lab_tests($visit_id)
    {

        $this->db->where('visit_id',$visit_id);
        $query=$this->db->get('lab_tests');
        if($query->num_rows > 0)
        {
            return $query->result();
        }else
        {
            return false;
        }
    }

    function get_diagnosis($visit_id)
    {

        $this->db->where('visit_id',$visit_id);
        $query=$this->db->get('diagnosis');
        if($query->num_rows > 0)
        {
            return $query->result();
        }else
        {
            return false;
        }
    }




}

