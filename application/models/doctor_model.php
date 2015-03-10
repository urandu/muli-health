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
    function get_allergies($patient_id)
    {

        $this->db->where('patient_id',$patient_id);
        $query=$this->db->get('allergies');
        if($query->num_rows > 0)
        {
            return $query->result();
        }else
        {
            return false;
        }
    }

    function add_allergy($allergy,$patient_id,$visit_id)
    {
        $data=array(
            'allergy'=>$allergy,
            'patient_id'=>$patient_id,
            'visit_id'=>$visit_id
        );
        $this->db->insert('allergies',$data);
    }

    function add_prescription($prescription,$patient_id,$visit_id,$staff_id)
    {
        $data=array(
            'prescription'=>$prescription,
            'patient_id'=>$patient_id,
            'visit_id'=>$visit_id,
            'staff_id'=>$staff_id
        );
        $this->db->insert('prescription',$data);
    }

    function add_diagnosis($diagnosis,$patient_id,$visit_id,$staff_id)
    {
        $data=array(
            'diagnosis'=>$diagnosis,
            'patient_id'=>$patient_id,
            'visit_id'=>$visit_id,
            'staff_id'=>$staff_id
        );
        $this->db->insert('diagnosis',$data);
    }

    function add_test_done($test_done,$patient_id,$visit_id,$staff_id)
    {
        $data=array(
            'test_done'=>$test_done,
            'patient_id'=>$patient_id,
            'visit_id'=>$visit_id,
            'staff_id'=>$staff_id
        );
        $this->db->insert('lab_tests',$data);
    }

    function add_medical_profile($present_complaint,$complaint_history,$patient_id,$visit_id,$staff_id)
    {
        $data=array(
            'present_complaint'=>$present_complaint,
            'complaint_history'=>$complaint_history,
            'patient_id'=>$patient_id,
            'visit_id'=>$visit_id,
            'staff_id'=>$staff_id
        );
        $this->db->insert('medical_profile',$data);
    }


    function go_to_lab($visit_id)
    {
        $query=$this->db->query("UPDATE visits SET current_stage = 2 WHERE visit_id = ".$visit_id);
    }

    function go_to_accounts($visit_id)
    {
        $query=$this->db->query("UPDATE visits SET current_stage = 4 WHERE visit_id = ".$visit_id);
    }


}

