<?php
class Housesearch_model extends CI_Model{

	function post_rating($rating=NULL)
	{
		$this->db->insert('ratings', $rating);
		return $this->db->insert_id();
	}
}
?>