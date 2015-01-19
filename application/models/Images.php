<?php

/**
 * Created by PhpStorm.
 * User: Edwin
 * Date: 15-01-18
 * Time: 3:54 PM
 */
class Images extends CI_Model
{

    // Constructor
    function __construct()
    {
        parent::__construct();
    }

    // Return all images, descending order by post date
    function all()
    {
        $this->db->order_by("id", "desc");
        $query = $this->db->get('images');
        return $query->result_array();
    }

    function newest()
    {
        $this->db->order_by("id", "desc");
        $this->db->limit(3);
        $query = $this->db->get('images');
        return $query->result_array();
    }
}