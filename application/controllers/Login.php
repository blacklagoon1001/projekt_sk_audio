<?php

    Class Login extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->model('login_model');
        }

        public function index() {

            $session = $this->session->userdata('loggedin');

            if($session !== NULL) {
                redirect($this->twig->display('/pages/welcome_message'));
            } else {
                $this->twig->display('/pages/login');
            }
        }

        public function user_login_process() {

            $this->form_validation->set_rules('login', 'Login', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == FALSE) {

                if(isset($this->session->userdata['loggedin'])) {
                    $this->twig->display('/pages/welcome_message');
                } else {
                    $this->twig->display('/pages/login');
                }
            } else {

                $data = array(
                    'login' => $this->input->post('login'),
                    'password' => $this->input->post('password')
                );
                $result = $this->login_model->login($data);
                if ($result == TRUE) {

                    $login = $this->input->post('login');
                    $result = $this->login_model->read_user_information($login);

                    if ($result != false) {
                        $session_data = array(
                            'login' => $result[0]->name,
                            'user_id' => $result[0]->user_id,
                        );

                        // Add user data in session
                        $this->session->set_userdata('loggedin', $session_data);

                        redirect($this->twig->display('/pages/welcome_message'));
                    }
                } else {
                    $data = array(
                        'error_message' => 'Invalid Username or Password'
                    );
                    $this->twig->display('/pages/login', $data);
                }
            }
        }

        public function logout() {

            $this->session->unset_userdata('loggedin');
            $data['message_display'] = 'Successfully Logout';
            redirect($this->twig->display('/pages/login', $data));
        }
    }
    
?>