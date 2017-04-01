<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {


	public function index()
	{
    $data['items'] = $this->products_model->get_products();
		$this->load->view('products', $data);
	}
}
