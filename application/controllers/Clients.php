<?php

    Class Clients extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->model('clients_model');
        }

        public function index() {

            $clients = $this->clients_model->get_all_clients();

            $data = array(
                'clients' => $clients,
            );

            $message = $this->session->tempdata('message');
            $this->session->unset_tempdata('message');
            if(isset($message)) {
                $data['message'] = $message;
            }

            $url = $this->twig->display('/pages/clients', $data);

            $this->session_model->check_session($url);
        }

        public function edit($id) {

            $this->session_model->check_session_no_red();

            $client = $this->clients_model->get_client_data($id);

            $data = array(
                'client' => $client,
            );

            $message = $this->session->tempdata('message');
            $this->session->unset_tempdata('message');
            if(isset($message)) {
                $data['message'] = $message;
            }

            if($client == false) {
                redirect('/clients');
            } else {
                $this->twig->display('/pages/edit_client', $data);
            }
        }

        public function add() {

            $this->session_model->check_session_no_red();

            $this->twig->display('/pages/add_client');
        }

        public function edit_client($id) {

            $this->session_model->check_session_no_red();

            $this->form_validation->set_rules('name', 'Nazwa', 'required');
            $this->form_validation->set_rules('address', 'Adres', 'required');
            $this->form_validation->set_rules('place', 'Miejscowość', 'required');
            $this->form_validation->set_rules('postal_code', 'Kod pocztowy', 'required');
            $this->form_validation->set_rules('phone', 'Numer telefonu', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');

            if ($this->form_validation->run() == FALSE) {
                redirect('/clients/edit/'.$id.'');
            } else {
                $data = array(
                    'name' => $this->input->post('name'),
                    'address' => $this->input->post('address'),
                    'place' => $this->input->post('place'),
                    'postal_code' => $this->input->post('postal_code'),
                    'phone' => $this->input->post('phone'),
                    'email' => $this->input->post('email'),
                );
                $this->db->where('client_id', $id);
                $result = $this->db->update('clients', $data);

                if($result == true) {
                    $msg = array(
                        'success' => true,
                        'message' => 'Pomyślnie edytowano dane klienta',
                    );
                } else {
                    $msg = array(
                        'success' => false,
                        'message' => 'Nie udało się zedytować danych klienta',
                    );
                }

                $this->session->set_tempdata('message', $msg, 10);

                redirect('/clients/edit/'.$id.'');
            }
        }

        public function add_client() {

            $this->session_model->check_session_no_red();

            $this->form_validation->set_rules('name', 'Nazwa', 'required');
            $this->form_validation->set_rules('address', 'Adres', 'required');
            $this->form_validation->set_rules('place', 'Miejscowość', 'required');
            $this->form_validation->set_rules('postal_code', 'Kod pocztowy', 'required');
            $this->form_validation->set_rules('phone', 'Numer telefonu', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');

            if ($this->form_validation->run() == FALSE) {
                redirect('/clients/add');
            } else {
                $data = array(
                    'name' => $this->input->post('name'),
                    'address' => $this->input->post('address'),
                    'place' => $this->input->post('place'),
                    'postal_code' => $this->input->post('postal_code'),
                    'phone' => $this->input->post('phone'),
                    'email' => $this->input->post('email'),
                );

                $result = $this->db->insert('clients', $data);

                if($result == true) {
                    $msg = array(
                        'success' => true,
                        'message' => 'Pomyślnie dodano nowego klienta',
                    );
                } else {
                    $msg = array(
                        'success' => false,
                        'message' => 'Nie udało się dodać nowego klienta',
                    );
                }

                $this->session->set_tempdata('message', $msg, 10);

                redirect('/clients');
            }
        }

        public function delete_client($id) {

            $this->session_model->check_session_no_red();

            $client = $this->clients_model->get_client_data($id);

            if($client == false) {
                redirect('/clients');
            } else {
                $this->db->where('client_id', $id);
                $result = $this->db->delete('clients');

                if($result == true) {
                    $msg = array(
                        'success' => true,
                        'message' => 'Pomyślnie usunięto dane klienta',
                    );
                } else {
                    $msg = array(
                        'success' => false,
                        'message' => 'Nie udało się usunąć danych klienta',
                    );
                }

                $this->session->set_tempdata('message', $msg, 10);

                redirect('/clients');
            }
        }
    }
    
?>