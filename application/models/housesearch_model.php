<?php
class Housesearch_model extends CI_Model{

	function post_rating($rating=NULL)
	{
		$this->db->insert('ratings', $rating);
		return $this->db->insert_id();
	}
    function check_if_house_is_rated($rating)
    {
        $this->db->from('ratings');
        $this->db->where($rating);
        $query = $this->db->get();

        if($query->num_rows() > 0) {
            return true;
        }
        else{
            return false;
        }
    }
	function get_houses(){


		    $image = array(
            'Image_id' => !NULL,       
            // 'user_id' => $user_identification,
            );

            $this->db->select('image_name');
            $this->db->from('images');
            $this->db->where($image); 
            $query = $this->db->get();
            
			if($query->num_rows() > 0){
					$image_arr;
					// Format for passing into jQuery loop
					foreach ($query->result() as $imgs) {
						$image_arr[$imgs->image_id] = $imgs->image_name;
					}

					return $image_arr;
				}
    }

    function show_number_of_houses_in_model($locations){

        $this->db->from('house_details');
        $this->db->where('location', $locations);
        $query = $this->db->get();

        if($query->num_rows() > 0) {
            $final = $query->result();
            $count = 0;
            foreach ($final as $no) {
                $count++;
            }

            if($locations) {
                $m = $count;
                return $m;
            }else{
                $m = 'Select location from the dropdown above';
                return $m;
            }


            //echo ($count);
           return $count;
        }

    }

    function display_house_images(){

            $this->db->select('*');
            $this->db->from('images');
            $query = $this->db->get();
            
		    return $query->result();    
    }


    function get_house_locations(){

            $this->db->select('location');
            $this->db->from('house_details');            
            $query = $this->db->get();
            
			if($query->num_rows() > 0){
					$locations_arr;
					// Format for passing into jQuery loop
					foreach ($query->result() as $locations) {
						$locations_arr[] = $locations->location;
					}

					return $locations_arr;
			}
    }


    function get_particular_rating($user_id){

    	    $ratings = array(
            'rating',       
            'house_id',
            );

    	    $this->db->select($ratings);
            $this->db->from('ratings');
            $this->db->where('user_id',$user_id);           
            $query = $this->db->get();

			if($query->num_rows() > 0){
			$ratings_arr;
			// Format for passing into jQuery loop
			foreach ($query->result() as $the_ratings) {
				$ratings_arr[] = $the_ratings->house_id."==".$the_ratings->rating;
			}

			return $ratings_arr;
		}
            // return $query;    	
    }

    function get_other_ratings($user_id){
    	    $ratings = array(
            'rating',       
            'house_id',
            );

    	    $this->db->select('user_id');
            $this->db->from('ratings');
            $query = $this->db->get();
            $queryArr = $query->result_array();

    foreach ($queryArr as $row) {

        $this->db->select('user_id, house_id, rating');
        $this->db->from('ratings');
        $this->db->where('user_id', $row['user_id']);
        $query2 = $this->db->get();
        $result2 = $query2->result_array();

        foreach ($result2 as $row) {

            $house_id_and_rating = $row['rating'];
            if($row['rating'] != 0 || $query2->num_rows() <= 0){
            $data2[$row['house_id']] = $house_id_and_rating;//use the house id as the index for the ratings
            }
        }

        $final[$row['user_id']] = $data2;
    }

        return $final;

        require_once("recommend.php");
        $re = new Recommend();

        echo "<pre>";
        print_r($re->getRecommendations($data, "3"));
        echo "</pre>";
  	
    }

//get parameters to be used for selecting the random values
function get_parameters_for_doing_random($value_to_select, $table_name,$where_clause,$where_clause_value)
{
    $id = $this->session->userdata('user_id');
            $this->db->select($value_to_select);
            $this->db->from($table_name);
            $this->db->where($where_clause, $where_clause_value);
            $query = $this->db->get();

           if($query->num_rows() > 0) {
               $result = $query->row()->$value_to_select;
               return $result;
           }
}

//get the recommended houses randomly from the database
function get_users_with_selected_parameters($fild_name, $selected_parameter, $table_name)
{ 
            $id = $this->session->userdata('user_id');

            $data = array(      
            'user_id !=' => $id,
            $fild_name => $selected_parameter,
            );

            $this->db->select('user_id');
            $this->db->from($table_name);
            $this->db->where($data);
            $query = $this->db->get();
            return $query->result();
}
/*********This function is perfectly working********/
//function get_random_based_on_gender()
//{
////function get_random($value_to_select, $table_name, $field_to_get)
//        $gender = $this->get_parameters_for_doing_random('gender', 'users', 'gender');//get gender of the current user
//
//        $data = $this->get_users_with_selected_parameters('gender', $gender);//this returns the user id of user with this gender
//
//        foreach ($data as $row)
//            {
//                $this->db->where('owner', $row->user_id);
//                $this->db->order_by('house_id', 'RANDOM');
//                $this->db->limit(1);
//                $query = $this->db->get('house_details');
//                $result = $query->result();
//                //return $result;
//                print_r($result);
//            }
//
//
//    $this->db->where('owner', $row->user_id);
//    $this->db->order_by('house_id', 'RANDOM');
//    $this->db->limit(1);
//    $query = $this->db->get('house_details');
//    $result = $query->result();
//}

