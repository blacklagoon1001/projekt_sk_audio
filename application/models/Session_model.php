

<?php

Class Session_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function check_session($url) {

        $session = $this->session->userdata('loggedin');

        if($session !== NULL) {
            $url;
        } else {
            redirect('/login');
        }
    }

    public function check_session_no_red() {

        $session = $this->session->userdata('loggedin');

        if($session == NULL) {
            redirect('/login');
        }
    }

    public function check_user_session($id) {

        $session = $this->session->userdata('loggedin');

        if($id == $session['user_id']) {
            return true;
        } else {
            return false;
        }

    }

    public function get_user_session_id() {

        $session = $this->session->userdata('loggedin');

        return $session['user_id'];

    }
}

?>

