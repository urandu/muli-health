<?php

class Reception_model extends CI_Model
{


    function new_patient($patient_id,$name,$sex,$dob,$phone,$email,$address,$insured,$nhif)
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
            'nhif'=>$nhif
        );

        return $this->db->insert('patient_profile',$details);


    }
    function get_patient($patient_id)
    {

        $sql="SELECT * FROM patient_profile WHERE patient_id=".$patient_id;
        $query=$this->db->query($sql);
        if($query->num_rows>0) {
            return $query->result();
        }else{
            return false;
        }

    }




}

