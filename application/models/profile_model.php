<?php 
class Profile_model extends CI_Model{
		
	/*-------------------------------House details-----------------------------------------------------*/
	function show_all_houses(){
	$query = $this->db->get('house_details');
	$query_result = $query->result();
	return $query_result;
	}

	function show_posted_houses(){
		$this->db->select('*');
		$this->db->from('house_details');
		$this->db->where('owner', $this->session->userdata('user_id'));
		$query = $this->db->get();
		$query_result = $query->result();
		return $query_result;
	}
	// Function To Fetch Selected House Record
	function show_particular_house($dataf){
	$this->db->select('*');
	$this->db->from('house_details');
	$this->db->where('house_id', $dataf);
	$query = $this->db->get();
	$result = $query->result();
	return $result;
	}

	/*add a house to the database*/
	function add_a_house($house=NULL){
	$this->db->insert('house_details', $house);
	return $this->db->insert_id();
    }

    function update_house_owner_table($owner){
       // check of the user id is already in the owners table 
       $this->db->where($owner);   	
	   $this->db->from('house_owners');

		$query = $this->db->get();		
		    if ($query->num_rows() == 0){
		    	$this->db->insert('house_owners', $owner);
		    	return $this->db->insert_id();
		    }  
	

    }


    /*this function gets a list of all houses in the datbase*/
	function get_houses(){
	$this->db->select('*');
	$this->db->from('house_details');
	$query = $this->db->get();
	return $query->result();
    }

    function get_my_houses_locations($user_id){
    $this->db->distinct();
    $this->db->select('location');	
	$this->db->where('owner', $user_id);
	$query = $this->db->get('house_details');
	return $query->result();
    } 
    function get_my_houses_dates($user_id){
    $this->db->distinct();
    $this->db->select('house_post_date');	
	$this->db->where('owner', $user_id);
	$query = $this->db->get('house_details');
	return $query->result();
    }

    /*this function updates data of a particular house given its id*/

	function update_the_house_status($hid, $stus){

			$this->db->where('house_id', $hid);
			$this->db->update('house_details', $stus);
		return $this->db->insert_id();

	}


	function update_house($hid,$hdata){
    $this->db->where('house_id', $hid);
    $this->db->update('house_details', $hdata);
	}

// this is used to get a house id where the details are same as those just posted in the
	function get_house_id($dataf){
		$this->db->select('house_id');
		$this->db->from('house_details');
		$this->db->where($dataf);
		$query = $this->db->get();
		$result = $query->row()->house_id;
		return $result;
	}

// images

    function add_house_image($img){

	    $this->db->insert('images', $img);
	 	return $this->db->insert_id();
    } 

    function update_house_image($imgid, $img){

        $this->db->where('image_id', $imgid);
	    $this->db->update('images', $img);
		return $this->db->insert_id();
    }

    function show_images(){
		$this->db->select('*');
		$this->db->from('images');
		$query = $this->db->get();
		return $query->result();
    } 

  //   function show_images(){

  //       $user_id = $this->session->userdata('user_id');

		// $this->db->select('image_name');
		// $this->db->from('images');
  //       $this->db->where('user_id', $user_id && 'Image_id', 'null');		
		// $query = $this->db->get();
  //       $result = $query->row()->image_name;
		// return $result;
  //   } 

// images

	// GET THE PICTURE OF THE HOUSE SELECTED
    function get_picture_of_selected_house_id($house_id)
    {
        $this->db->select('photo1');
        $this->db->from('house_details');
        $this->db->where('house_id', $house_id);
        $query = $this->db->get();
        $result = $query->row()->photo1;
        return $result;
    }

	/*---------------------------------------------------------------------------------------------------*/
	/*---------------------------------------------------------------------------------------------------*/

} 
?>-