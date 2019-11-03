<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries\REST_Controller.php';

class Formulir extends REST_Controller {
        public function __construct()
        {
                parent::__construct();
        }

        public function index_post(){
                $input = $this->input->post();
                $this->load->model("m_form");
                $return = $this->m_form->inputData($input);
                $this->response($return, REST_Controller::HTTP_OK);
        }


        public function listdata_post(){
                $this->load->model("m_form");
                $search = $_POST['search']['value']; // Ambil data yang di ketik user pada textbox pencarian
                $limit = $_POST['length']; // Ambil data limit per page
                $start = $_POST['start']; // Ambil data start
                $order_index = $_POST['order'][0]['column']; // Untuk mengambil index yg menjadi acuan untuk sorting
                $order_field = $_POST['columns'][$order_index]['data']; // Untuk mengambil nama field yg menjadi acuan untuk sorting
                $order_ascdesc = $_POST['order'][0]['dir']; // Untuk menentukan order by "ASC" atau "DESC"
                $sql_total = $this->m_form->count_all_alternatif(); // Panggil fungsi count_all pada SiswaModel
                $sql_data = $this->m_form->filter_alternatif($search, $limit, $start, $order_field, $order_ascdesc); // Panggil fungsi filter pada SiswaModel
                $sql_filter = $this->m_form->count_filter_alternatif($search); // Panggil fungsi count_filter pada SiswaModel
                $callback = array(
                        'draw'=>$_POST['draw'], // Ini dari datatablenya
                        'recordsTotal'=>$sql_total,
                        'recordsFiltered'=>$sql_filter,
                        'data'=>$sql_data
                );
                header('Content-Type: application/json');
                echo json_encode($callback); // Convert array $callback ke json
        }
              
}