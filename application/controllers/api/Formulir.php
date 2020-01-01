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

        public function listsubkriteria_post(){
                $this->load->model("m_form");
                $search = $_POST['search']['value']; // Ambil data yang di ketik user pada textbox pencarian
                $limit = $_POST['length']; // Ambil data limit per page
                $start = $_POST['start']; // Ambil data start
                $indikator = (int) $_POST['id_indikator'];
                $order_index = $_POST['order'][0]['column']; // Untuk mengambil index yg menjadi acuan untuk sorting
                $order_field = $_POST['columns'][$order_index]['data']; // Untuk mengambil nama field yg menjadi acuan untuk sorting
                $order_ascdesc = $_POST['order'][0]['dir']; // Untuk menentukan order by "ASC" atau "DESC"
                $sql_total = $this->m_form->count_all_subkriteria($indikator); 
                $sql_data = $this->m_form->filter_subkriteria($search, $limit, $start, $order_field, $order_ascdesc, $indikator); 
                $sql_filter = $this->m_form->count_filter_subkriteria($search, $indikator);
                $callback = array(
                        'draw'=>$_POST['draw'], // Ini dari datatablenya
                        'recordsTotal'=>$sql_total,
                        'recordsFiltered'=>$sql_filter,
                        'data'=>$sql_data,
                        'indikator'=>$indikator
                );
                header('Content-Type: application/json');
                echo json_encode($callback); // Convert array $callback ke json
        }

        public function listindikator_post(){
                $this->load->model("m_form");
                $search = $_POST['search']['value']; // Ambil data yang di ketik user pada textbox pencarian
                $limit = $_POST['length']; // Ambil data limit per page
                $start = $_POST['start']; // Ambil data start
                $order_index = $_POST['order'][0]['column']; // Untuk mengambil index yg menjadi acuan untuk sorting
                $order_field = $_POST['columns'][$order_index]['data']; // Untuk mengambil nama field yg menjadi acuan untuk sorting
                $order_ascdesc = $_POST['order'][0]['dir']; // Untuk menentukan order by "ASC" atau "DESC"
                $sql_total = $this->m_form->count_all_indikator(); 
                $sql_data = $this->m_form->filter_indikator($search, $limit, $start, $order_field, $order_ascdesc); 
                $sql_filter = $this->m_form->count_filter_indikator($search);
                $callback = array(
                        'draw'=>$_POST['draw'], // Ini dari datatablenya
                        'recordsTotal'=>$sql_total,
                        'recordsFiltered'=>$sql_filter,
                        'data'=>$sql_data
                );
                header('Content-Type: application/json');
                echo json_encode($callback); // Convert array $callback ke json
        }

        public function getSisaBobot_get(){
                $this->load->model("m_form");

                $result = $this->m_form->getSisaBobot();

                $return = array(
                        'result' => $result,
                        'status' => 'success'
                );
                header('Content-Type: application/json');
                echo json_encode($return); // Convert array $callback ke json
        }


        public function getdetailpenerima_post(){
                $this->load->model("m_form");
                $id_jenis = $_POST['id_jenis'];
                $id_survey = $_POST['id_survey'];

                $result = $this->m_form->getdetailpenerima( $id_jenis, $id_survey );

                $return = array(
                        'result' => $result,
                        'status' => 'success'
                );
                header('Content-Type: application/json');
                echo json_encode($return); // Convert array $callback ke json
        }


        public function saveBobot_post(){
                $this->load->model("m_form");
                $id_subkriteria = (int)$_POST['id_subkriteria'];
                $bobot = (float)$_POST['bobot'];
                $sisa = (float)$_POST['sisa'];

                $result = $this->m_form->saveBobot( $id_subkriteria, $bobot, $sisa );

                $return = array(
                        'result' => $result,
                        'id_subkriteria' => $id_subkriteria,
                        'bobot' => $bobot,
                        'sisa' => $sisa
                );
                header('Content-Type: application/json');
                echo json_encode($return); // Convert array $callback ke json
        }

       

              
}