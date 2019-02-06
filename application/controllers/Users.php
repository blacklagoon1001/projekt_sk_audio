<?php

    Class Users extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->model('users_model');
        }

        public function index() {

            $users = $this->users_model->get_all_users();

            $user_session = $this->session_model->get_user_session_id();

            $data = array(
                'users' => $users,
                'user_id' => $user_session,
            );

            $message = $this->session->tempdata('message');
            $this->session->unset_tempdata('message');
            if(isset($message)) {
                $data['message'] = $message;
            }

            $url = $this->twig->display('/pages/users', $data);
            $this->session_model->check_session($url);
        }

        public function edit($id) {

            $this->session_model->check_session_no_red();

            $user = $this->users_model->get_user_data($id);

            $user_session = $this->session_model->check_user_session($id);

            $data = array(
                'user' => $user,
                'edit_pass' => $user_session
            );

            $message = $this->session->tempdata('message');
            $this->session->unset_tempdata('message');
            if(isset($message)) {
                $data['message'] = $message;
            }

            if($user == false) {
                redirect('/users');
            } else {
                $this->twig->display('/pages/edit_user', $data);
            }
        }

        public function add() {

            $this->session_model->check_session_no_red();

            $this->twig->display('/pages/add_user');
        }

        public function edit_user($id) {

            $this->session_model->check_session_no_red();

            $this->form_validation->set_rules('name', 'Login', 'required');
            $this->form_validation->set_rules('name_surname', 'Imię i nazwisko', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');

            if ($this->form_validation->run() == FALSE) {
                redirect('/users/edit/'.$id.'');
            } else {
                $data = array(
                    'name' => $this->input->post('name'),
                    'name_surname' => $this->input->post('name_surname'),
                    'email' => $this->input->post('email'),
                );

                if(isset($_POST['password']) && $_POST['password'] !== null ) {
                    if($_POST['password'] == $_POST['password2']) {
                        $data['password'] = md5($this->input->post('password'));
                    }
                }

                $this->db->where('user_id', $id);
                $result = $this->db->update('users', $data);

                if($result == true) {
                    $msg = array(
                        'success' => true,
                        'message' => 'Pomyślnie edytowano dane użytkownika',
                    );
                } else {
                    $msg = array(
                        'success' => false,
                        'message' => 'Nie udało się zedytować danych użytkownika',
                    );
                }

                $this->session->set_tempdata('message', $msg, 10);

                redirect('/users/edit/'.$id.'');
            }
        }

        public function add_user() {

            $this->session_model->check_session_no_red();

            $this->form_validation->set_rules('name', 'Nazwa', 'required');
            $this->form_validation->set_rules('name_surname', 'Imię i nazwisko', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Hasło', 'required');
            $this->form_validation->set_rules('password2', 'Powtórz hasło', 'required|matches[password]');

            if ($this->form_validation->run() == FALSE) {
                redirect('/users/add');
            } else {
                $data = array(
                    'name' => $this->input->post('name'),
                    'name_surname' => $this->input->post('name_surname'),
                    'email' => $this->input->post('email'),
                    'password' => md5($this->input->post('password')),
                );

                $result = $this->db->insert('users', $data);

                if($result == true) {
                    $msg = array(
                        'success' => true,
                        'message' => 'Pomyślnie dodano nowego użytkownika',
                    );
                } else {
                    $msg = array(
                        'success' => false,
                        'message' => 'Nie udało się dodać nowego użytkownika',
                    );
                }

                $this->session->set_tempdata('message', $msg, 10);

                redirect('/users');
            }
        }

        public function delete_user($id) {

            $this->session_model->check_session_no_red();

            $user = $this->users_model->get_user_data($id);

            if($user == false) {
                redirect('/users');
            } else {
                $this->db->where('user_id', $id);
                $result = $this->db->delete('users');

                if($result == true) {
                    $msg = array(
                        'success' => true,
                        'message' => 'Pomyślnie usunięto dane użytkownika',
                    );
                } else {
                    $msg = array(
                        'success' => false,
                        'message' => 'Nie udało się usunąć danych użytkownika',
                    );
                }

                $this->session->set_tempdata('message', $msg, 10);

                redirect('/users');
            }
        }
    }


?>