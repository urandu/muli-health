<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


function is_logged_in()
{
    $CI = &get_instance ();
    $user_data = $CI->session->all_userdata ();

    return isset ($user_data ['user_id']);
}

function get_drug_name($prescription)
{
    $CI=get_instance();
    $CI->load->model('doctor_model');
    echo $CI->doctor_model->get_drug_name($prescription);
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