<?php

Class Orders extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('orders_model');
        $this->load->model('clients_model');
        $this->load->model('equipment_model');
    }

    public function index() {

        $event_past_arr = array();
        $event_pend_arr = array();

        $events_past = $this->orders_model->get_all_past_events();
        $events_pending = $this->orders_model->get_all_pending_events();

        foreach($events_past as $event_pa) {
            $data = $this->orders_model->get_equipment_for_event($event_pa->order_id);

            $event_past_arr[] = array(
                'event' => $event_pa,
                'equipment' => $data,
            );
        }

        foreach($events_pending as $event_pe) {
            $data = $this->orders_model->get_equipment_for_event($event_pe->order_id);

            $event_pend_arr[] = array(
                'event' => $event_pe,
                'equipment' => $data,
            );
        }

        $data = array(
            'events_past' => $event_past_arr,
            'events_pending' => $event_pend_arr,
        );

        $message = $this->session->tempdata('message');
        $this->session->unset_tempdata('message');
        if(isset($message)) {
            $data['message'] = $message;
        }

        $url = $this->twig->display('/pages/orders', $data);
        $this->session_model->check_session($url);
    }

    public function add() {

        $this->session_model->check_session_no_red();

        $clients = $this->clients_model->get_all_clients();

        $light = array();
        $sound = array();

        $categories = $this->equipment_model->get_equipment_categories();

        foreach($categories as $category) {

            $data = $this->equipment_model->get_equipment($category->category_id);

            if($data !== false) {
                if($category->main_category == 1) {
                    $sound[] = array(
                        'category' => $category->name,
                        'category_id' => $category->category_id,
                        'products' => $data,
                    );
                }  else {
                    $light[] = array(
                        'category' => $category->name,
                        'category_id' => $category->category_id,
                        'products' => $data,
                    );
                }
            }
        }

        $data = array(
            'clients' => $clients,
            'sound' => $sound,
            'light' => $light,
        );

        $this->twig->display('/pages/add_order', $data);
    }

    public function add_order() {

        $this->session_model->check_session_no_red();

        $this->form_validation->set_rules('name', 'Nazwa', 'required');
        $this->form_validation->set_rules('start', 'Start', 'required');
        $this->form_validation->set_rules('end', 'Koniec', 'required');

        if ($this->form_validation->run() == FALSE) {
            redirect('/orders/add');
        } else {
            $id = $this->equipment_model->get_equipment_max_id();
            $counter = $id[0]->max_id;

            $insert = array();

            for($i=1; $i<=$counter; $i++) {
                $data = $_POST['quantity_'.$i.''];
                if($data != NULL and $data != 0) {
                    $insert[] = array(
                        'product_id' => $i,
                        'quantity' => $data,
                    );
                }
            }

            $data = array(
                'client_id' => $this->input->post('client_id'),
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'party_start' => $this->input->post('start'),
                'party_end' => $this->input->post('end'),
                'status' => 1,
            );

            $this->db->trans_begin();

            $res = $this->db->insert('orders', $data);
            $last_id = $this->db->insert_id();

            foreach($insert as $row) {
                $data_i = array(
                    'order_id' => $last_id,
                    'product_id' => $row['product_id'],
                    'quantity' => $row['quantity'],
                );
                $res_i = $this->db->insert('product_order', $data_i);
            }
            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
            }
            else {
                $this->db->trans_commit();
                redirect('/orders');
            }

        }
    }

    public function delete_order($id) {

        $this->session_model->check_session_no_red();

        $order = $this->orders_model->get_event_data($id);


        if($order == false) {
            redirect('/orders');
        } else {

            $this->db->trans_begin();

            $this->db->where('order_id', $id);
            $result = $this->db->delete('orders');

            $this->db->where('order_id', $id);
            $result = $this->db->delete('product_order');

            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                $msg = array(
                    'success' => false,
                    'message' => 'Nie udało się usunąć wydarzenia',
                );
            }
            else {
                $this->db->trans_commit();
                $msg = array(
                    'success' => true,
                    'message' => 'Pomyślnie usunięto wydarzenie',
                );
            }

            $this->session->set_tempdata('message', $msg, 10);

            redirect('/orders');
        }
    }

}

?>