    function get_random_based_on_gender()
    {
        $id = $this->session->userdata('user_id');
        $gender = $this->get_parameters_for_doing_random('gender', 'users', 'user_id', $id);//get gender of the current user
        $data = $this->get_users_with_selected_parameters('gender', $gender, 'users');//this returns the user id of user with this gender

        foreach ($data as $row) {

            $houses_from_ratings = array(
                'user_id' => $row->user_id,
                'rating >' => 1,
            );
            $this->db->where($houses_from_ratings);
            $this->db->order_by('house_id', 'RANDOM');
            $this->db->limit(1);
            $query = $this->db->get('ratings');
            $result = $query->result();

            if ($result != "") {
                 //$count=0;
                foreach ($result as $house_id) //loop through the result from the ratings table to get the house ids
                {
                    //$count++;
                    $this->db->where('house_id', $house_id->house_id); //get the house details of the house rated by other males
                    $query = $this->db->get('house_details');
                    $recommended_house_result = $query->result();
                    //print_r($recommended_house_result);
                    //$r[$count] = $recommended_house_result;
                    return $recommended_house_result;

                }
                //print_r($r);
            }
        }
    }


    function get_all_random_based_on_gender()
    {

        $id = $this->session->userdata('user_id');
        $gender = $this->get_parameters_for_doing_random('gender', 'users', 'user_id', $id);//get gender of the current user
        $data = $this->get_users_with_selected_parameters('gender', $gender, 'users');//this returns the user id of user with this gender

      if(!empty($data[1])){
        foreach ($data as $row) {

            $houses_from_ratings = array(
                'user_id' => $row->user_id,
                'rating >' => 1,
            );

            $this->db->where($houses_from_ratings);
            $this->db->order_by('house_id', 'RANDOM');
            $query = $this->db->get('ratings');
            $result = $query->result();
            //return $result;
            //print_r($result);

            if ($result != "") {
                $count=0;
                foreach ($result as $house_id) //loop through the result from the ratings table to get the house ids
                {
                    $count++;
                    $this->db->where('house_id', $house_id->house_id); //get the house details of the house rated by other males
                    $query = $this->db->get('house_details');
                    $recommended_house_result = $query->result();
                    $r[$count] = $recommended_house_result;
                }
                //print_r($r);
                return $r;

            }
        }
    }
    }

function get_random_based_on_age()
{
    $id = $this->session->userdata('user_id');
    $age = $this->get_parameters_for_doing_random('age', 'users','user_id', $id);//get gender of the current user
    $data = $this->get_users_with_selected_parameters('age', $age, 'users');//this returns the user id of user with this gender

    foreach ($data as $row) {

        $houses_from_ratings = array(
            'user_id' => $row->user_id,
            'rating >' => 1,
        );

        $this->db->where($houses_from_ratings);
        $this->db->order_by('house_id', 'RANDOM');
        $this->db->limit(1);
        $query = $this->db->get('ratings');
        $result2 = $query->result();
        //return $result;
        //print_r($result);

        if ($result2 != "") {
            foreach ($result2 as $house_id) //loop through the result from the ratings table to get the house ids
            {
                $this->db->where('house_id', $house_id->house_id); //get the house details of the house rated by other males
                $query = $this->db->get('house_details');
                $recommended_house_result = $query->result();
                // print_r($recommended_house_result);
                return $recommended_house_result;
            }
        }
    }
}

