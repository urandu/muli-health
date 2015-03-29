<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


function is_logged_in()
{
    $CI = &get_instance ();
    $user_data = $CI->session->all_userdata ();

    return isset ($user_data ['user_id']);
}




function _is_receptionist()
{
    $CI = &get_instance ();
    $user_data = $CI->session->all_userdata ();

    if($user_data['role']==1){
        return true;
    }else{
        return false;
    }

}


function _is_doctor()
{
    $CI = &get_instance ();
    $user_data = $CI->session->all_userdata ();

    if($user_data['role']==0){

        return true;

    }else{


        return false;

    }

}



function _is_admin()
{
    $CI = &get_instance ();
    $user_data = $CI->session->all_userdata ();

    if($user_data['role']==-1){

        return true;

    }else{


        return false;

    }

}




function _is_pharmacist()
{
    $CI = &get_instance ();
    $user_data = $CI->session->all_userdata ();

    if($user_data['role']==3){
        return true;
    }else{
        return false;
    }

}

function _is_lab_attendant()
{
    $CI = &get_instance ();
    $user_data = $CI->session->all_userdata ();

    if($user_data['role']==2){
        return true;
    }else{
        return false;
    }

}



function _is_accounts()
{
    $CI = &get_instance ();
    $user_data = $CI->session->all_userdata ();

    if($user_data['role']==4){
        return true;
    }else{
        return false;
    }

}




function get_drug_name($prescription)
{
    $CI=get_instance();
    $CI->load->model('doctor_model');
    echo $CI->doctor_model->get_drug_name($prescription);
}



function get_drug_price($prescription)
{
    $CI=get_instance();
    $CI->load->model('doctor_model');
   return $CI->doctor_model->get_drug_price($prescription);
}


function get_disease_name($disease_id)
{
    $CI=get_instance();
    $CI->load->model('doctor_model');
    echo $CI->doctor_model->get_disease_name($disease_id);
}


function get_allergy_name($allergy_id)
{
    $CI=get_instance();
    $CI->load->model('doctor_model');
    echo $CI->doctor_model->get_allergy_name($allergy_id);
}



function get_lab_test_name($test_id)
{
    $CI=get_instance();
    $CI->load->model('doctor_model');
    echo $CI->doctor_model->get_lab_test_name($test_id);
}




function get_lab_test_price($test_id)
{
    $CI=get_instance();
    $CI->load->model('doctor_model');
     return $CI->doctor_model->get_lab_test_price($test_id);
}

function queue($stage)
{
    $CI=get_instance();
    $CI->db->where('current_stage',$stage);
    $number=$CI->db->get('visits');
    return $number->num_rows;
}