<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Load necessary models or libraries here
    }

    public function index() {
        // Load dummy content data
        $data['dummy_content'] = $this->generate_dummy_content();

        // Load the view to display the page
        $this->load->view('articles/articles', $data);
    }

    private function generate_dummy_content() {
        // Generate an array of dummy content (for example, cards)
        $dummy_content = array(
            array('title' => 'Card 1', 'content' => 'This is the content of Card 1'),
            array('title' => 'Card 2', 'content' => 'This is the content of Card 2'),
            array('title' => 'Card 3', 'content' => 'This is the content of Card 3'),
        );

        return $dummy_content;
    }
}