    function get_all_random_based_on_age()
    {
        $id = $this->session->userdata('user_id');
        $age = $this->get_parameters_for_doing_random('age', 'users','user_id', $id);//get gender of the current user
        $data = $this->get_users_with_selected_parameters('age', $age, 'users');//this returns the user id of user with this gender
     
    if(!empty($data[1])){
        foreach ($data as $row) {

            $houses_from_ratings = array(
                'user_id' => $row->user_id,
                'rating >' => 1,
            );

            $this->db->where($houses_from_ratings);
            $this->db->order_by('house_id', 'RANDOM');
            //$this->db->limit(1);
            $query = $this->db->get('ratings');
            $result2 = $query->result();

            if ($result2 != "") {
                $count=0;
                foreach ($result2 as $house_id) //loop through the result from the ratings table to get the house ids
                {
                    $count++;
                    $this->db->where('house_id', $house_id->house_id); //get the house details of the house rated by the same genders
                    $query = $this->db->get('house_details');
                    $recommended_house_result = $query->result();
                    $a_r[$count]= $recommended_house_result;
                }
                //print_r($a_r);
                return $a_r;
            }
        }
    }
    }

function get_random_based_on_interests()
{
    $id = $this->session->userdata('user_id');

    $interest_id = $this->get_parameters_for_doing_random('interest_id', 'user_interest','user_id', $id);//get interest of the current user
    //$interest_name = $this->get_parameters_for_doing_random('interest_name', 'interests','interest_id', $interest_id);//get interest of the current user
    $data = $this->get_users_with_selected_parameters('interest_id', $interest_id, 'user_interest' );//this returns the users id of user with this interest

//    print_r($data);
//    echo $interest_id;
//    echo $interest_name;

    foreach ($data as $row) {

        $houses_from_ratings = array(
            'user_id' => $row->user_id,
            'rating >' => 1,
        );

        $this->db->where($houses_from_ratings);
        $this->db->order_by('house_id', 'RANDOM');
        $this->db->limit(1);
        $query = $this->db->get('ratings');
        $result2 = $query->result();
        //return $result;
       // print_r($result2);
        if ($result2 != "") {
            foreach ($result2 as $house_id) //loop through the result from the ratings table to get the house ids
            {
                $details_to_select = array(
                    'house_id' => $house_id->house_id,
                    'status' => 'available',
                );

                $this->db->where($details_to_select); //get the house details of the house rated by people with the same interest.
                $query = $this->db->get('house_details');
                $recommended_house_result = $query->result();
                //print_r($recommended_house_result);
                return $recommended_house_result;
            }
        }
    }

}

    function get_all_random_based_on_interests()
    {
        $id = $this->session->userdata('user_id');
        $interest_id = $this->get_parameters_for_doing_random('interest_id', 'user_interest','user_id', $id);//get interest of the current user
        $data = $this->get_users_with_selected_parameters('interest_id', $interest_id, 'user_interest' );//this returns the users id of user with this interest

    if(!empty($data[1])){
        foreach ($data as $row) {

            $houses_from_ratings = array(
                'user_id' => $row->user_id,
                'rating >' => 1,
            );

            $this->db->where($houses_from_ratings);
            $this->db->order_by('house_id', 'RANDOM');
            //$this->db->limit(1);
            $query = $this->db->get('ratings');
            $result2 = $query->result();

            if ($result2 != "") {
                $count=0;
                foreach ($result2 as $house_id) //loop through the result from the ratings table to get the house ids
                {
                    $count++;
                    $details_to_select = array(
                        'house_id' => $house_id->house_id,
                        'status' => 'available',
                    );

                    $this->db->where($details_to_select); //get the house details of the house rated by people with the same interest.
                    $query = $this->db->get('house_details');
                    $recommended_house_result = $query->result();
                    $i_r[$count]=$recommended_house_result;
                }

                //print_r($i_r);
                return $i_r;
            }
        }
    }

    }



function get_random_based_on_occupations()
{

    $id = $this->session->userdata('user_id');

    $occupation_id = $this->get_parameters_for_doing_random('occupation_id', 'user_occupation','user_id', $id);//get $occupation of the current user
    $data = $this->get_users_with_selected_parameters('occupation_id', $occupation_id, 'user_occupation' );//this returns the users id of user with this $occupation

    foreach ($data as $row) {

        $houses_from_ratings = array(
            'user_id' => $row->user_id,
            'rating >' => 1,
        );

        $this->db->where($houses_from_ratings);
        $this->db->order_by('house_id', 'RANDOM');
        $this->db->limit(1);
        $query = $this->db->get('ratings');
        $result2 = $query->result();

        if ($result2 != "") {
            foreach ($result2 as $house_id) //loop through the result from the ratings table to get the house ids
            {
                $details_to_select = array(
                    'house_id' => $house_id->house_id,
                    'status' => 'available',
                );

                $this->db->where($details_to_select); //get the house details of the house rated by people with the same $occupation.
                $query = $this->db->get('house_details');
                $recommended_house_result = $query->result();
                //print_r($recommended_house_result);
                return $recommended_house_result;
            }
        }
    }

}

