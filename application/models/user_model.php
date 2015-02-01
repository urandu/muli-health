<?php

class User_model extends CI_Model
{

    /**
     * Validate the login's data with the database
     * @param string $user_name
     * @param string $password
     * @return void
     */
    function validate($user_name, $password)
    {
        $this->db->where('user_name', $user_name);
        $this->db->where('password', $password);
        $query = $this->db->get('users');

        if ($query->num_rows == 1) {
            return $query->result_array();
        }
    }

    function all_staff()
    {
        $query = $this->db->get('users');

        if ($query->num_rows > 0) {
            return $query->result_array();
        }
    }



    //create_member

    function new_user($name, $phone, $dob, $gender, $id_number, $role, $password, $email, $user_name)
    {
        $this->db->where('user_name', $user_name);
        $query = $this->db->get('users');

        if ($query->num_rows > 0) {
            echo '<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>';
            echo "Username already taken";
            echo '</strong></div>';
        } else {

            $new_user_insert_data = array(
                'name' => $name,
                'phone' => $phone,
                'dob' => $dob,
                'gender' => $gender,
                'id_number' => $id_number,
                'role' => $role,
                'password' => md5($password),
                'email' => $email,
                'user_name' => $user_name
            );
            $insert = $this->db->insert('users', $new_user_insert_data);
            return $insert;
        }
    }


}

