

<?php

Class Orders_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_past_events() {
        $date = date("Y-m-d H:m:s");
        $this->db->select('o.order_id, o.client_id, o.name, o.description, o.party_start, o.party_end, o.status, c.name as client_name, c.address, c.place, c.postal_code');
        $this->db->from('orders o');
        $this->db->join('clients c', 'o.client_id=c.client_id');
        $this->db->where('o.party_end < ', $date);
        $this->db->order_by("o.party_start", "asc");
        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            return false;
        } else {
            return $query->result();
        }
    }

    public function get_all_pending_events() {
        $date = date("Y-m-d H:m:s");
        $this->db->select('o.order_id, o.client_id, o.name, o.description, o.party_start, o.party_end, o.status, c.name as client_name, c.address, c.place, c.postal_code');
        $this->db->from('orders o');
        $this->db->join('clients c', 'o.client_id=c.client_id');
        $this->db->where('o.party_end >= ', $date);
        $this->db->order_by("o.party_start", "asc");
        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            return false;
        } else {
            return $query->result();
        }
    }

    public function get_equipment_for_event($id) {
        $condition = ('po.order_id ='.$id.' and p.product_id=po.product_id and pc.category_id=p.category_id');
        $this->db->select('po.product_order_id, po.quantity, po.order_id, po.product_id, p.name, pc.name as category_name');
        $this->db->from('product_order po, products p, product_categories pc');
        $this->db->where($condition);
        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            return false;
        } else {
            return $query->result();
        }
    }

    public function get_event_data($id) {
        $this->db->select('*');
        $this->db->from('orders');
        $this->db->where('order_id', $id);
        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            return false;
        } else {
            return $query->result();
        }
    }

    public function get_equipment_categories() {

        $this->db->select('*');
        $this->db->from('product_categories');
        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            return false;
        } else {
            return $query->result();
        }
    }

    public function get_equipment($data) {

        $condition = "category_id =" . "'" . $data . "'";
        $this->db->select('*');
        $this->db->where($condition);
        $this->db->from('products');

        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            return false;
        } else {
            return $query->result();
        }
    }

    public function get_equipment_data($id) {
        $condition = "products.product_id =" . "'" . $id . "'";
        $this->db->select('products.product_id, products.name as product_name, products.description, products.available, products.quantity, product_categories.category_id');
        $this->db->from('products');
        $this->db->join('product_categories', 'products.category_id=product_categories.category_id');
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

