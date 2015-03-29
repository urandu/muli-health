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

    function get_visit_lab($patient_id)
    {

        $this->db->where('patient_id',$patient_id);
        $this->db->where('current_stage',2);
        $this->db->where('visit_status',1);
        $query=$this->db->get('visits');
        if($query->num_rows>0) {
            return $query->result();
        }else{
            return false;
        }

    }


    function get_visit_finance($patient_id)
    {

        $this->db->where('patient_id',$patient_id);
        $this->db->where('current_stage',4);
        $this->db->where('visit_status',1);
        $query=$this->db->get('visits');
        if($query->num_rows>0) {
            return $query->result();
        }else{
            return false;
        }

    }


    function end_visit($visit_id)
    {
        $query=$this->db->query("UPDATE visits SET visit_status = 0 WHERE visit_id = ".$visit_id);
    }


    function get_visit_pharmacy($patient_id)
    {

        $this->db->where('patient_id',$patient_id);
        $this->db->where('current_stage',3);
        $this->db->where('visit_status',1);
        $query=$this->db->get('visits');
        if($query->num_rows>0) {
            return $query->result();
        }else{
            return false;
        }

    }


    function accept_payment($visit_id,$staff_id,$amount_paid)
    {
        $data=array(
            'visit_id'=>$visit_id,
            'staff_id'=>$staff_id,
            'amount_paid'=>$amount_paid
        );

        $this->db->insert('payments',$data);
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

    function add_test_done($test_done,$patient_id,$visit_id)
    {
        $data=array(
            'test_done'=>$test_done,
            'patient_id'=>$patient_id,
            'visit_id'=>$visit_id
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

    function go_to_pharmacy($visit_id)
    {
        $query=$this->db->query("UPDATE visits SET current_stage = 3 WHERE visit_id = ".$visit_id);
    }


    function go_to_doctor($visit_id)
    {
        $query=$this->db->query("UPDATE visits SET current_stage = 1 WHERE visit_id = ".$visit_id);
    }

    function go_to_accounts($visit_id)
    {
        $query=$this->db->query("UPDATE visits SET current_stage = 4 WHERE visit_id = ".$visit_id);
    }


    function save_lab_result($test_id,$test_result,$staff_id)
    {


        $data = array(
            'test_result' => $test_result,
            'staff_id'=>$staff_id

        );

        $this->db->where('test_id', $test_id);
        $this->db->update('lab_tests', $data);

    }

    function get_all_drugs()
    {
        return $this->db->get('drugs')->result();
    }

    function get_drug_name($drug_id)
    {
        $this->db->where(array('drug_id'=>$drug_id));
        $result=$this->db->get('drugs');
        $result=$result->result()[0]->drug_name;
        return $result;
    }



    function get_drug_price($drug_id)
    {
        $this->db->where(array('drug_id'=>$drug_id));
        $result=$this->db->get('drugs');
        $result=$result->result()[0]->drug_price;
        return $result;
    }



    function get_all_diseases()
    {
        return $this->db->get('diseases')->result();
    }

    function get_disease_name($disease_id)
    {
        $this->db->where(array('disease_id'=>$disease_id));
        $result=$this->db->get('diseases');
        $result=$result->result()[0]->disease_name;
        return $result;
    }


    function get_allergy_names()
    {
        return $this->db->get('allergy_names')->result();
    }

    function get_allergy_name($allergy_id)
    {
        $this->db->where(array('allergy_id'=>$allergy_id));
        $result=$this->db->get('allergy_names');
        $result=$result->result()[0]->allergy_name;
        return $result;
    }



    function get_lab_test_names()
    {
        return $this->db->get('lab_test_names')->result();
    }

    function get_lab_test_name($test_id)
    {
        $this->db->where(array('test_id'=>$test_id));
        $result=$this->db->get('lab_test_names');
        $result=$result->result()[0]->test_name;
        return $result;
    }


    function get_lab_test_price($test_id)
    {
        $this->db->where(array('test_id'=>$test_id));
        $result=$this->db->get('lab_test_names');
        $result=$result->result()[0]->test_cost;
        return $result;
    }

    function add_drug($drug_name,$drug_price,$stock)
    {
        $data=array(
            'drug_name'=>$drug_name,
            'drug_price'=>$drug_price,
            'stock'=>$stock
        );

        $this->db->insert('drugs',$data);
    }

    function add_lab_test_name($test_name,$test_cost)
    {
        $data=array(
            'test_name'=>$test_name,
            'test_cost'=>$test_cost
        );

        $this->db->insert('lab_test_names',$data);
    }

    function add_disease($disease_name)
    {
        $data=array(
            'disease_name'=>$disease_name
        );

        $this->db->insert('diseases',$data);
    }

    function add_allergy_name($allergy_name)
    {
        $data=array(
            'allergy_name'=>$allergy_name
        );

        $this->db->insert('allergy_names',$data);
    }

}

