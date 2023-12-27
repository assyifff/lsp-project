<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_articles extends CI_Model {
    public function get_articles() {
        // Implement the logic to retrieve articles from the database
        // For example, you can use $this->db->get('articles') to get all articles
        $this->db->select('*');
        $this->db->from('articles');
        $query = $this->db->get();
        return $query->result();
    }
}
