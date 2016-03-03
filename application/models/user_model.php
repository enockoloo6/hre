<?php

class User_model extends CI_Model
{

    /**
     * Validate the login's data with the database
     * @param string $user_name
     * @param string $password
     * @return void
     */
    function validate($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('users');

        if ($query->num_rows == 1) {
            return $query->result_array();
        }
        else{
            return null;
        }
    }



    //create_member

    function new_user($f_name,$other_names,$phone_number,$national_id,$password,$email,$role=0)
    {

        $this->db->where('email', $email);
        $query = $this->db->get('users');


        if ($query->num_rows > 0) {
            echo '<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>';
            echo "Email address already registered";
            echo '</strong></div>';
        } else {

            $new_user_insert_data = array(
                'f_name' => $f_name,                
                'other_names' => $other_names,
                'phone_number' => $phone_number,
                'national_id' => $national_id,
                'password' => md5($password),
                'email' => $email,
                'role'=>$role
            );
            $insert = $this->db->insert('users', $new_user_insert_data);
            return $insert;
        }
    }

    function edit_user($f_name,$other_names,$phone_number,$national_id,$password,$email,$user_id)
    {

        if ($password==1111) {


            $new_user_insert_data = array(
                'phone_number' => $phone_number,
                'email' => $email,
                'f_name' => $f_name,
                'other_names' => $other_names,
                'national_id'=>$national_id
            );


        } else {

            $new_user_insert_data = array(
                'phone_number' => $phone_number,
                'email' => $email,
                'fname' => $f_name,
                'other_names' => $other_names,
                'national_id'=>$national_id,
                'password'=>$password
            );

        }
        $this->db->where('user_id', $user_id);
        $insert = $this->db->update('users', $new_user_insert_data);

        return $insert;
    }


    function get_user($user_id)
    {
        $this->db->where('user_id',$user_id);
        $user=$this->db->get('users');
        return $user->result();
    }

    function get_all_users()
    {
        $users=$this->db->get('users');
        return $users->result();
    }

// this is to be used during the sign up to initialize the photo
    function get_profile_image_for_the_logged_in_user($user_identification){
            
    //$user_identification = $this->session->userdata('user_id');
            $image = array(
            'Image_id' => NULL,       
            'user_id' => $user_identification,
            );

            $this->db->select('image_name');
            $this->db->from('images');
            $this->db->where($image); 
            $query = $this->db->get();
            $result = $query->row()->image_name;
            return $result;

    $this->session->set_userdata(array('image_name' => $result));
    
    }
    //end of the photo


    function add_profile_photo($img){
        // check of the user id is already in the owners table 
            $user_identification = $this->session->userdata('user_id');

            $image = array(
            'Image_id' => NULL,       
            'user_id' => $user_identification,
            );
        //use the user id to update not all the data
        $this->db->where($image);    
        $this->db->from('images');

        $query = $this->db->get();      
            if ($query->num_rows() > 0){

                $this->db->where($image);
                $this->db->update('images', $img);           
            }
            else if($query->num_rows() == 0){
            $insert = $this->db->insert('images', $img);
            $this->session->set_userdata(array('photo' => $img['image_name']));
            return $insert;
            }
        }

}

