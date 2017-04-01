<?php

class Products_model extends CI_Model{

    public function __construct() {

        $this->load->database();
    }

    public function get_products(){


            $this->db->order_by('id', 'RANDOM');
            $this->db->limit(6);
            $query = $this->db->get('products');

            return $query->result_array();

    }

    public function insert_prod($post_image){

                 $data = array(
                    'name' => $this->input->post('prodname'),
                    'price' => $this->input->post('prodprice'),

                    'desc' => $this->input->post('desc'),

                    'image' => $post_image
                  );

                  return $this->db->insert('products', $data);


    }

  }
