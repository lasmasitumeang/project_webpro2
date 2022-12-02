<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	public function index()
	{
        $this->load->view('templates/header');
		$this->load->view('homepage');
	}
    
    public function cart()
    {
        $this->load->view('templates/header');
        $this->load->view('cart');
    }

     public function product ()
     {
        $this->load->view('templates/header');
        $this->load->view('product');
     }

     public function contact ()
     {
        $this->load->view('templates/header');
         $this->load->view('contact');
     }

    // public function ()
    // {
    //     $this->load->view('templates/header');
    //     $this->load->view('');
    // }

    // public function cart()
    // {
    //     $this->load->view('templates/header');
    //     $this->load->view('cart');
    // }
}
