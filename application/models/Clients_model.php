

<?php

Class Clients_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_clients() {

        $this->db->select('*');
        $this->db->from('clients');
        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            return false;
        } else {
            return $query->result();
        }
    }

    public function get_client_data($id) {
        $condition = "client_id =" . "'" . $id . "'";
        $this->db->select('*');
        $this->db->from('clients');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            return false;
        } else {
            return $query->row();
        }
    }
}

?>

