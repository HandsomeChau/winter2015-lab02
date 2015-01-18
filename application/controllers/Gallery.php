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
        $this->data['pagebody'] = 'gallery';
        $this->render();
    }
}