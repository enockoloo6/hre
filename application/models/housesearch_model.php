<?php
class Housesearch_model extends CI_Model{

	function post_rating($rating=NULL)
	{
		$this->db->insert('ratings', $rating);
		return $this->db->insert_id();
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

}
?>