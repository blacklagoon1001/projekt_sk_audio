

<?php

Class Equipment_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
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

    public function get_equipment_max_id() {

        $this->db->select_max('product_id', 'max_id');
        $query = $this->db->get('products');

        return $query->result();
    }

    public function get_categories($main) {
        $this->db->select('*');
        $this->db->where('main_category', $main);
        $this->db->from('product_categories');
        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            return false;
        } else {
            return $query->result();
        }
    }

    public function check($start, $end, $category_id) {

        $query = $this->db->query("select p2.product_id, p2.name, p2.description, pc2.category_id, pc2.main_category, p2.quantity,
    (
        p2.quantity
        -
        ifnull((
        select sum(po.quantity)
            from products as p 
            join product_categories as pc on p.category_id = pc.category_id
            join product_order as po on p.product_id = po.product_id
            join orders as o on o.order_id = po.order_id
            where  
                p.product_id = p2.product_id
                and (
                  '".$start."' between o.party_start and o.party_end
                    or
                    '".$end."' between o.party_start and o.party_end
                    )
        ), 0)
    ) as available_quantity
from products as p2 
join product_categories as pc2 on p2.category_id = pc2.category_id where pc2.category_id = '".$category_id."'");

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

