<?php
/**
 * Created by PhpStorm.
 * User: Edwin
 * Date: 15-01-17
 * Time: 11:28 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends Application
{

    public function index()
    {
        //$this->load->view('gallery');

        // Get all images from the database
        $pix = $this->images->all();

        // Build an array of formatted cells
        foreach ($pix as $picture) {
            $cells[] = $this->parser->parse('_cell', (array)$picture, true);
        }

        // Prime the table class
        $this->load->library('table');
        $parms = array(
            'table_open' => '<table class ="gallery">',
            'cell_start' => '<td class = "oneimage">',
            'cell_alt_start' => '<td class="oneimage">'
        );
        $this->table->set_template($parms);

        // Generate the table
        $rows = $this->table->make_columns($cells, 3);
        $this->data['thetable'] = $this->table->generate($rows);

        $this->data['pagebody'] = 'gallery';
        $this->render();
    }
}