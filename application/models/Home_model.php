

<?php

Class Home_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_equipment_count() {

        $this->db->select('*');
        $this->db->from('products');
        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            return 0;
        } else {
            return $query->num_rows();
        }
    }

    public function get_clients_count() {

        $this->db->select('*');
        $this->db->from('clients');
        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            return false;
        } else {
            return $query->num_rows();
        }
    }

    public function get_events_count() {

        $date = date("Y-m-d H:m:s");
        $this->db->select('*');
        $this->db->from('orders');
        $this->db->where('party_end >= ', $date);

        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            return false;
        } else {
            return $query->num_rows();
        }
    }
}

?>

