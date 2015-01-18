<?php
/**
 * Created by PhpStorm.
 * User: Edwin
 * Date: 15-01-17
 * Time: 11:27 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Application
{

    public function index()
    {
        //$this->load->view('about');
        $this->data['pagebody'] = 'about';
        $this->render();
    }
}