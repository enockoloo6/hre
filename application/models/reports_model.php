<?php
class Reports_model extends CI_Model
{

    function show_number_of_houses_in_model($locations)
    {

        $this->db->from('house_details');
        $this->db->where('location', $locations);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $final = $query->result();
            $count = 0;
            foreach ($final as $no) {
                $count++;
            }

            if ($locations) {
                $m = $count;
                return $m;
            } else {
                $m = 'Select location from the dropdown above';
                return $m;
            }
            //echo ($count);
            return $count;
        }
    }


    function houses_per_date($dates)
    {

        if ($dates) {

            $this->db->from('house_details');
            $this->db->where('house_post_date', $dates);
            $query = $this->db->get();

            return $query->result();
        } else {
            $d = ' Select a date from the drop down above ';
            return $d;
        }
    }

}
?>