<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
        $this->load->model('orders_model');
	}
	
	public function index()
	{
        $client_count = $this->home_model->get_clients_count();
        $equipment_count = $this->home_model->get_equipment_count();
        $events_count = $this->home_model->get_events_count();

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
            'client_count' => $client_count,
            'equipment_count' => $equipment_count,
            'events_count' => $events_count,
            'events_past' => $event_past_arr,
            'events_pending' => $event_pend_arr,
        );

        $url = $this->twig->display('pages/welcome_message', $data);
        $this->session_model->check_session($url);

	}
}
