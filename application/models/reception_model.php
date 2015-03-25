<?php

class Reception_model extends CI_Model
{


    function new_patient($patient_id,$name,$sex,$dob,$phone,$email,$address,$insured,$nhif,$sir_name,$id_num)
    {
        $details=array(
            'patient_id'=>$patient_id,
            'name'=>$name,
            'sex'=>$sex,
            'dob'=>$dob,
            'phone'=>$phone,
            'email'=>$email,
            'address'=>$address,
            'insured'=>$insured,
            'nhif'=>$nhif,
            'sir_name'=>$sir_name,
            'id_num'=>$id_num
        );

        return $this->db->insert('patient_profile',$details);


    }
    function get_patient($patient_id)
    {

       // $sql="SELECT * FROM patient_profile WHERE patient_id=".$patient_id;
        $this->db->where(array('patient_id'=>$patient_id));
        $query=$this->db->get('patient_profile');
        if($query->num_rows>0) {
            return $query->result();
        }else{
            return false;
        }

    }

    function start_visit($patient_id)
    {

        $details=array(
            'patient_id'=>$patient_id,
            'current_stage'=>1,
            'visit_status'=>1
        );

        return $this->db->insert('visits',$details);

    }

    function check_visit_status($patient_id)
    {
        $this->db->where('patient_id', $patient_id);
        $this->db->where('visit_status', 1);
        $query = $this->db->get('visits');

        if($query->num_rows >0)
        {
            return true;
        }
        else{
            return false;
        }
    }




}