    function get_all_random_based_on_occupations()
    {
        $id = $this->session->userdata('user_id');
        $occupation_id = $this->get_parameters_for_doing_random('occupation_id', 'user_occupation','user_id', $id);//get $occupation of the current user
        $data = $this->get_users_with_selected_parameters('occupation_id', $occupation_id, 'user_occupation' );//this returns the users id of user with this $occupation
   
    if(!empty($data[1])){
        foreach ($data as $row) {
            $houses_from_ratings = array(
                'user_id' => $row->user_id,
                'rating >' => 1,
            );

            $this->db->where($houses_from_ratings);
            $this->db->order_by('house_id', 'RANDOM');
//            $this->db->limit(1);
            $query = $this->db->get('ratings');
            $result2 = $query->result();

            if ($result2 != "") {
                $count=0;
                foreach ($result2 as $house_id) //loop through the result from the ratings table to get the house ids
                {
                    $count++;
                    $details_to_select = array(
                        'house_id' => $house_id->house_id,
                        'status' => 'available',
                    );

                    $this->db->where($details_to_select); //get the house details of the house rated by people with the same $occupation.
                    $query = $this->db->get('house_details');
                    $recommended_house_result = $query->result();
                    $o_r[$count]=$recommended_house_result;
                }

                //print_r($o_r);
                return $o_r;
            }
        }
    }

    }

    /********************************************************************************************************
     * @return mixed            GET HOUSES SEARCHED BY THE USER                                             *
     *******************************************************************************************************/


    function search_for_houses($search_details){

        $this->db->select('*');
        $this->db->from('house_details');
        $this->db->where($search_details);
        $query = $this->db->get();
        $searches = $query->result();
        return $searches;
    }

    function get_locations_where_price_and_type_is_same($price_type){

        $this->db->select('house_id, location');
        $this->db->from('house_details');
        $this->db->where($price_type);
        $query = $this->db->get();
        $searches = $query->result();
        return $searches;
    }

    function get_type_where_price_and_location_is_same($price_location){

        $this->db->select('house_id, type');
        $this->db->from('house_details');
        $this->db->where($price_location);
        $query = $this->db->get();
        $searches = $query->result();
        return $searches;
    }

    /********************************************************************************************************
     *                          GET HOUSES SEARCHED BY THE USER                                             *
     *******************************************************************************************************/
    function post_the_message($details){

        $this->db->insert('messages', $details);
        return $this->db->insert_id();
    }

    function confirm_reading($field_to_update, $s_id){
        $this->db->where('message_id', $s_id);
        $this->db->update('messages', $field_to_update);
    }


    function get_my_messages(){

        $id = $this->session->userdata('user_id');
        $msg = array(
            'recipient_id' => $id,
            //'message_status' => "unread",
        );

        $this->db->select('*');
        $this->db->from('messages');
        $this->db->where($msg);
        $this->db->order_by('message_status','desc');
        $query = $this->db->get();
        $msg = $query->result();
        return $msg;
    }
    function delete_message($message_ids){

        foreach($message_ids as $ids){

            $this->db->where('message_id', $ids);
            $this->db->delete('messages');
        }

    }
    function confirm_read($message_ids){
        foreach($message_ids as $ids){

            $message_read = array(
                'message_status' => 'read',
            );
            $this->db->where('message_id', $ids);
            $this->db->update('messages', $message_read);
        }
    }
}
?>